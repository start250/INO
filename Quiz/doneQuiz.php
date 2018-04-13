<?php
$marks=@$_GET['m'];
$msg=@$_GET['msg'];
$category=$_SESSION['c'];
$quizN=$_SESSION['quiz'];
if($msg=="all"){
?>
<center>
	<h3>You finished quiz!!!!</h3>
	<?php if($marks>=15){ ?>
	<p style="font-size: 20px;color: green;font-weight: bold;"><?php echo $marks."/30" ?></p>
	<a href="index.php?cheat=t&quizz=<?=$quizN?>">See Answers</a><br> <br><br>
	<?php }
	else {
		?>
	<p style="font-size: 20px;color: red;font-weight: bold;"><?php echo $marks."/30" ?></p>
	<a href="index.php?cheat=t&quiz=<?=$quizN?>">See Answers</a><br> <br><br>
		<?php
	} ?>
<a href="index.php?c=<?=$category?>&quizz=<?=$quizN?>" style="font-size: 20px;text-decoration: none;">Restart quiz</a><br>
or<br>
<a href="index.php" style="font-size: 20px;text-decoration: none;">Take another quiz</a></center>
</center>

<?php

}
?>
<?php
if($msg=="timeout"){
	?>
	<center>
<a href="index.php?c=<?=$category?>&quiz=<?=$quizN?>" style="font-size: 20px;text-decoration: none;">Restart quiz</a><br>
or<br>
<a href="index.php" style="font-size: 20px;text-decoration: none;">Take another quiz</a></center>
	<?php
}

?>
