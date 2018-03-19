<style>
.img-thumb{
    max-height:200px;
}
</style>
<div class="row">
	
	<div class="col-lg-8">
<?php 
include('C:\xampp\htdocs\INOGIT\DBfiles\connectDB.php');
echo "<h2> Books in ".$_SESSION["section"]." section </h2>";

$sql = "SELECT * FROM Books WHERE section='".$_SESSION["section"]."'";
  
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
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
                            <a href="<?php echo $row['book_link'];?>" download class="btn btn-primary btn-xs">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download</a>
                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#read_book_<?php echo $row['_id']; ?>">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Read Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="read_book_<?php echo $row['_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title"><?= $row["title"]?></h4>
      </div>
      <div class="modal-body">
        <p>...........................................</p>
      </div>
      
    </div>

  </div>
</div>
    <?php } ?>
</div>

<div class="bg-info col-lg-4">

</div>
</div>
