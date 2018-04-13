<?php
session_start();
$n=$_SESSION['N'];

include('../Public/views/_header.php');
	include('../DBfiles/connectDB.php');


?>
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<form class="form" method="POST">
	<br><input type="text" name="title" class="form-control" placeholder="title of a quiz"><br>
<select class="form-control" name="category">
	<option selected disabled>Choose category</option>
	<option>Science</option>
	<option>General knowledge</option>
	<option>Umuco nyarwanda</option>
</select><br>
<?php 
$counter=0;
for($i=0;$i<$n;$i++){ 
	?>
<br><input type="text" name="questionC<?=$counter++?>" class="form-control" placeholder="Question <?=$i+1?>">
<div class="row">
	<div class="col-lg-8">
		<input type="text" name="<?=$counter++?>" class="form-control" placeholder="True answer here">
		<input type="text" name="<?=$counter++?>" class="form-control">
		<input type="text" name="<?=$counter++?>" class="form-control">
		<input type="text" name="<?=$counter++?>" class="form-control">
	</div>
</div>
<?php	
}
?>
<br><button class="btn btn-info" type="submit" name="save">Save</button>
<?php 
?>


</form>	
</div>
<div class="col-lg-4"></div>
</div>
<?php
if(isset($_POST['save'])){
	$token=time();
	$cat=mysqli_escape_string($conn,$_POST['category']);
	$title=mysqli_escape_string($conn,$_POST['title']);
	$count=0;
for($k=0;$k<$n;$k++){
		$ck="radio";
		$question=mysqli_escape_string($conn,$_POST['questionC'.$count++]);
		$ans1=mysqli_escape_string($conn,$_POST[$count++]);
		$ans2=mysqli_escape_string($conn,$_POST[$count++]);
		$ans3=mysqli_escape_string($conn,$_POST[$count++]);
		$ans4=mysqli_escape_string($conn,$_POST[$count++]);
		$qr="insert into quizzes (same_q,question,ans1,ans2,ans3,ans4,type,category,title) values ('$token','$question','$ans1','$ans2','$ans3','$ans4','$ck','$cat','$title')";
		mysqli_query($conn,$qr);
	}
	header("Location:prepare.php");
}


?>
</div>