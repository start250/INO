<script type="text/javascript" src="/INOGIT/ckeditor/ckeditor.js"></script>
<?php
if(isset($_POST['update_post'])){
  echo '<script type="text/javascript">
	location.href="/INOGIT/dashboard.php?section=academic&action=editor&edit='.$_POST['id'].'";
</script>';
}

?>
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

if(isset($_GET['edit'])){
  require_once('DBfiles\connectDB.php'); 
$sql =  "SELECT * FROM Posts WHERE id='".$_GET["edit"]."'";
  $result = $conn->query($sql);
 
$stmt = $conn->prepare("SELECT * FROM Posts WHERE id='".$_GET["edit"]."'"); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
}else{
  $row= array('title' =>'' ,
  'content' =>''

 );
}


?>
<?php 
if(isset($_SESSION['message'])){
  echo '<div class="alert alert-success">'.$_SESSION['message'].'</div>';
  $_SESSION['message']='Oinc!';
  unset($_SESSION['message']);
}
?>

<form   method="POST" enctype="multipart/form-data">
  <div class="row">
	<div class="col-sm-9">
  <input name="id" value="<?=$row['id']?>" hidden>
		<input type="text" name="title" class="form-control" id="title" style="" value="<?=$row['title']?>" placeholder="Title..." /><br>
        <textarea width="100%" class="ckeditor" name="ckeditor"><?=$row['content']?></textarea>

    </div>
    <div class="col-sm-3">
      <?php
  
  if(@$_GET['section']=="business"){
    if($row['category']=='')
    $row['category']='Select Category';
    echo '<select name="category" class="form-control">'
  .'<option selected disabled>'.$row['category'].'</option>
  <option>Business Opportunities</option>
    <option>Business Advice</option>
    <option>Business News</option>
     <option>Biographies Of Successful Business Men</option></select>';
  }
  
    else if(@$_GET['section']=="health"){
      if($row['category']=='')
      $row['category']='Select Category';

       echo '<select name="category" class="form-control"><option disabled>Select Category</option>'
  .'<option selected disabled>'.$row['category'].'</option>
    <option>Nutrion</option>
    <option>Traditional_Medecine</option>
    <option>Serious_Deseases</option>
    <option>Doctor_Advice</option>
    <option>Health_News</option></select>';
    }
       
    else if(@$_GET['section']=="eng_class"){
      if($row['category']=='')
      $row['category']='Select Category';
        echo '<select name="category" class="form-control"><option disabled>Select Category</option>'
        .'<option selected disabled>'.$row['category'].'</option>
    <option>For_Beginners</option>
    <option>For_Intermediates</option>
    <option>Advanced_English</option>
    <option>Business_English</option></select>
    ';
    }
      
    else if (@$_GET['section']=="culture")
      { 
         if($row['category']=='')
    $row['category']='Select Category';
    
    echo '<select name="category" class="form-control"><option disabled>Select Category</option>'
       .'<option selected disabled>'.$row['category'].'</option>
   <option>Amateka_yu_Rwanda</option>
    <option>Imigani</option>
    <option>Ibisakuzo</option>
    <option>Kirazira_zumuco_Nyarwanda</option>
    </select>'; }
    else if(@$_GET['section']=="rules_road")
       {
        if($row['category']=='')
        $row['category']='Select Category';
        
        echo '<select name="category" class="form-control"><option disabled>Select Category</option>'
        .'<option selected disabled>'.$row['category'].'</option>
    <option>Ibibazo_nibisubizo</option>
    <option>Igazeti</option>
    <option>Ibyapa</option></select>';}
    else if(@$_GET['section']=="academic") 
{ if($row['category']=='')
  $row['category']='Select one';
  
  echo '<select name="level" onchange="setLevel()" id="select_level" class="selectAcademicInfo form-control">
      <option disabled>Select Level...</option>'
      .'<option selected disabled>'.$row['level'].'</option>
      <option value="nursary">Nursary</option>;
      <option value="primary">Primary</option>
      <option value="high school">High School</option>
      <option value="other info">Other Info</option></select>&nbsp;

    <select name="course" id="topic" onchange="setYa()" class="selectAcademicInfo form-control">
    <option disabled>Select course...</option>'
    .'<option selected disabled>'.$row['course'].'</option></select>&nbsp
    <select name="year" id="year" class="selectAcademicInfo form-control">
    <option disabled>Select Grade/Year...</option>'
    .'<option selected disabled>'.$row['year'].'</option></select>&nbsp
    ';
    }
    ?>
<br>
      Featured image<input type="file" name="featured_image" class="form-control">
     <?php if(isset($_GET['edit'])){
      echo '
      <input type="checkbox" checked name="keep_featured" value="'.$row['featured_image'].'" > Don\'t change featured image
      ';
    }?>
    <center><br><br><input type="submit" name="<?php 
    if(isset($_GET['edit'])){
      echo 'update_post';
      }else{
        echo 'publish_post';
        }?>" value="<?php 
    if(isset($_GET['edit'])){
      echo 'Update';
      }else{
        echo 'Publish';
        }?>" class="btn btn-default" style="border:2px solid #c2c2a3;"></center>
           </form>
           </div>

   </div>
   <div  style="background-color:#e6f5ff">
   <iframe allowtransparency="true" scrolling="no" frameborder="0" width="100%" height="400px" src="/INOGIT/upload.php"></iframe> 
  </div>


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
     	topic="<option>links</option><option>Tips to Win Scholaship</option><option>News</option><option>Academic news</option>";
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
// what is this double code??/ 
 if(isset($_POST['publish_post'])){
   if($_GET['section']!="academic"){
     $title=mysqli_escape_string($conn,$_POST['title']);
     $content=mysqli_escape_string($conn,$_POST['ckeditor']);
     $section=mysqli_escape_string($conn,$_GET['section']);
     $author=$_SESSION['username'];
     $category=mysqli_escape_string($conn,$_POST['category']);
     $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
     $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featuredimgs/".basename( $_FILES["featured_image"]["name"]);
     $qr="INSERT INTO posts (author,title,content,section,category,featured_image) 
     VALUES ('$author','$title','$content','$section','$category','$featured_image')";
     move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
     if($conn->query($qr)===TRUE)
       header("Location: /INOGIT/dashboard.php?section=academic");
   }
  else if ($_GET['section']=="academic") {
    $title=mysqli_escape_string($conn,$_POST['title']);
    $content=mysqli_escape_string($conn,$_POST['ckeditor']);
    $section=mysqli_escape_string($conn,$_GET['section']);
    $author=$_SESSION['username'];
    $category=mysqli_escape_string($conn,$_POST['category']);
    $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
    $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featuredimgs/".basename( $_FILES["featured_image"]["name"]);
    $yr=$_POST['year'];
    $level=$_POST['level'];
    $course=$_POST['course'];
    $qr="INSERT INTO posts (author,title,content,section,category,level,course,year,featured_image)
   VALUES ('$author','$title','$content','$section','$category','$level','$course','$yr','$featured_image')";
    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
    if($conn->query($qr)===TRUE)
      echo "Posting sucessfully!!";
  }
}


//a: Update Querry

if(isset($_POST['update_post'])){ 
  if($_GET['section']=="academic"){
    $title=mysqli_escape_string($conn,$_POST['title']);
    $content=mysqli_escape_string($conn,$_POST['ckeditor']);
    $section=mysqli_escape_string($conn,$_GET['section']);
    $category=mysqli_escape_string($conn,$_POST['category']); 
    if(!isset($_POST['keep_featured'])){
      $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
   
    }else{
      $featured_image==mysqli_escape_string($conn,$_POST['keep_featured']);
    }
    $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featuredimgs/".basename( $_FILES["featured_image"]["name"]);
    $yr=$_POST['year'];
    $level=$_POST['level'];
    $course=$_POST['course'];
    $qr="UPDATE posts 
    SET 
    title= '$title',
    content='$content',
    section='$section',
    category='$category',
    level='$level',
    course='$course',
    year='$yr',
    featured_image='$featured_image'WHERE id=".$_GET['edit'];
    move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
    if($conn->query($qr)===TRUE){ 
      $_SESSION['message']="Update Successful!";
    }
  
}else if($_GET['section']!="academic"){
  $title=mysqli_escape_string($conn,$_POST['title']);
  $content=mysqli_escape_string($conn,$_POST['ckeditor']);
  $section=mysqli_escape_string($conn,$_GET['section']);
  $category=mysqli_escape_string($conn,$_POST['category']); 
  if(!isset($_POST['keep_featured'])){
    $featured_image=mysqli_escape_string($conn,basename( $_FILES["featured_image"]["name"]));
 
  }else{
    $featured_image=mysqli_escape_string($conn,$_POST['keep_featured']);
  }
  $destination=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Featuredimgs/".basename( $_FILES["featured_image"]["name"]);
  
  $qr="UPDATE posts 
  SET 
  title= '$title',
  content='$content',
  section='$section',
  category='$category',  
  featured_image='$featured_image' WHERE id=".$_GET['edit'];
  move_uploaded_file($_FILES["featured_image"]["tmp_name"], $destination);
  if($conn->query($qr)===TRUE){
    
   $_SESSION['message']="Update Successful!";
  }


}
}