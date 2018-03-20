<?php 
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');

echo '<h3>Book Information...</h3>';

?> 
<form  class=" w-50 p-3" method="POST" enctype="multipart/form-data">

<input class="form-control" type="text" placeholder="Title" name="title"><br>
<input class="form-control" type="text" placeholder="Author" name="author"><br>
<textarea placeholder="Description..." name="description" class="form-control"></textarea><br>
<input class="form-control" type="number" placeholder="pages" name="pages"><br>
<input class="form-control" type="text" placeholder="Added By..." name="added_by" disabled="disabled" value="<?php echo $f_ad['username'].$f_ad1['username']; ?>"><br> 
<input hidden type="text"  id="size" name="size"><br> 
<input id="myFile"  class="form-control" onchange="myFunction()" type="file" name="fileToUpload">

<p id="filesInfo"></p> 
    <button type="submit" class="btn btn-primary" name="upload">Upload to <?=$_SESSION["section"]?> section</button>



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
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {   
    echo "File uploaded successfully!";  


    //save info to db
    $title=mysqli_real_escape_string($conn,$_POST['title']);
$author=mysqli_real_escape_string($conn,$_POST['author']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$pages=mysqli_real_escape_string($conn,$_POST['pages']);
$size=$_POST['size']; 
$added_by=mysqli_real_escape_string($conn,$_POST['added_by']);
$updated_at=mysqli_real_escape_string($conn,$_POST['title']);
$thumb=mysqli_real_escape_string($conn,$_POST['title']); 
$book_link=mysqli_real_escape_string($conn,$book_name);
$section=$_SESSION['section']; 
$sql = "INSERT INTO Books (title, author, description, pages, size, added_by, updated_at,thumb,book_link,section) 
  
                   VALUES ('$title', '$author', '$description', '$pages', '$size', '$added_by', '$updated_at','$thumb','$book_link','$section')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
   // window.location = "/inogit/admin/dashboard.php"
</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  }





$conn->close();
?> 