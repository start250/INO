<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
?>
<form  class=" w-50 p-3" method="POST" enctype="multipart/form-data">
	<?php if($_GET['section']=="academic"){
         	echo '<select name="level" onchange="setLevel()" id="select_level" class="selectAcademicInfo form-control">
         	<option>Select Level...</option>
    <option value="nursary">Nursary</option>
    <option value="primary">Primary</option>
    <option value="high school">High School</option>
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
<script type="text/javascript">
  function setLevel(){
     level=document.getElementById("select_level").value;
     if(level=="nursary"){
       topic="<option>baby</option><option>middle</option><option>top class</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="primary"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>set</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
      else if(level=="high school"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>biology</option><option>chemistry</option><option>history</option><option>computer</option><option>kiswahili</option><option>literature</option><option>economie</option><option>entrepreneurship</option><option>geography</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="other info"){
     	topic="<option>link(s)</option><option>Tips to Win Scholaship</option><option>Now open</option>";
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
	$section=mysqli_escape_string($conn,@$_GET['section']);
	$thumb_target=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Thumbs/".basename($_FILES['thumb']['name']);
	$thumb=mysqli_real_escape_string($conn,basename( $_FILES["thumb"]["name"]));
	if(move_uploaded_file($_FILES["thumb"]["tmp_name"], $thumb_target)){

    $query="INSERT INTO videos (title,description,thumb,course,video_link,section,level,year) 
             VALUES ('$title','$description','$thumb','$course','$video_link','$section','$level','$yr')";
    if($conn->query($query)===TRUE)
		echo "Publish successfully!!";}
		else{
			echo "Error occured!!! Try Again";
		}

}

?>