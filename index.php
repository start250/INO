<?php 
include('DBfiles\connectDB.php'); 

$sql = "SELECT * FROM Books ";
  
    $result = $conn->query($sql);
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('Public/views/_header.php');?>
</head>
<body>
<?php include('Public/views/_navs_main.php');?>

<br><br><br><hr>
<div class="container">

<div class="row">
 <!-- this div will house book lists... -->
<div class=" col-lg-8">

<!--
<div class="row z-depth-2">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/INOGIT/defaults-img-replace/Thumbnail.jpg" class="img-thumb img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h4>Book Title</h4>
                            <p style="font-size: 14px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices euismod ex quis faucibus. 
                            Donec ex neque, cursus vitae laoreet id, dictum ac nulla. Morbi ornare ante ut magna varius varius. 
                            Phasellus at accumsan neque. In hac habitasse platea dictumst. Suspendisse vitae nisl cursus elit 
                            </p>
                            <a href="/INOGIT/Public/views/download.php?book_link=" class="btn btn-primary btn-xs">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download</a>
                            <a href="/INOGIT/Public/views/show.php?book_link=" class="btn btn-success btn-xs">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Read Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

<?php while($row = $result->fetch_assoc()) {
        ?>
        <br>
<div class="row z-depth-1">
           <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/INOGIT/defaults-img-replace/Thumbnail.jpg" class="img-thumb img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h4><?= $row["title"]?></h4>
                            <p style="font-size: 14px;">
                            <?= $row["description"]?>
                             </p>
                            <a href="/INOGIT/Public/views/download.php?book_link=<?php echo $row['book_link'];?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download</a>
                            <a href="/INOGIT/Public/views/show.php?book_link=<?php echo $row['book_link'];?>" class="btn btn-success btn-xs">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Read Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }?>


</div>
 <!-- this div will house sidebar... -->
<div class=" col-lg-4">
<?php 
include('../INOGIT/Public/views/sidebar.php'); 
?>
</div>





</div>
</div>

<style>
.img-thumb{
    max-height:200px;
}
</style>

<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
  
<?=include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>