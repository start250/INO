<?php 
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
if (isset($_GET['delete'])) {
  
  mysqli_query($conn,"DELETE from books where _id='".$_GET['delete']."'");
}
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
<select  class="form-control" name="category"> 
        echo "<option disabled  selected>Select Category</option>
    <option>Science Book</option>
    <option>Humanity Book</option>
    <option>Language Book</option>
    <option>Life Book</option>
    <option>ICT Book</option>
    <option>Business Book</option>
</select><br>
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
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
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
$sql = "INSERT INTO Books (title, author, description, pages, size, added_by, thumb,book_link,section, book_category) 
  
                   VALUES ('$title', '$author', '$description', '$pages', '$size', '$added_by', '$thumb','$book_link','$section','$book_category')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
   // window.location = "/inogit/admin/dashboard.php"
</script>';
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
    echo '<script type="text/javascript">
location.href = "/inogit/"
</script>';
} else {
    echo "Error updating... " ;//. $sql . "<br>" . $conn->error;
}

}
 




$sql6="SELECT * FROM books WHERE section='academic' ORDER BY created_at DESC";
$query=mysqli_query($conn,$sql6);
?> 

<br><br>
<div class="row"><h4><strong>Recently added.</strong></h4>
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
$count=1;
while ($row=mysqli_fetch_array($query)) {
if($count<=6){

?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['book_category']; ?></td>
        <td style="font-size: 25px;"> <i onclick='deletetask<?php echo $row['_id']; ?>()' class="fa fa-trash"></i> 
      </tr>
            <script>
function deletetask<?php echo $row['_id']; ?>() {
    
    if (confirm('Do you really want to delete this post \"<?php echo $row['title']; ?>\"?') == true) {
        location.href='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?php echo $_GET['action']; ?>&delete=<?php echo $row['_id']; ?>';
    } 
  
}
</script>
      <?php
}$count++;}
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