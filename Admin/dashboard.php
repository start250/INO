<?php

if(!isset($_SESSION)) { session_start(); }  

if(!isset($_SESSION['username'])){
    echo "Unauthorized access. Please, login as admin.";
    die();
} 
echo "luaa";
?>


<!DOCTYPE html>
<html lang="en">
<head>  
<script type="text/javascript" src="js/jquery.min.js"></script>
 
<?php include('../Public/views/_header.php');?>
</head>
<?php include('../Public/views/_navs_main.php'); ?>
<div id="main_dash" class="container">

<?php

if(@$_GET['section']=="academic"){
	$_SESSION["url"]="dashboard.php?section=academic"; 
	$section="Academic";
	$_SESSION["section"]=	$section;
	include('../operations.php');
	
}
else if(@$_GET['section']=="eng_class"){
	$_SESSION["url"]="dashboard.php?section=eng_class"; 
	$section="English Class";
	$_SESSION["section"]=	$section;
	include('../operations.php');
	
}
else if(@$_GET['section']=="rules_road"){
	$_SESSION["url"]="dashboard.php?section=rules_road";
	$section="Rules of the Road";
	$_SESSION["section"]=	$section;
	include('../operations.php');
	
}
else if(@$_GET['section']=="business"){
	$_SESSION["url"]="dashboard.php?section=business"; 
	$section="Business";
	$_SESSION["section"]=$section;
	include('../operations.php');
}
else if(@$_GET['section']=="health"){
	$_SESSION["url"]="dashboard.php?section=health";
	$section="Health";
	$_SESSION["section"]=$section;
	include('../operations.php');
	
}
else if(@$_GET['section']=="culture"){
	$_SESSION["url"]="dashboard.php?section=culture";
	$section="Culture"; 
	$_SESSION["section"]=$section;
	include('../operations.php');
	
}
else if(@$_GET['section']=="test"){
	$_SESSION["url"]="dashboard.php?section=test";
	$section="Test";
	$_SESSION["section"]=$section;
	include('../operations.php');
	
}

?>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>
  
 
