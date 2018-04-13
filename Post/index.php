<?php 
if(!isset($_GET['post'])){
header('LOCATION: /INOGIT/');
 die();
}
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/views.php');  
$id=mysqli_real_escape_string($conn,$_GET['post']); 
incrementTargetCol('posts','views','id',$id,$conn);
  
$sql =  "SELECT * FROM Posts WHERE id='$id'";
  $result = $conn->query($sql);
 
$stmt = $conn->prepare("SELECT * FROM posts WHERE id='".$_GET["post"]."'"); 
$stmt->execute();
$result = $stmt->get_result();
 $row_1 = $result->fetch_assoc(); 

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?= $row_1['title']?>
    </title>

    <?php include('../Public/views/_header.php');?>

    <style>
        img {
            max-width: 600px;
        }
    </style>
</head>

<body>

    <?php include('../Public/views/_nav.php');?>
    <style>
        .featured {
            background-color: #444;
            height: 400px;
            width: 100%;
        }
    </style>


    <!-- post place -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <br>
                <br>
                <br>
                <h2 class="text-center">
                    <?= $row_1['title']?>
                </h2>
                <p class="text-right">
                    <i class="fa fa-eye"></i>
                    <?= $row_1['views']?>
                        |
                        <i class="fa fa-user-circle"></i> by
                        <a href="#">
                            <?= $row_1['author']?>
                        </a>
                </p>

                <br>
                <br>
                <div class="jumbotron" style="word-wrap: break-word">
                    <?= $row_1['content']?>
                </div>
                <p>
                    <i class="fa fa-clock"></i>
                    <?= $row_1['created_at']?>
                        |
                        <i class="fa fa-comment"></i>
                        <a href="#">
                            <?= $row_1['comments']?> Comments</a>
                        |
                        <i class="fa fa-share-alt-square"></i>
                        <a href="#">
                            <?= $row_1['shares']?> Shares</a>
                        |
                        <i class="fa fa-tags"></i> Section :
                        <a href="#">
                            <span class="">
                                <?= $row_1['section']?>
                            </span>
                        </a>
                </p>

            </div>

            <!-- sideBAR PLACE -->
            <div class="col-lg-4">
                
                <div class="featured">
                    <img id="featuredImg" onclick="containToggle();" style="
                  object-fit: cover;
                  width:100%;
                    height:100%" src="/INOGIT/Resources/Storage/Featuredimgs/<?php
                     $filename = $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Featuredimgs/'. $row_1['featured_image'];
                     if (file_exists($filename)) {
                         echo  $row_1['featured_image'];
                     } else {
                         echo 'Default.png';
                     } 
                     
                     
                     
                     ?>">
                </div>
                <script>
                var contain=true;
                function containToggle(){

                   (contain)?document.getElementById('featuredImg').style=" object-fit: contain; width:100%;height:100%" :
                   document.getElementById('featuredImg').style=" object-fit: cover; width:100%;height:100%" 
                   contain=!contain;
                }
                </script>
                <?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_sidebar.php');?>
            </div>
<!-- sidebar closed -->
        </div> 
        <!-- row closed -->
    </div>
    <!-- container closed -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>