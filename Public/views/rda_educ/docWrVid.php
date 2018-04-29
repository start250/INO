
<?php
$cat12=@$_GET['s'];
$subCat12=@$_GET['sub'];
?>

<?php if(@$_GET['sub']!="Ibyapa" && @$_GET['sub']!="Explore Rwandan Education"){ ?>
	<ul id="myTab">
		<?php if(@$_GET['sub']!="Academic news"){ ?>
		<li style="background-color: <?php if(@$_GET['t']=='1') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=1">Documents</a></li><?php } ?>
		<li style="background-color: <?php if(@$_GET['t']=='2') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=2">Written Posts</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='3') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=3">Videos</a></li>
</ul>
<?php }
if(@$_GET['sub']=="Explore Rwandan Education" && @$_GET['t']){
 ?>
<ul id="myTab">
		<li style="background-color: <?php if(@$_GET['t']=='1') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=1">Documents</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='2') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=2">Written Posts</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='3') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=3">Videos</a></li>
<?php } ?>
<center>
<?php
	$lvl="";
	if(@$_GET['lv']=="pri")
		$lvl="Primary -> ";
	else if(@$_GET['lv']=="ol")
		$lvl="Ordinary level -> ";
	else if(@$_GET['lv']=="al")
		$lvl="Advanced level level -> ";
	else if(@$_GET['lv']=="Nursary")
		$lvl="Nursary -> ";
	echo $lvl.@$_GET['course'];
?>
</center><br>
<?php


 if(@$_GET['t']=="1")
    include('document.php');
else if(@$_GET['t']=="2")
	include('posts.php');
else if(@$_GET['t']=="3")
	include('videos.php');

?>
<style type="text/css">
	#myTab{
		width: 340px;
		
	}
	#myTab li{
		display: inline-block;
		padding: 10px;
		border-radius: 13px;
		border:1px solid #4d79ff;
	}
	#myTab li a{
		font-size: 15px;
	}
</style>