<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
?>
<form  class=" w-50 p-3" method="POST" enctype="multipart/form-data">
	<?php
	if(@$_GET['section']=="business")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Business Opportunities</option>
    <option>Business Advice</option>
    <option>Biographies</option></select>';
    else if(@$_GET['section']=="health")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Nutrion</option>
    <option>Traditional Medecine</option>
    <option>Serious Deseases</option>
    <option>Doctor Advice</option></select>';
    else if(@$_GET['section']=="eng_class")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Beginners</option>
    <option>Intermediate</option>
    <option>Advanced</option>
    <option>For Business</option></select>
    ';
    else if (@$_GET['section']=="culture")
       echo '<select name="category" class="form-control"><option>Select Category</option>
   <option>Amateka</option>
    <option>Imigani</option>
    <option>Ibisakuzo</option>
    <option>Kirazira</option>
    <option>Ibisakuzo</option></select>'; 
    else if(@$_GET['section']=="rules_road")
        echo '<select name="category" class="form-control"><option>Select Category</option>
    <option>Ibibazo nibisubizo</option>
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