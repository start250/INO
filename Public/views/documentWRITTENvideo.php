<?php
$cat12=@$_GET['s'];
$subCat12=@$_GET['sub'];
?>

	<ul id="myTab">
		<li style="background-color: <?php if(@$_GET['t']=='1') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=1">Documents</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='2') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=2">Written Posts</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='3') echo '#4d79ff';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=3">Videos</a></li>
</ul>
<center>
<?php

echo "<h2>".@$_GET['sub']."</h2>";

?>
</center><br>
<?php


 if(@$_GET['t']=="1")
    include('document.php');
else if(@$_GET['t']=="2")
	include('written_posts.php');
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