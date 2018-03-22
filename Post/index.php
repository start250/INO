<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php'); 
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
 <style>
 

.featured{
  background-color:#444;
  height:400px;
  width:100%;
}
  
  </style>


 <!-- post place -->
<div class="container">
    <div class="row">
        <div class="col-lg-8">
        <br>
        <br>
        <br>
                <h2 class="text-center"><?=$row['title']?></h2>
                <br>
                <br>
                <br>
                <div class="jumbotron">
                    <?=$row['content']?>
                </div>
                <p>
          <i class="icon-user"></i> by <a href="#"><?=$row['author']?></a> 
          | <i class="icon-calendar"></i> <?=$row['created_at']?>
          | <i class="icon-comment"></i> <a href="#"><?=$row['comments']?> Comments</a>
          | <i class="icon-share"></i> <a href="#"><?=$row['shares']?> Shares</a>
          | <i class="icon-tags"></i> Section : <a href="#"><span class=""><?=$row['section']?></span></a> 
        </p>

       </div>
 
<!-- sideBAR PLACE -->
       <div class="col-lg-4">
       <!-- featured image -->
       <div class="featured">
<img style="
 object-fit: cover;
 width:100%;
  height:100%"  src="/INOGIT/Resources/Storage/Featuredimgs/<?=$row['featured_image']?>">
</div>
          <?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/sidebar.php');?>
      </div>

   </div>
</div> 
<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
  
<?=include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
 

