<?php 
include('C:\xampp\htdocs\INOGIT\DBfiles\connectDB.php');
?>
<form  method="POST" enctype="multipart/form-data">

<input class="form-control" type="text" placeholder="Title" name="title"><br>
<input class="form-control" type="text" placeholder="Author" name="author"><br>
<textarea placeholder="Description..." name="description" class="form-control"></textarea><br>
<input class="form-control" type="text" placeholder="pages" name="pages"><br>
<input class="form-control" type="text" placeholder="Added By..." name="added_by"><br> 

<input id="myFile"  class="form-control" onchange="myFunction()" type="file" placeholder="Pick File" name="fileToUpload">

   <br> <button type="submit" class="btn btn-primary" name="upload">Upload Book</button>


<p id="filesInfo"></p>
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
                txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                var file = x.files[i];
                
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
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
$target_path = 'C:\xampp\htdocs\INOGIT\Resources\Storage\Books\\';  

  $fullName=basename( $_FILES["fileToUpload"]["name"]);
  list($partName,$extension)=explode('.', $fullName);

  $target_path = $target_path.$partName."-".time().".".$extension;   
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {   
    echo "File uploaded successfully!";  


    //save info to db
    $title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$pages=$_POST['pages'];
$size=$_POST['title'];
$added_by=$_POST['added_by'];
$updated_at=$_POST['title'];
$thumb=$_POST['title']; 
$sql = "INSERT INTO Books (title, author, description, pages, size, added_by, updated_at,thumb) 
  
                   VALUES ('$title', '$author', '$description', '$pages', '$size', '$added_by', '$updated_at','$thumb')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  }





$conn->close();
?> 