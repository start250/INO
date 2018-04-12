<?php
$section13=@$_GET['s'];
if(@$_GET['sc']=="1")
    $category13="Tips to Win Scholaship";
else if(@$_GET['sc']=="2")
    $category13="links";
else if(@$_GET['sc']=="3")
    $category13="News";
else 
	$category13="/,,,bmnbnb";
//-------------------------------------------------
$pages=@$_GET['page'];
if($pages=="" || $pages=="1"){
$pages=0;
}
else
{
	$pages=($pages*10)-10;
}
//---------------------------
$query14="SELECT * FROM posts WHERE course='$category13' order by id desc limit $pages,10";
$display_count=1;
$result14 = $conn->query($query14);
if(!@$_GET['post'] && @$_GET['sub']!="Ibyapa"){
while($row14 = $result14->fetch_assoc()) {
?>
<div class="row">
	<div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row14['id']; ?>"><?php echo $row14['title']; ?></a></strong><h4></div>
	<div class="col-lg-12">
		<div class="col-lg-4"><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row14['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Featured_images/'.$row14['featured_image'];?>"></a></div>
		<div class="col-lg-8"><?php $str=$row14['content']; echo substr($str,0,260); ?>...<br><br>
			<a style="border:2px solid #4d79ff;padding: 10px;color: #4d79ff;" href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row14['id']; ?>">Read more</a></div>
	</div>
	<div class="col-lg-12">
		<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $row14['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $row14['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $row14['comments']; ?></p>
	</div>
</div>
<hr>
<?php
}}
else if(@$_GET['post'] && @$_GET['sub']!="Ibyapa"){
	$id5=@$_GET['post'];
	$query15="select * from posts where id='$id5'";
	$query19="update posts set views=views+1 where id='$id5'";
	mysqli_query($conn,$query19);
	$result15 = $conn->query($query15);
	$row15=$result15->fetch_assoc();
?>
<p style="text-align: center;"><h4><strong><?php echo $row15['title']; ?></strong></h4></p>
<p style="text-align: center;"><img style="width: 60%;height: auto;" src="<?php echo '/INOGIT/Resources/Storage/Featured_images/'.$row15['featured_image'];?>"></p>
<p><?php echo $row15['content']; ?></p><br><hr>
<p style="text-align: center;"><i class="fa fa-edit"></i>Post by: <strong><?php echo $row15['author']; ?></strong> | <i class="fa fa-eye"></i>Views:<?php echo $row15['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $row15['comments']; ?></p><hr>
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
$query17="select * from comments where postID='$id5' order by id desc";
$result17=$conn->query($query17);
while($row17=$result17->fetch_assoc()){
	?>
<p><strong><?php echo $row17['names']; ?>:</strong></p>
<p><?php echo $row17['msg']; ?></p>
<hr>
	<?php
}
}
else if(@$_GET['sub']=="Ibyapa"){
	$query18="select * from posts where category='Ibyapa'";
	$result18=$conn->query($query18);
	while($row18=$result18->fetch_assoc()){
?>
<div class="row">
	<center><strong><h3><?php echo $row18['title']; ?></h3></strong></center>
	<p><?php echo $row18['content'] ?></p>
</div>

<?php
}}
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
	$query16="insert into comments (postID,email,names,msg) values ('$postID','$email','$names','$comment')";
	$query18="update posts set comments=comments+1 where id='$postID'";
	mysqli_query($conn,$query18);
	mysqli_query($conn,$query16);
}

?>

<?php
$c=@$_GET['sub'];
$sql1="select * from posts where category='$c' order by id desc";
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