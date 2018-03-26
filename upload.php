

<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <?php include('Public/views/_header.php');?>
</head>

<body style="background-color:#e6f5ff"> 
<div  class="container">

  <form enctype="multipart/form-data" action="upload.php" method="POST">
<h5>Use images in post!</h5>
<br /> 
    <input class="btn" type="file" name="uploaded_file"></input>
    <input class="btn btn-primary" type="submit" value="Upload"></input>
  </form>

  </div>
</body>
</html>
<?php 
session_start();
@$_SESSION['file_link'];
 

  if(!empty($_FILES['uploaded_file']))
  {
    $path = "Resources/Storage/Images/";
    $fullName=basename( $_FILES["uploaded_file"]["name"]);
  list($partName,$extension)=explode('.', $fullName);
$filename=urlencode(time().".".$extension);
$path .=$filename;
$_SESSION['file_link']=$filename;
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
?><br> 
<div class="container">
The Link is: 
<div  id="selectable" onclick="selectText('selectable')" class="alert alert-info">
<p>
http://localhost/INOGIT/Resources/Storage/Images/<?=$filename?>
</p>
<script type="text/javascript">
    function selectText(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
        }
    }
</script>

</div>
<div>
Preview:

<img style="height:100px" src="/INOGIT/Resources/Storage/Images/<?=$filename?>" alt="No Preview">
</div>
</div>

<?php

       } else{
        echo "There was an error uploading the file, please try again!";

    }
  }
?>

 