<?php
session_start();
$n=$_SESSION['N'];
$m=$_SESSION['M'];

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

for($j=0;$j<$m;$j++){
?>
<br><input type="text" name="questionC<?=$j?>" class="form-control" placeholder="Question <?=$j+1?>">
<div class="row">
	<div class="col-lg-8">
		<input type="text" name="<?=$j+1?>" class="form-control" placeholder="True answer here">
		<input type="text" name="<?=$j+2?>" class="form-control" placeholder="True answer here">
		<input type="text" name="<?=$j+3?>" class="form-control">
		<input type="text" name="<?=$j+4?>" class="form-control">
	</div>
</div>
      
<?php }
for($i=0;$i<$n-$m;$i++){ 
	?>
<br><input type="text" name="questionC<?=$i?>" class="form-control" placeholder="Question <?=++$j?>">
<div class="row">
	<div class="col-lg-8">
		<input type="text" name="<?=$i+1?>" class="form-control" placeholder="True answer here">
		<input type="text" name="<?=$i+2?>" class="form-control">
		<input type="text" name="<?=$i+3?>" class="form-control">
		<input type="text" name="<?=$i+4?>" class="form-control">
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
	for($x=0;$x<$m;$x++){
		$ck="checkbox";
		$question=mysqli_escape_string($conn,$_POST['questionC'.$x]);$answer=$x+1;
		$ans1=mysqli_escape_string($conn,$_POST[$answer]);$answer=$x+2;
		$ans2=mysqli_escape_string($conn,$_POST[$answer]);$answer=$x+3;
		$ans3=mysqli_escape_string($conn,$_POST[$answer]);$answer=$x+4;
		$ans4=mysqli_escape_string($conn,$_POST[$answer]);
		$qr="insert into quizzes (same_q,question,ans1,ans2,ans3,ans4,type,category,title) values ('$token','$question','$ans1','$ans2','$ans3','$ans4','$ck','$cat','$title')";
		mysqli_query($conn,$qr);
	}
for($k=0;$k<$n-$m;$k++){
		$ck="radio";
		$question=mysqli_escape_string($conn,$_POST['questionC'.$k]);$answer=$k+1;
		$ans1=mysqli_escape_string($conn,$_POST[$answer]);$answer=$k+2;
		$ans2=mysqli_escape_string($conn,$_POST[$answer]);$answer=$k+3;
		$ans3=mysqli_escape_string($conn,$_POST[$answer]);$answer=$k+4;
		$ans4=mysqli_escape_string($conn,$_POST[$answer]);
		$qr="insert into quizzes (same_q,question,ans1,ans2,ans3,ans4,type,category,title) values ('$token','$question','$ans1','$ans2','$ans3','$ans4','$ck','$cat','$title')";
		mysqli_query($conn,$qr);
	}
	header("Location:prepare.php");
}


?>
</div>