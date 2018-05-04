<?php
?>
    <marquee behavior="alternate"><h6>Education materials like books, videos tutorials and our posts available on many!!!!</h6></marquee>
    <p style="text-align:center;" ><a class"btn2Enter" href="?s=Academic&sub=Explore Rwandan Education" style="box-shadow: 0px 0px 50px 0px #3dc21b; background-color:#007b5e ;
	width:100%;padding:5px;
	cursor:pointer;border-radius:10px;">Enter to explore Our education materials</button></a></p>
   
   <div class="row">
    <?php
    $sql1 = "SELECT * FROM academic_doc order by id desc";
    $count1=0;
        $result1 = $conn->query($sql1);
        while($row1 = $result1->fetch_assoc()) {
            if($count1<4){
                if($row1['level']=="primary")
                 $lvl="pri";
                else if($row1['level']=="Advanced level")
                 $lvl="al";
                else if($row1['level']=="other info")
                 $lvl="un";
                else
                 $lvl="nursary";
                 
    ?>
    <div class="col-lg-3" style="text-align:center;">
    <a href="?s=Academic&sub=Explore Rwandan Education&lv=<?= $lvl ?>&course=<?= $row1['course'] ?>&t=1"><img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$row1['thumb'];?>" class="img-thumb img-responsive" style="border-radius:10px;">
        <p><h6><?= $row1["title"]?></h6></p> </a>
    </div>
    <?php } $count1++; } ?>
    
</div>
<hr style="border-width: 5px;">
<h5>Featured Content</h5>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/INOGIT/Resources/Storage/Featuredimgs/1.jpg" alt="First slide">
    </div>
   
    
  <div class="carousel-item">
      <img class="d-block w-100" src="/INOGIT/Resources/Storage/Featuredimgs/2.jpg" alt="Fourth slide">
    </div> 
    <div class="carousel-item">
      <img class="d-block w-100" src="/INOGIT/Resources/Storage/Featuredimgs/4.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>IGA NEZA ONLINE</h5>
    <p>Education that will transform your life, now at your finger tip! Join this adventure and witness your success with us.</p>
  </div>
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
<br>
<hr style="border-width: 5px;">
<?php
$sql2="select * from posts order by id desc";
$result2=$conn->query($sql2);
$iki=1;
while($row2=$result2->fetch_assoc()){
    if($iki<=5 && $iki%2==1){
    ?>
    <div class="row container">
        <div class="col-lg-4"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Featuredimgs/'.$row2['featured_image'];?>"></div>
		<div class="col-lg-1"></div>
		<div class="col-lg-7">
		    <h6><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row2['id']; ?>"><?php echo $row2['title']; ?></a></strong><h6><br>
		    <?php $str=$row2['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #007b5e;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row2['id']; ?>">Read more</a></div>
   </div><hr style="border-width: 5px;"><br>
    <?php
$iki++;}
else if($iki<=5 && $iki%2==0){?>
            <div class="row container">
		<div class="col-md-7">
		    <h6><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row2['id']; ?>"><?php echo $row2['title']; ?></a></h6>
		    <?php $str=$row2['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #007b5e;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row2['id']; ?>">Read more</a></div>
        <div class="col-md-4"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Featuredimgs/'.$row2['featured_image'];?>"></div>
   </div><hr style="border-width: 5px;">
<br>

<?php
$iki++;}
}
?>    




 
<div class="row container">

    <div class="col-lg-8">
        <?php  
    echo "<h2> Popular books </h2>";
    if (isset($_GET['search'])) {
        $srch=$_GET['search'];
      $sql = "SELECT * FROM books WHERE title LIKE '%$srch%' OR description LIKE '%$srch%' OR added_by LIKE '%$srch%' OR pages LIKE '%$srch%' OR author LIKE '%$srch%' AND section='".$_SESSION["section"]."'";  
    }
    else{
        $sql = "SELECT * FROM books order by _id desc";
    }
    
      $count=0;
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if($count<=1){
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
                                    <?= $row["pages"]?> pages</label>
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
                        
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <?php $count++;}} ?>



        <script>
        function getBookSrc(bookID){
            $.get("api_book.php?bookID="+bookID, function(data, status){
                $("#frame"+bookID).attr("SRC", "Resources/Storage/Books/"+data);
    });
        }
        
        </script>
    </div>

</div>