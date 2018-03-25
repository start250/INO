<?php
if (isset($_GET['delete'])) {
	
	mysqli_query($conn,"DELETE from posts where id='".$_GET['delete']."'");
}
if (isset($_POST['search_post_btn'])) {
	$search_post=trim($_POST['search_post_text']);
}


if (@$search_post!=''&&@$_SESSION['admin']==$ad) {
$query=mysqli_query($conn,"SELECT * from posts where title LIKE '%$search_post%' OR author LIKE '%$search_post%' OR pages LIKE '%$search_post%' OR added_by LIKE '%$search_post%'") or die('Failed to search '.mysqli_error());
}
elseif (@$search_post!=''&&@$_SESSION['author']==$au) {
	$query=mysqli_query($conn,"SELECT * from posts where title LIKE '%$search_post%' OR author LIKE '%$search_post%' OR pages LIKE '%$search_post%' OR added_by LIKE '%$search_post%' AND added_by='".$f_ad1['username']."'") or die('Failed to search '.mysqli_error());
}
elseif(@!$search_post&&@$_SESSION['admin'])
{
	$query=mysqli_query($conn,"SELECT * from posts WHERE section='".$_GET['section']."'");
}
elseif (@!$search_post&&$_SESSION['author']) {
	$query=mysqli_query($conn,"SELECT * from posts where added_by='".$f_ad1['username']."'") or die('Failed to search '.mysqli_error());
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
        <th>Section</th>
        <th><?php if($_GET['section']=="academic") echo "Level|Course"; else echo "Category";?></th>
        <th>Created at</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) {


?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['section']; ?></td>
        <td><?php if($_GET['section']=="academic") echo $row['level']." | ".$row['course']; else echo $row['category']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td style="font-size: 25px;"> <i onclick='deletetask<?php echo $row['id']; ?>()' class="fa fa-trash"></i> | <a href="dashboard.php?section=<?php echo $_GET['section']; ?>&action=editor&edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-alt"></i></a>
      </tr>
      <script>
function deletetask<?php echo $row['id']; ?>() {
    
    if (confirm('Do you really want to delete this post \"<?php echo $row['title']; ?>\"?') == true) {
        location.href='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?php echo $_GET['action']; ?>&delete=<?php echo $row['id']; ?>';
    } 
  
}
</script>
      <?php
}
?><?php
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
    <script>
function deletetask<?php echo $row['_id']; ?>() {
    
    if (confirm('Do you really want to delete this Book \"<?php echo $row['title']; ?>\"?') == true) {
        location.href='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?php echo $_GET['action']; ?>&delete=<?php echo $row['id']; ?>';
    } 
  
}
</script>
