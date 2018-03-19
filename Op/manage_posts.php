


<?php

if (isset($_POST['search_post_btn'])) {
	$search_post=trim($_POST['search_post_text']);
}


if (@$search_post!='') {
$query=mysqli_query($conn,"SELECT * from books where title LIKE '%$search_post%' OR author LIKE '%$search_post%' OR pages LIKE '%$search_post%' OR added_by LIKE '%$search_post%'") or die('Failed to search '.mysqli_error());
}
else
{
	$query=mysqli_query($conn,"SELECT * from books");
}
?>

  
      <div class="row">
  <div class="col-md-8">
    <h2>Available Books.</h2>
    <div class="search-container">
    <form action="" method="post">
      <input type="text" placeholder="Search post.." name="search_post_text" style="width: 75%;">
      <button type="submit" name="search_post_btn" style="width: 20%;"><i class="fa fa-search"></i></button>
    </form>
  </div>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>pages</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) {


?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo $row['pages']; ?></td>
        <td style="font-size: 25px;"> <i class="fa fa-trash"></i> | <i class="fa fa-pencil-square"></i> | <i class="fa fa-eye"></i></td>
      </tr>
      <?php
}
if (mysqli_num_rows($query)==0) {
  ?>
  <tr>
       
        <td colspan="4">You haven't any post.</td>
      </tr>
  <?php
}
      ?>

    </tbody></table></div>
  <div class="col-md-4">
     </div>
</div>
