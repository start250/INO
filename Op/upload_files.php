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
      else if(level=="Ordinary level" || level=="Advanced level"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>biology</option><option>chemistry</option><option>history</option><option>computer</option><option>kiswahili</option><option>literature</option><option>economie</option><option>entrepreneurship</option><option>geography</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="other info"){
      topic="<option>Microbiololgy</option><option>Physiology</option><option>Biodiversity</option><option>Oral Medicine</option><option>Pharmacology</option><option>Toxicology</option><option>Pharmacognosy</option><option>Biophyisycs</option><option>Marketing</option><option>Business</option><option>International relations</option><option>Botany</option><option>Zoology</option><option>Botany</option><option>Human nutrition</option><option>Sociology</option><option>Mental health</option><option>Physiology</option><option>Radiology</option><option>Geology</option><option>Hydrology</option><option>ICT</option><option>Computer programming</option><option>Biomolecular biology</option><option>Philosophy</option><option>Theology</option><option>Sociology</option><option>Astronomy</option><option>Economics</option><option>Laws</option><option>Archelogy</option><option>Veterinary medicine</option><option>Ecology</option><option>Electricity</option><option>Geography</option><option>History</option><option>Chemistry</option><option>Physics</option><option>English</option><option>Entrepreneurship</option><option>Mathematics</option><option>Kinyarwanda</option><option>Computer</option><option>Journalism</option><option>Education</option><option>Psychology</option>";
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
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');

if (isset($_GET['edit'])) {
    $sql3=mysqli_query($conn,"select * from books where _id='".$_GET['edit']."'");
    $fetch3=mysqli_fetch_array($sql3);


echo '<h3>Book Information...</h3>';

}
?> 
<form  class=" w-50 p-3" method="POST" enctype="multipart/form-data">
<input class="form-control" type="text" placeholder="Title" name="title" value="<?php echo $fetch3['title']; ?>"><br>
<input class="form-control" type="text" placeholder="Author" name="author" value="<?php echo $fetch3['author']; ?>"><br>
<textarea placeholder="Description..." name="description" class="form-control"><?php echo $fetch3['description']; ?></textarea><br>
<input class="form-control" type="number" placeholder="pages" name="pages" value="<?php echo $fetch3['pages']; ?>"><br>
<input style="user-select: none;" class="form-control" type="text" placeholder="Added By..." name="added_by" value="<?php echo $f_ad['username'].$f_ad1['username']; ?>"><br> 

<input hidden type="text"  id="size" name="size"><br>Thumbnail
<input type="file" name="thumb" class="form-control"><br>Book
<input id="myFile"  class="form-control" onchange="myFunction()" type="file" name="fileToUpload">
<?php 

if ($_GET['edit']!=1) {
  ?>
  <br>

    <?php

    if(@$_GET['section']=="academic")
        echo '<select name="level" onchange="setLevel()" id="select_level" class="selectAcademicInfo form-control">
      <option disabled>Select Level...</option>
      <option value="nursary">Nursary</option>
      <option value="primary">Primary</option>
      <option value="Ordinary level">Ordinary level</option>
      <option value="Advanced level">Advanced level</option>
      <option value="other info">University&Other</option></select>&nbsp;

    <select name="course" id="topic" onchange="setYa()" class="selectAcademicInfo form-control">
    <option disabled>Select course...</option>'
    .'<option selected disabled></option></select>&nbsp
    <select name="year" id="year" class="selectAcademicInfo form-control">
    <option disabled>Select Grade/Year...</option>'
    .'<option selected disabled></option></select>&nbsp
    ';
    else if(@$_GET['section']=="business")
        echo '<select  class="form-control" name="category"> <option disabled selected>Select Category</option>
   <option>Business Opportunities</option>
    <option>Business Advice</option>
    <option>Business News</option>
     <option>Biographies Of Successful Business Men</option></select>';
    else if(@$_GET['section']=="health")
        echo '<select  class="form-control" name="category"> <option disabled selected>Select Category</option>
     <option>Nutrion</option>
    <option>Traditional_Medecine</option>
    <option>Serious_Deseases</option>
    <option>Doctor_Advice</option>
    <option>Health_News</option></select>';
    else if(@$_GET['section']=="eng_class")
        echo '<select  class="form-control" name="category"> <option disabled selected>Select Category</option>
    <option>For_Beginners</option>
    <option>For_Intermediates</option>
    <option>Advanced_English</option>
    <option>Business_English</option></select>
    ';
    else if (@$_GET['section']=="culture")
       echo '<select  class="form-control" name="category"> <option disabled selected selected>Select Category</option>
   <option>Amateka_yu_Rwanda</option>
    <option>Imigani</option>
    <option>Ururimi rwi kinyarwanda</option>
    <option>Ibisakuzo</option>
    <option>Kirazira zumuco Nyarwanda</option></select><br>'; 
    else if(@$_GET['section']=="rules_road")
        echo '<select  class="form-control" name="category"><option disabled selected selected>Select Category</option>
   <option>Ibibazo_nibisubizo</option>
    <option>Igazeti</option></select><br>';
    ?>

 <?php
}
?>
<p id="filesInfo"></p> 

   
<?php 
if (!isset($_GET['edit'])) {
  ?>
 <button type="submit" class="btn btn-primary" name="upload">Upload to <?=$_SESSION["section"]?> section</button>
<?php
}
else{
    ?>
<button type="submit" class="btn btn-primary" name="update">Update book details</button>
    <?php
}
?>


</form>
    
<script>
function myFunction(){
    var x = document.getElementById("myFile");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
               
                var file = x.files[i];
                
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + (file.size/1048576).toFixed(1)+ " Mb <br>";
                    document.getElementById("size").value=file.size;
                    console.log( document.getElementById("size").value);
                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Select one or more files.";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; 
            // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("filesInfo").innerHTML = txt;
}
</script>
  
<?php 

if(isset($_POST['upload'])){ 
$target_path =$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Books/";  

  $fullName=basename( $_FILES["fileToUpload"]["name"]);
  list($partName,$extension)=explode('.', $fullName);
$book_name=urlencode($partName."-".time().".".$extension);
  $target_path .= $book_name;  
 $thumb_target=$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Thumbs/".basename($_FILES['thumb']['name']);
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {   
    echo "File uploaded successfully!";  
if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $thumb_target)) 
    echo "OK";
    //save info to db
    $title=mysqli_real_escape_string($conn,$_POST['title']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$pages=mysqli_real_escape_string($conn,$_POST['pages']);
$size=$_POST['size']; 
$added_by=mysqli_real_escape_string($conn,$_POST['added_by']);
$thumb=mysqli_real_escape_string($conn,basename( $_FILES["thumb"]["name"])); 
$book_link=mysqli_real_escape_string($conn,$book_name);
$section=$_GET['section']; 
$book_category=mysqli_escape_string($conn,$_POST['category']);

if($section!="academic"){
$sql = "INSERT INTO books (title, author, description, pages, size, added_by, thumb,book_link,section, book_category) 
  
                   VALUES ('$title', '$author', '$description', '$pages', '$size', '$added_by', '$thumb','$book_link','$section','$book_category')";}
if($section=="academic"){
  $level=mysqli_escape_string($conn,$_POST['level']);
  $course=mysqli_escape_string($conn,$_POST['course']);
  $sql = "INSERT INTO academic_doc (title, author, description, pages, thumb,book_file,level, course) 
  
                   VALUES ('$title', '$author', '$description', '$pages','$thumb','$book_link','$level','$course')";
}

if ($conn->query($sql) === TRUE) {
    echo '';
} else {
    echo "Error "; //. $sql . "<br>" . $conn->error;
}

} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  }

if(isset($_POST['update'])){ 

    $title=mysqli_real_escape_string($conn,$_POST['title']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$pages=mysqli_real_escape_string($conn,$_POST['pages']);
$added_by=mysqli_real_escape_string($conn,$_POST['added_by']);

$sql = "UPDATE books set title='$title', author='$author', description='$description', pages='$pages', added_by='$added_by' where _id='".$_GET['edit']."'";

if ($conn->query($sql) === TRUE) {
    echo '';
} else {
    echo "Error updating... " ;//. $sql . "<br>" . $conn->error;
}

}
 


$conn->close();
?> 