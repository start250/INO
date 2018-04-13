<?php
error_reporting(0);
if(!isset($_SESSION)) { session_start(); }  

if(!isset($_SESSION['username'])){
    echo "Unauthorized access. Please, login as admin.";
    die();
} 
 
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
 
<?php




?>
<?php require_once('Public/views/_header.php');?>
</head>

<body style="background-color: #e6f5ff; padding: 0px; margin: 0px;">

<?php 
require_once('Public/views/_navs_main.php'); ?>
<div id="main_dash" class="container">

<?php
if(!isset($_GET['section'])){
$_SESSION["url"]="dashboard.php?section=academic"; 
$section="Academic";
$_SESSION["section"]=	$section;
require_once('operations.php');
}else if(@$_GET['section']=="academic"){
	$_SESSION["url"]="dashboard.php?section=academic"; 
	$section="Academic";
	$_SESSION["section"]=	$section;
	require_once('operations.php');
	
}
else if(@$_GET['section']=="eng_class"){
	$_SESSION["url"]="dashboard.php?section=eng_class"; 
	$section="English Class";
	$_SESSION["section"]=	$section;
	require_once('operations.php');
	
}
else if(@$_GET['section']=="rules_road"){
	$_SESSION["url"]="dashboard.php?section=rules_road";
	$section="Rules of the Road";
	$_SESSION["section"]=	$section;
	require_once('operations.php');
	
}
else if(@$_GET['section']=="business"){
	$_SESSION["url"]="dashboard.php?section=business"; 
	$section="Business";
	$_SESSION["section"]=$section;
	require_once('operations.php');
}
else if(@$_GET['section']=="health"){
	$_SESSION["url"]="dashboard.php?section=health";
	$section="Health";
	$_SESSION["section"]=$section;
	require_once('operations.php');
	
}
else if(@$_GET['section']=="culture"){
	$_SESSION["url"]="dashboard.php?section=culture";
	$section="Culture"; 
	$_SESSION["section"]=$section;
	require_once('operations.php');
	
}
else if(@$_GET['section']=="test"){
	$_SESSION["url"]="dashboard.php?section=test";
	$section="Test";
	$_SESSION["section"]=$section;
	require_once('prepare.php');
}
else if(@$_GET['section']=="logos"){
	$_SESSION["url"]="dashboard.php?section=logos";
	$section="Logos";
	$_SESSION["section"]=$section;
  	require_once('Op/manageLogos.php');
}

?>
</div>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_admin_footer.php');?>