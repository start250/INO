<?php require_once('Public/views/_header.php');?>
<style>
.img-thumb{
    max-height:200px;
}
</style>
<div class="row">
	
	<div class="col-lg-8">
    <?php 
require_once('DBfiles/connectDB.php');
if(!isset($_GET['section'])){
    $_GET['section']='academic';
}
$section= mysqli_real_escape_string($conn,$_GET['section']); 
$sql = "SELECT * FROM Books WHERE section='$section' ORDER by _id DESC LIMIT 5";  

$result = $conn->query($sql);

?>
<h4>Books in this category</h4>
<br>
<?php 
if (mysqli_num_rows($result)==0) {
    echo "no results found<br><br>";}
while($row = $result->fetch_assoc()) {
    ?>

<div class="row z-depth-1">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="background-color: white;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$row['thumb'];?>" class="img-thumb img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h4>
                            <?= $row["title"]?>
                        </h4>
                        <p style="font-size: 14px;">
                            <?= $row["description"]?>
                        </p>

                        <label style="font-size: 13px; color: #00cc00;">
                            <?= $row["pages"]?> pages</label> |
                        <label style="font-size: 13px; color: #00cc00;">
                            <span id="down<?= $row['_id']; ?>">
                                <?= $row["downloads"]?>
                            </span> downloads</label> |
                        <label style="font-size: 13px;">
                            Uploaded by
                            <b>
                                <?= $row["added_by"]?>
                            </b>
                        </label>
                        <br>
                        <button  onclick="getBookSrc(<?=$row['_id']?>);" class="btn btn-success btn-xs" data-toggle="modal" data-target="#read_book_<?php echo $row['_id']; ?>">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Read Now</button>
                        <span id="er"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="read_book_<?php echo $row['_id']; ?>" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">

<div class="modal-content">
    <div class="modal-header">

        <h4 class="modal-title">
            <?= $row["title"]?>
        </h4>
    </div>
    <div class="modal-body">
        <iframe id="frame<?php echo $row['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
        <a href="Resources/Storage/Books/<?php echo $row['book_link'];?>" download class="btn btn-primary btn-xs">
            <i class="fa fa-download" aria-hidden="true"></i>
            Download</a>
        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
    </div>

</div>



</div>
</div>

<?php } ?>

 

<script>
function getBookSrc(bookID){
$.get("api_book.php?bookID="+bookID, function(data, status){
$("#frame"+bookID).attr("SRC", "Resources/Storage/Books/"+data);
});
}

</script> 
 
<h4>Posts in this category</h4>
<br> 

<?php
 

 
$sql = "SELECT * FROM posts WHERE section='$section' ORDER by id DESC LIMIT 5";  

$result = $conn->query($sql); 
if (mysqli_num_rows($result)==0) {
    echo "no results found<br><br>";
}
while($row = $result->fetch_assoc()) {
    ?><br> 
  <div class=" row">
      
 
      <div class="col-sm-4 col-xs-4 col-md-4 col-lg-3">
       
                 <div class="card">
                      
                     
                     <img style="max-height:200px;max-width:140px" class="card-img-top" src="/INOGIT/Resources/Storage/Featuredimgs/<?php
                     $filename = 'Resources/Storage/Featuredimgs/'.$row['featured_image'];
                     if (file_exists($filename)) {
                         echo $row['featured_image'];
                     } else {
                         echo 'Default.png';
                     } 
                     
                     
                     
                     ?>">
                     
                      </div>
                        </div>
                         <div class="col-sm-8 col-xs-8 col-md-8 col-lg-9 card">
                          <div class="card-block">
                         
                         <h4 class="card-title mt-3"><?=$row['title']?></h4>
                          
                    </div>  <?=$row['excerpt']?>
                       
                     <div class="card-footer">
                         <small>Last updated <?=$row['updated_at']?></small>
                         <a href="/INOGIT/Post/?post=<?=$row['id']?>" ><button class="btn btn-secondary float-right btn-sm">Read More..</button></a>
                     </div>
                 </div>
         
   </div>
 
<br> 

<?php } ?>
