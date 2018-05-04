<?php
$cat12=@$_GET['s'];
$subCat12=@$_GET['sub'];
?>

<?php if(@$_GET['sub']!="Ibyapa" && @$_GET['sub']!="Explore Rwandan Education" && @$_GET['sub']!="Meet With Business Mentors"){ ?>
	<ul id="myTab">
		<?php if(@$_GET['sub']!="Academic news"){ ?>
		<li style="background-color: <?php if(@$_GET['t']=='1') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=1">Documents</a></li><?php } ?>
		<li style="background-color: <?php if(@$_GET['t']=='2') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=2">Written Posts</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='3') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&t=3">Videos</a></li>
</ul>
<?php }
if(@$_GET['sub']=="Explore Rwandan Education" && @$_GET['t']){
 ?>
<ul id="myTab">
		<li style="background-color: <?php if(@$_GET['t']=='1') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=1">Documents</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='2') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=2">Written Posts</a></li>
		<li style="background-color: <?php if(@$_GET['t']=='3') echo '#007b5e';?>"><a href="index.php?s=<?php echo $cat12; ?>&sub=<?php echo $subCat12; ?>&lv=<?php echo @$_GET['lv']; ?>&course=<?php echo @$_GET['course']; ?>&t=3">Videos</a></li>
<?php } ?>
<center>
<?php
if(@$_GET['sub']=="Biographies_Of_Successful_Business_Men")
	echo "Biographies Of Successful Business Men";
else if(@$_GET['sub']=="Ibibazo_nibisubizo")
	echo "Ibibazo n'ibisubizo";
else if(@$_GET['sub']=="Amateka_yu_Rwanda")
	echo "Amateka y'u Rwanda";
else if(@$_GET['sub']=="Kirazira_z'umuco_Nyarwanda")
	echo "Kirazira z'umuco Nyarwanda";
else if(@$_GET['sub']=="Explore Rwandan Education" && @$_GET['t']){
	$lvl="";
	if(@$_GET['lv']=="pri")
		$lvl="Primary";
	else if(@$_GET['lv']=="ol")
		$lvl="Ordinary level";
	else if(@$_GET['lv']=="al")
		$lvl="Advanced level level";
	else if(@$_GET['lv']=="Nursary")
		$lvl="Nursary";
	echo $lvl."->".@$_GET['course'];
}
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
		border:1px solid #007b5e;
	}
	#myTab li a{
		font-size: 15px;
	}
</style>