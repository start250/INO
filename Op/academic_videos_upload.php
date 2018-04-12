<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');

if (isset($_GET['delete'])) {
  
  mysqli_query($conn,"DELETE from academicvideos where id='".$_GET['delete']."'");
}
  $query=mysqli_query($conn,"SELECT * from academicvideos");
?>

<div class="row"><div class="col-lg-4 form-group">
<form  class="" method="POST" enctype="multipart/form-data">
	<?php if($_GET['section']=="academic"){
         	echo '<select name="level" onchange="setLevel()" id="select_level" class="selectAcademicInfo form-control">
         	<option>Select Level...</option>
    <option value="nursary">Nursary</option>
    <option value="primary">Primary</option>Advanced level
    <option value="high school">Ordinary level</option>
    <option value="high school">Advanced level</option>
    <option value="other info">Other Info</option>
</select>&nbsp;
<select name="course" id="topic" onchange="setYa()" class="selectAcademicInfo form-control">
<option>Select Course...</option>
</select>&nbsp
<select name="year" id="year" class="selectAcademicInfo form-control">
<option>Select...</option>
</select>&nbsp';
         }?>

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
        <th>Course</th>
        <th>Level</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) {


?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td><?php echo $row['level']; ?></td>
        <td style="font-size: 25px;"> <i onclick='deletetask<?php echo $row['id']; ?>()' class="fa fa-trash"></i> | <a href="dashboard.php?section=<?php echo $_GET['section']; ?>&action=upload_videos&edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-alt"></i></a>
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
    <script>
function deletetask<?php echo $row['_id']; ?>() {
    
    if (confirm('Do you really want to delete this Book \"<?php echo $row['title']; ?>\"?') == true) {
        location.href='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?php echo $_GET['action']; ?>&delete=<?php echo $row['id']; ?>';
    } 
  
}
</script>


</div>
</div>
<script type="text/javascript">
  function setLevel(){
     level=document.getElementById("select_level").value;
     if(level=="nursary"){
       topic="<option>baby</option><option>middle</option><option>top class</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="primary"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>social studies</option><option>math</option><option>set</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
      else if(level=="high school"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>biology</option><option>chemistry</option><option>history</option><option>computer</option><option>kiswahili</option><option>literature</option><option>economie</option><option>entrepreneurship</option><option>geography</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="other info"){
     	topic="<option>link(s)</option><option>Tips to Win Scholaship</option><option>Academic news</option><option>News</option>";
     	topic_s=document.getElementById("topic");
     	topic_s.innerHTML=topic;
     }


  }

function setYa(){
   topic1=document.getElementById("topic").value;
   level=document.getElementById("select_level").value;
  if(topic1=="economie" || topic1=="literature"){
    year1="<option>4</option><option>5</option><option>6</option>"
  year_s=document.getElementById("year");
  year_s.innerHTML=year1;
}
else if(level!="nursary"){
  year1="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>"
  year_s=document.getElementById("year");
  year_s.innerHTML=year1;
}

else
  document.getElementById("year").innerHTML="";
}
</script>
<?php
if(isset($_POST['publish_video'])){

	$course=mysqli_escape_string($conn,$_POST['course']);
	$level=mysqli_escape_string($conn,$_POST['level']);
	$yr=mysqli_escape_string($conn,$_POST['year']);
	$title=mysqli_escape_string($conn,$_POST['title']);
	$description=mysqli_escape_string($conn,$_POST['description']);
	$video_link=mysqli_escape_string($conn,$_POST['video_link']);
	//$section=mysqli_escape_string($conn,$_GET['section']);
	$thumb_target=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Thumbs/".basename($_FILES['thumb']['name']);
	$thumb=mysqli_real_escape_string($conn,basename( $_FILES["thumb"]["name"]));
	if(move_uploaded_file($_FILES["thumb"]["tmp_name"], $thumb_target)){

    $qry="INSERT INTO academicvideos (title,description,thumb,course,video_link,level,year) VALUES ('$title','$description','$thumb','$course','$video_link','$level','$yr')";
    if($conn->query($qry)===TRUE)
		echo "Publish successfully!!";
     }
		else{
			echo "Error occured!!! Try Again";
		}

}

?>