<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
 
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/js.js"></script>


<nav class="navbar sidebar" role="navigation" id="sidebar">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">INO Ltd</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active" style="background-color:#ebebe0;"><a href="dashboard.php"><i></i>Dashboard</a></li>
				<li <?php if(@$_GET['section']=='academic') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=academic"><i class="fas fa-book"></i> Academic</a></li>
				<li <?php if(@$_GET['section']=='eng_class') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=eng_class"><i class="fas fa-language"></i> English Class</a></li>
				<li <?php if(@$_GET['section']=='rules_road') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=rules_road"><i class="fas fa-taxi"></i> Rules of Road</a></li>
				<li <?php if(@$_GET['section']=='business') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=business"><i class="fas fa-briefcase"></i> Business</a></li>
				<li <?php if(@$_GET['section']=='health') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=health"><i class="fas fa-medkit"></i> Health</a></li>
				<li <?php if(@$_GET['section']=='culture') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=culture"><i class="fas fa-leaf"></i> Culture</a></li>
				<li <?php if(@$_GET['section']=='test') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=test"><i class="fas fa-question"></i>Test(s)</a></li>				
			</ul>
		</div>
	</div>
</nav>
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