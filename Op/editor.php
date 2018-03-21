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
<form method="POST" enctype="multipart/form-data">
  <div class="row">
	<div class="col-sm-9">
		<input type="text" name="title" class="form-control" id="title" style="" placeholder="Title..." /><br>
        <textarea class="ckeditor" name="editor"></textarea>
    </div>
    <div class="col-sm-3">
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
    else if(@$_GET['section']=="academic")
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
</select>'
    ?>
<br>
      Featured image<input type="file" name="featured_image" class="form-control">
    </div></div>
    <center><input type="submit" name="publish_post" value="publish" class="btn btn-default" style="border:2px solid #c2c2a3;"></center>
</form>
<style>
</style>
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
  document.getElementById("year").innerHTML=""
}
</script>
<?php  
echo '<script type="text/javascript" src="ckeditor/ckeditor.js"></script>';
 ?>
<style type="text/css">
.selectAcademicInfo{
    padding: 5px 8px;
    border: 2px solid #c2c2a3;
    box-shadow: none;
    
  }
</style>
<?php
if(isset($_POST['publish_post'])){
  if($_GET['section']!="academic"){
    $title=mysqli_escape_string($conn,$_POST['title']);
    $content=mysqli_escape_string($conn,$_POST['editor']);
    $section=mysqli_escape_string($conn,$_GET['section']);
    $category=mysqli_escape_string($conn,$_POST['category']);
    $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
    $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featured_images/".basename( $_FILES["featured_image"]["name"]);
    $qr="INSERT INTO posts (title,content,section,category,featured_image) VALUES ('$title','$content','$section','$category','$featured_image')";
    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
    if($conn->query($qr)===TRUE)
      echo "Posting sucessfully!!";
  }
}
if(isset($_POST['publish_post'])){
  if ($_GET['section']=="academic") {
    $title=mysqli_escape_string($conn,$_POST['title']);
    $content=mysqli_escape_string($conn,$_POST['editor']);
    $section=mysqli_escape_string($conn,$_GET['section']);
    $category=mysqli_escape_string($conn,$_POST['category']);
    $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
    $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featured_images/".basename( $_FILES["featured_image"]["name"]);
    $yr=$_POST['year'];
    $level=$_POST['level'];
    $course=$_POST['course'];
    $qr="INSERT INTO posts (title,content,section,category,level,course,year,featured_image) VALUES ('$title','$content','$section','$category','$level','$course','$yr','$featured_image')";
    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
    if($conn->query($qr)===TRUE)
      echo "Posting sucessfully!!";
  }
}


?>
