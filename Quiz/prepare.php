<?php
session_start();
	include('../Public/views/_header.php');
	include('../DBfiles/connectDB.php');
	
?>
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
	<strong><h3>Prepare quiz</h3></strong>
	<form class="form" method="POST">
		<input type="number" name="numberOfQ" class="form-control" placeholder="How many question for this quiz?"><br>
		<input type="number" name="numberOfQwithCheck" class="form-control" placeholder="How many question require to check two answers?"><br>
		<button type="submit" class="btn btn-info" name="numberOfQBtn">Submit</button>
	</form><br>



<?php
if(isset($_POST['numberOfQBtn'])){
	$_SESSION['N']=$_POST['numberOfQ'];
	$_SESSION['M']=$_POST['numberOfQwithCheck'];
	header("Location:edit.php");
	}?>
</div></div>