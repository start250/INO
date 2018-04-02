<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');

if (isset($_GET['delete'])) {
  
  mysqli_query($conn,"DELETE from videos where id='".$_GET['delete']."'");
}
  $query=mysqli_query($conn,"SELECT * FROM videos WHERE section='".$_GET['section']."' ORDER BY id DESC");
?>
<div class="row"><div class="col-lg-4 form-group">
<form  class="" method="POST" enctype="multipart/form-data">
	<?php
	if(@$_GET['section']=="business")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Business_Opportunities</option>
    <option>Business_Advice</option>
    <option>Biographies_Of_Successful_Business_Men</option></select>';
    else if(@$_GET['section']=="health")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Nutrion</option>
    <option>Traditional_Medecine</option>
    <option>Serious_Deseases</option>
    <option>Doctor_Advice</option></select>';
    else if(@$_GET['section']=="eng_class")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>For_Biginners</option>
    <option>For_Intermediate</option>
    <option>Advanced_English</option>
    <option>Business_English</option></select>
    ';
    else if (@$_GET['section']=="culture")
       echo '<select name="category" class="form-control"><option>Select Category</option>
   <option>Amateka_yu_Rwanda</option>
    <option>Imigani</option>
    <option>Ibisakuzo</option>
    <option>Kirazira_zumuco_Nyarwanda</option>
    <option>Baza_Sokuru</option></select>'; 
    else if(@$_GET['section']=="rules_road")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Ibibazo_nibisubizo</option>
    <option>Ibyapa</option></select>';
    ?>
<br>
<input class="form-control" type="text" placeholder="Title" name="title"><br>
<textarea placeholder="Description..." name="description" class="form-control"></textarea><br>
<input type="text" name="video_link" class="form-control" placeholder="Video link"><br>
Thumbnail
<input type="file" name="thumb" class="form-control"><br>
<button type="submit" class="btn btn-primary" name="publish_video">Publish Video</button>

</form>
</div>
<div class="col-lg-8">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) {


?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td style="font-size: 25px;"> <i onclick='deletetask<?php echo $row['id']; ?>()' class="fa fa-trash"></i> 
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
       
        <td colspan="4">You haven't any video.</td>
      </tr>
  <?php
}
      ?>

    </tbody></table></div>
  <div class="col-md-4">
     </div>
</div>

<?php
if(isset($_POST['publish_video'])){
	if(@$_GET['section']!="academic"){
	$category=mysqli_escape_string($conn,$_POST['category']);
	$title=mysqli_escape_string($conn,$_POST['title']);
	$description=mysqli_escape_string($conn,$_POST['description']);
	$video_link=mysqli_escape_string($conn,$_POST['video_link']);
	$section=mysqli_escape_string($conn,@$_GET['section']);
	$thumb_target=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Thumbs/".basename($_FILES['thumb']['name']);
	$thumb=mysqli_real_escape_string($conn,basename( $_FILES["thumb"]["name"]));
	if(move_uploaded_file($_FILES["thumb"]["tmp_name"], $thumb_target)){

    $query="INSERT INTO videos (title,description,thumb,category,video_link,section) 
             VALUES ('$title','$description','$thumb','$category','$video_link','$section')";
    if($conn->query($query)===TRUE)
		echo "Publish successfully!!";}
		else{
			echo "Error occured!!! Try Again";
		}
}
}



?>