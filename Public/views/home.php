<h3>Featured books</h3>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://placehold.it/800x400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placehold.it/800x400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://placehold.it/800x400" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
    




 
<div class="row container">

    <div class="col-lg-8">
        <?php  
    echo "<h2> Popular books </h2>";
    if (isset($_GET['search'])) {
        $srch=$_GET['search'];
      $sql = "SELECT * FROM Books WHERE title LIKE '%$srch%' OR description LIKE '%$srch%' OR added_by LIKE '%$srch%' OR pages LIKE '%$srch%' OR author LIKE '%$srch%' AND section='".$_SESSION["section"]."'";  
    }
    else{
        $sql = "SELECT * FROM books";
    }
    
      
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            ?>

        <br>

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
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$row['_id']?>);" data-target="#read_book_<?php echo $row['_id']; ?>">
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
    </div>

</div>