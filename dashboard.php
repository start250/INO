<?php
session_start();
include('DBfiles/connectDB.php');
@$sql0=mysqli_query($conn,"SELECT * from adminauthor where id='".$_SESSION['ad']."' AND priority='administrator'");
$f_ad=mysqli_fetch_array($sql0);
$ad=$f_ad['id'];
$sql01=mysqli_query($conn,"SELECT * from adminauthor where id='".@$_SESSION['au']."' AND priority='author'");
$f_ad1=mysqli_fetch_array($sql01);
$au=$f_ad1['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		h1,h2{
	width: 100%;
	background-color:white;
	border-left:3px solid  #0066ff;
	padding-left: 3px;
}
	</style>
<link rel="stylesheet" type="text/css" href="Public/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Public/assets/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="Public/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<?php




?>
<?php include('Public/views/_header.php');?>
</head>
<body style="background-color: #e6f5ff; padding: 0px; margin: 0px;">
<?php include('Public/views/_navs_main.php'); ?>
<div id="main_dash" class="container">

<?php
if(@$_GET['section']=="academic"){
	$_SESSION["url"]="dashboard.php?section=academic"; 
	$section="Academic";
	$_SESSION["section"]=	$section;
	include('operations.php');
	
}
else if(@$_GET['section']=="eng_class"){
	$_SESSION["url"]="dashboard.php?section=eng_class"; 
	$section="English Class";
	$_SESSION["section"]=	$section;
	include('operations.php');
	
}
else if(@$_GET['section']=="rules_road"){
	$_SESSION["url"]="dashboard.php?section=rules_road";
	$section="Rules of the Road";
	$_SESSION["section"]=	$section;
	include('operations.php');
	
}
else if(@$_GET['section']=="business"){
	$_SESSION["url"]="dashboard.php?section=business"; 
	$section="Business";
	$_SESSION["section"]=$section;
	include('operations.php');
}
else if(@$_GET['section']=="health"){
	$_SESSION["url"]="dashboard.php?section=health";
	$section="Health";
	$_SESSION["section"]=$section;
	include('operations.php');
	
}
else if(@$_GET['section']=="culture"){
	$_SESSION["url"]="dashboard.php?section=culture";
	$section="Culture"; 
	$_SESSION["section"]=$section;
	include('operations.php');
	
}
else if(@$_GET['section']=="test"){
	$_SESSION["url"]="dashboard.php?section=test";
	$section="Test";
	$_SESSION["section"]=$section;
	include('operations.php');
	
}

?>
</div>
</body>