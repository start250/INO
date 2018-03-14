<?php 
include('C:\xampp\htdocs\INOGIT\DBfiles\connectDB.php');
?>
<form  method="POST" enctype="multipart/form-data">
    <input type="file" id="myFile" onchange="myFunction()" name="fileToUpload"/>
    <button type="submit" name="upload">Upload to server</button>
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
$target_path = 'Books/';  

  $fullName=basename( $_FILES["fileToUpload"]["name"]);
  list($partName,$extension)=explode('.', $fullName);

  $target_path = $target_path.$partName."-".time().".".$extension;   
  echo "path is: $target_path";
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {   
    echo "File uploaded successfully!";  

} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  }


$title="title";
$author='Marik toin';
$description="the da dkjsanfd asnd asjkdnqawsn";
$pages=233;
$size=123;
$added_by="mars"; 
$updated_at=time();
$thumb="/image.png";
$views=1;
$downloads=2;
$sql = "INSERT INTO Books (title, author, description, pages, size, added_by, updated_at,thumb,views,downloads) 
  
                   VALUES ('$title', '$author', '$description', '$pages', '$size', '$added_by', '$updated_at','$thumb','$views','$downloads')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?> 