<?php 
include('C:\xampp\htdocs\INOGIT\DBfiles\connectDB.php'); 
if(isset($_GET['book_link'])){
   $bklink=$book_link=mysqli_real_escape_string($conn,$_GET['book_link']);
$sql = "SELECT * FROM Books WHERE book_link='$bklink'";  

    $result = $conn->query($sql);
$row = $result->fetch_assoc();
}else{
    $row =[
        'title'=>'404! Book Not Found.'
    ];
}
   ?>

<!DOCTYPE html>
<html lang="en">
<head> 
<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
?>
</head>
<body>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_navs_main.php');
?> 

<div class="container">
<div class="row">
<!-- this will show book embedded -->
<div class="col-lg-8">
<br>
<h2><?= $row['title']?><h2>
<br>
<embed src="/INOGIT/Resources/Storage/Books/<?=$_GET['book_link']?>#toolbar=0&navpanes=0" width="800" height="500">

</div>
<!-- this will house the right widget -->
<div class="col-lg-4">

</div>

</div>

</div>





<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');
?>