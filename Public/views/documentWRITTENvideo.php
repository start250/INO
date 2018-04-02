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
if(@$_GET['sub']=="Biographies_Of_Successful_Business_Men")
	echo "Biographies Of Successful Business Men";
else if(@$_GET['sub']=="Meet_With_Business_Mentors")
	echo "Meet With Business Mentors";
else if(@$_GET['sub']=="Ibibazo_nibisubizo")
	echo "Ibibazo n'ibisubizo";
else if(@$_GET['sub']=="Amateka_yu_Rwanda")
	echo "Amateka y'u Rwanda";
else if(@$_GET['sub']=="Kirazira_z'umuco_Nyarwanda")
	echo "Kirazira z'umuco Nyarwanda";
else{
	$secondPart="";
	$pos=stripos(@$_GET['sub'],"_");
	if($pos===FALSE)
		echo "<h2>".@$_GET['sub']."</h2>";
	else{
	list($fisrtPart,$secondPart)=explode("_", @$_GET['sub']);
	echo "<h2>".$fisrtPart." ".$secondPart."</h2>";
}
}

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