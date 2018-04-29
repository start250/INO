<?php

$section13=@$_GET['s'];
$category13=@$_GET['sub'];
//----------------------------------------
//-----------------------------------------
$pages=@$_GET['page'];
if($pages=="" || $pages=="1"){
$pages=0;
}
else
{
    $pages=($pages*10)-10;
}

//--------------------------------------

    $query13="SELECT * FROM books WHERE book_category='$category13' order by _id desc limit $pages,10";
$display_count=1;
$result13 = $conn->query($query13);
while($row13 = $result13->fetch_assoc()) {
    
?>
 <br>
 
<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$row13['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $row13["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $row13["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $row13["pages"]?> pages</label>
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $row13["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$row13['_id']?>);" data-target="#read_book_<?php echo $row13['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $row13['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $row13["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $row13['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    <?php
}
    ?>

<?php 
    $c=@$_GET['sub'];
$sql1="select * from books where book_category='$c' order by _id desc";
$res=mysqli_query($conn,$sql1);

$count=mysqli_num_rows($res);
$num_of_pages=ceil($count/10);
$getP=@$_GET['page'];
echo "<center>";
if($getP-1>0 && $getP!=""){
?>

<a href="index.php?s=<?=$_GET['s']?>&sub=<?=$_GET['sub']?>&t=<?=$_GET['t']?>&page=<?=@$_GET['page']-1?>">&laquo;</a>
<?php
}
for($i=1;$i<=$num_of_pages;$i++){?>
    <a href="index.php?s=<?=$_GET['s']?>&sub=<?=$_GET['sub']?>&t=<?=$_GET['t']?>&page=<?=$i?>" style="text-decoration: none;margin: 6px;<?php if($_GET['page']==$i) echo 'background-color: red'; ?>"><?php echo $i;?> </a>
    <?php
}
if(@$_GET['page']<$num_of_pages){
?>
<a href="index.php?s=<?=$_GET['s']?>&sub=<?=$_GET['sub']?>&t=<?=$_GET['t']?>&page=<?=@$_GET['page']+1?>">&raquo;</a>

<?php
}
echo "</center>"
?>
<script>
        function getBookSrc(bookID){
            $.get("api_book.php?bookID="+bookID, function(data, status){
                $("#frame"+bookID).attr("SRC", "Resources/Storage/Books/"+data);
    });
        }
        
        </script>