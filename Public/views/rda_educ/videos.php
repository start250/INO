<?php
$course=@$_GET['course'];
$level=@$_GET['lv'];
if($level=="pri")
	$level="primary";
else if($level=="un")
	$level="other info";
else if($level=='ol')
	$level="Ordinary level";
else if($level=='al')
	$level="Advanced level";
//----------------------------------------
$pages=@$_GET['page'];
if($pages=="" || $pages=="1"){
$pages=0;
}
else
{
	$pages=($pages*10)-10;
}

//-------------------------------------

	$query13="SELECT * FROM academicvideos WHERE level='$level' and course='$course' order by id desc limit $pages,10";
$display_count=1;
$result13=$conn->query($query13);
if(!@$_GET['post']){
while($row13=$result13->fetch_assoc()){
?>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row13['id']; ?>"><?php echo $row13['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row13['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$row13['thumb'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$row13['description']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row13['id']; ?>">Watch full videos</a></div>
	</div>
	<div class="col-lg-12">
		
	</div>
</div>
<hr>
<?php
}}

else if(@$_GET['post']){
	$id5=@$_GET['post'];
	$query15="select * from videos where id='$id5'";
	$query19="update videos set views=views+1 where id='$id5'";
	mysqli_query($conn,$query19);
	$result15 = $conn->query($query15);
	$row15=$result15->fetch_assoc();?>

<p style="text-align: center;"><h4><strong><?php echo $row15['title']; ?></strong></h4></p>
<p><?php echo $row15['video_link']; ?></p><br><hr>
<p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $row15['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $row15['comments']; ?></p><hr>
<form method="POST" class="form-contact">
<strong>Comment</strong><br>
<input type="text" name="names" class="form-control" placeholder="Your names"><label style="color: red;">*</label><br>
<input type="email" name="email" class="form-control" placeholder="Email"><label style="color: red;">*</label><br>
<textarea cols="form-control" name="comment" id="comment"></textarea><br>
<button class="form-control btn-primary" name="submit">submit</button>
</form>
<br>
<hr>
<?php
$query17="select * from comments where videoID='$id5' order by id desc";
$result17=$conn->query($query17);
while($row17=$result17->fetch_assoc()){
	?>
<p><strong><?php echo $row17['names']; ?>:</strong></p>
<p><?php echo $row17['msg']; ?></p>
<hr>
	<?php
}
}
?>


<style type="text/css">
 #comment{
		width: 100%;
		height: 100px;
	}
	
</style>


<?php
if(isset($_POST['submit'])){
	$names=$_POST['names'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$postID=@$_GET['post'];
	$query16="insert into comments (videoID,email,names,msg) values ('$postID','$email','$names','$comment')";
	$query18="update academicvideos set comments=comments+1 where id='$postID'";
	mysqli_query($conn,$query18);
	mysqli_query($conn,$query16);
}

?>
<?php
$c=@$_GET['sub'];
$sql1="select * from videos where category='$c' order by id desc";
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
echo "</center>";
?>
