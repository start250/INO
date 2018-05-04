<?php
if (isset($_POST['register'])) {
 
$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
if (!empty($email)) {
 mysqli_query($conn,"UPDATE users SET level='author' WHERE email='$email'") or die('Error registering author');
  echo "New author <strong>$email</strong> registered!";
}
else
{
  echo "email is required.";
}


}
?>
<?php

$query=mysqli_query($conn,"SELECT * from users where level='author'");

?>

  
      <div class="row">
  <div class="col-sm-6">
    <h2>Available authors.</h2>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Names</th>
        <th>Username</th>
        <th>email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) {


?>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td style="font-size: 25px;"> <i class="fa fa-trash"></i> | <i class="fa fa-pencil-square"></i></td>
      </tr>
      <?php
}
if (mysqli_num_rows($query)==0) {
  ?>
  <tr>
       
        <td colspan="4">You haven't any author.</td>
      </tr>
  <?php
}
      ?>

    </tbody></table></div>
  <div class="col-sm-6">  <h2>Register new authors.</h2>
      <form class="form-signin" method="POST" action="" class="">
    <div class="form-group">
        <label for="email" class="">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
    </div>
    
     <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register"><i class="fa fa-pencil"></i> Register</button>
       </div> 

      </form></div>
</div>
