<?php 
  include('../DBfiles/connectDB.php'); 
$sql =  "SELECT * FROM Posts WHERE id='".$_GET["post"]."'";
  $result = $conn->query($sql);
 
$stmt = $conn->prepare("SELECT * FROM Posts WHERE id='".$_GET["post"]."'"); 
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

?>

<!DOCTYPE html>
<html>
<head> 
  <title><?=$row['title']?></title>
  
<?php include('../Public/views/_header.php');?>
  
 </head>
 <body>
 <?php include('../Public/views/_navs_main.php');?>

 <!-- post place -->
<div class="container">
    <div class="row">
        <div class="col-lg-8">
                <h3><?=$row['title']?></h3>
                <div class="Jambotron">
                    <?=$row['content']?>
                </div>

       </div>
 
<!-- sideBAR PLACE -->
       <div class="col-lg-4">
          <?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/sidebar.php');?>
      </div>

   </div>
</div> 
<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
  
<?=include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
 

