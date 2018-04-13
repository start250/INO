<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "Unauthorized access. Please, login as admin.";
    die();}
	include('../Public/views/_header.php');
	include('../DBfiles/connectDB.php');
	
?>
<div class="row">
<div class="col-lg-4">
	<a href="../dashboard.php?section=academic">Back to full dashboard</a><br><br>
	<a href="/INOGIT/Logout/"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a>
</div>
<div class="col-lg-4">
	<strong><h3>Prepare quiz</h3></strong>
	<form class="form" method="POST">
		<input type="number" name="numberOfQ" class="form-control" placeholder="How many question for this quiz?"><br>
		<button type="submit" class="btn btn-info" name="numberOfQBtn">Submit</button>
	</form><br>



<?php
if(isset($_POST['numberOfQBtn'])){
	$_SESSION['N']=$_POST['numberOfQ'];
	header("Location:edit.php");
	}?>
</div></div>