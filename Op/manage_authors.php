


<?php
if (isset($_POST['register'])) {

  $names=trim(mysqli_real_escape_string($conn,$_POST['names']));
$username=trim(mysqli_real_escape_string($conn,$_POST['username']));
$password=trim(mysqli_real_escape_string($conn,$_POST['password']));
$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
if (!empty($names)&&!empty($username)&&!empty($password)&&!empty($email)) {
 mysqli_query($conn,"INSERT INTO adminauthor(names,username,password,email,id,priority) values('$names','$username','$password','$email','".rand(10000000,99999999)."','author')") or die('Failed to register new author'.mysqli_error());
 echo "New author <strong>$names</strong> registered!";
}
else
{
  echo "Both Names, Password, Username and email are required.";
}


}
?>
<?php

$query=mysqli_query($conn,"SELECT * from adminauthor where priority='author'");

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
        <td><?php echo $row['names']; ?></td>
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
        <label for="Names" class="">Names</label>
        <input type="names" name="names" id="Names" class="form-control" placeholder="Names" required>
    </div> <div class="form-group">

   <label for="username" class="">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
  </div>

 <div class="form-group">
        <label for="inputPassword" class="">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="email" class="">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
    </div>
    
     <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register"><i class="fa fa-pencil"></i> Register</button>
       </div> 

      </form></div>
</div>
