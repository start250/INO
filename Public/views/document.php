<?php

$section13=@$_GET['s'];
$category13=@$_GET['sub'];
$query13="SELECT * FROM books WHERE book_category='$category13' order by created_at desc";
$display_count=1;

$result13 = $conn->query($query13);
while($row = $result13->fetch_assoc()) {
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
                            <h4><?= $row["title"]?></h4>
                            <p style="font-size: 14px;">
                            <?= $row["description"]?>
                             </p>

                             <label 
                             style="font-size: 13px; color: #00cc00;">
                             <?= $row["pages"]?> pages</label> | 
                             <label style="font-size: 13px; color: #00cc00;">
                                 <span id="down<?= $row['_id']; ?>"><?= $row["downloads"]?>
                                </span> downloads</label>
                                    <br>
                            <a href="Resources/Storage/Books/<?php echo $row['book_link'];?>" download class="btn btn-primary btn-xs" onclick="download()">

                                <i class="fa fa-download" aria-hidden="true"></i>
                                Download</a>
                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#read_book_<?php echo $row['_id']; ?>">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Read Now</button><span id="er"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
    ?>