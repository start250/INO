<?php
$section=@$_GET['s'];
if($section && !@$_GET['sub']){
 if($section=="Academic"){
 	$sqlString="select * from books where section='academic' order by _id desc";
 	$sqlString1="select * from academicvideos";
 	$sqlString2="select * from posts where section='academic' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();
 	?>
 	<center><h3>Recently added in Academic</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $low['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>

 	<?php
 }
else if($section=="Business"){
 	$sqlString="select * from books where section='business' order by _id desc";
 	$sqlString1="select * from videos where section='business'";
 	$sqlString2="select * from posts where section='business' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();


?>

<center><h3>Recently added in Business</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $low['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>

<?php
}
else if($section=="Road"){
 	$sqlString="select * from books where section='rules_road' order by _id desc";
 	$sqlString1="select * from videos where section='rules_road'";
 	$sqlString2="select * from posts where section='rules_road' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();

 	?>
?>

<center><h3>Recently added in Rules of road</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $low['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>


<?php }
else if($section=="Health"){
 	$sqlString="select * from books where section='health' order by _id desc";
 	$sqlString1="select * from videos where section='health'";
 	$sqlString2="select * from posts where section='health' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();

?>
<center><h3>Recently added in Health</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $row['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>

 	<?php }
 	else if($section=="English"){
 	$sqlString="select * from books where section='eng_class' order by _id desc";
 	$sqlString1="select * from videos where section='eng_class'";
 	$sqlString2="select * from posts where section='eng_class' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();
 	?>
<center><h3>Recently added in English class</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $row['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>


 	<?php }
 	else if($section=="Culture"){
 	$sqlString="select * from books where section='culture' order by _id desc";
 	$sqlString1="select * from videos where section='culture'";
 	$sqlString2="select * from posts where section='culture' order by id desc";
 	$res1=$conn->query($sqlString);
 	$res2=$conn->query($sqlString1);
 	$res3=$conn->query($sqlString2);
 	$low=$res1->fetch_assoc();
 	$low2=$res2->fetch_assoc();
 	$low3=$res3->fetch_assoc();
 	?>
<center><h3>Recently added in English class</h3></center>
 	<div class="row">
		<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low['id']; ?>"><?php echo $low2['title']; ?></a></strong><h4></div>
		<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low2['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low2['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low2['id']; ?>">Watch full videos</a></div>
		</div>
		<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $low2['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low2['comments']; ?></p>
		</div>
	</div>
	<div class="row z-depth-1">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$low['thumb'];?>" class="img-thumb img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <?= $low["title"]?>
                                </h4>
                                <p style="font-size: 14px;">
                                    <?= $low["description"]?>
                                </p>

                                <label style="font-size: 13px; color: #00cc00;">
                                    <?= $low["pages"]?> pages</label> |
                                <label style="font-size: 13px; color: #00cc00;">
                                    <span id="down<?= $row['_id']; ?>">
                                        <?= $low["downloads"]?>
                                    </span> downloads</label> |
                                <label style="font-size: 13px;">
                                    Uploaded by
                                    <b>
                                        <?= $low["added_by"]?>
                                    </b>
                                </label>
                                <br>
                                <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc(<?=$low['_id']?>);" data-target="#read_book_<?php echo $low['_id']; ?>">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                    Read Now</button>
                                <span id="er"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div id="read_book_<?php echo $low['_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">
                            <?= $low["title"]?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="frame<?php echo $low['_id']; ?>"  style="width: 100%; height: 500px;"></iframe>
                        <a href="Resources/Storage/Books/<?php echo $low['book_link'];?>" download class="btn btn-primary btn-xs">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            Download</a>
                        <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div><br><br>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><?php echo $low3['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo 'Resources/Storage/FeaturedImgs/'.$low3['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$low3['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $low3['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $low3['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $low3['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $low3['comments']; ?></p>
	</div>
</div>



 	<?php }
}
?> 



<script>
        function getBookSrc(bookID){
            $.get("api_book.php?bookID="+bookID, function(data, status){
                $("#frame"+bookID).attr("SRC", "Resources/Storage/Books/"+data);
    });
        }
        
        </script>