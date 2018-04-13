<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(isset($_SESSION['level'])&&$_SESSION['level']==='admin'&&isset($_GET['id'])&&isset($_GET['delete'])&&$_GET['id']!==''&&$_GET['delete']!=='') { 
  if(mysqli_query($conn,"DELETE from books where _id='".$_GET['id']."'")){
    $file = $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$_GET['delete'];
    
    if (!unlink($file))
      {
        ?>
        <div class="alert alert-danger">
          Error deleting book.
      </div>
        <?php 
      }
    else
      {
        ?>
        <div class="alert alert-success">
        Deleted file successfully.
      </div>
        <?php  
      }
  }else{
    ?>
        <div class="alert alert-danger">
        Error deleting book. Try again.
      </div>
        <?php  
  }

}
if (isset($_POST['search_post_btn'])) {
	$search_post=trim($_POST['search_post_text']);
}


if (@$search_post!=''&&@$_SESSION['level']=='admin') {
$query=mysqli_query($conn,"SELECT * from books where title LIKE '%$search_post%' OR author LIKE '%$search_post%' OR pages LIKE '%$search_post%' OR added_by LIKE '%$search_post%'") or die('Failed to search '.mysqli_error());
}
elseif (@$search_post!=''&&@$_SESSION['level']=='author') {
	$query=mysqli_query($conn,"SELECT * from books where title LIKE '%$search_post%' OR author LIKE '%$search_post%' OR pages LIKE '%$search_post%' OR added_by LIKE '%$search_post%' AND added_by='".$_SESSION['username']."'") or die('Failed to search '.mysqli_error());
}
elseif(@!$search_post&&@$_SESSION['level']==='admin')
{
	$query=mysqli_query($conn,"SELECT * from books WHERE section='".$_GET['section']."'");
}
elseif (@!$search_post&&$_SESSION['level']==='author') {
	$query=mysqli_query($conn,"SELECT * from books where added_by='".$f_ad1['username']."'") or die('Failed to search '.mysqli_error());
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
        <td style="font-size: 25px;"> <i onclick="deletetask('<?= $row['title'] ?>',<?= $row['_id'] ?>,'<?= $row['book_link'] ?>')" class="fa fa-trash"></i> | <a href="dashboard.php?section=<?php echo $_GET['section']; ?>&action=upload_files&edit=<?php echo $row['_id']; ?>"><i class="fa fa-pencil"></i></a> 
      </tr>
     
      <?php
}
?><?php
if (mysqli_num_rows($query)==0) {
  ?>
  <tr>
       
        <td colspan="4">You haven't any books.</td>
      </tr>
  <?php
}
      ?>

    </tbody></table></div>
  <div class="col-md-4">
     </div>
</div>
 <script>
function deletetask(title,id,link) {
    
    if (confirm('Do you really want to delete this Book '+title+' ?') == true) {
   window.location='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?= $_GET['action']; ?>&id='+id+'&delete='+encodeURIComponent(link);
    } 
  
}
</script>