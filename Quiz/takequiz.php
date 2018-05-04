<?php
$_SESSION['c']=@$_GET['c'];
$_SESSION['quiz']=@$_GET['quiz'];
?><div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-8">
Time remaining:<p id="time" style="font-size: 20px;"></p><hr>
<form class="form" method="POST">
<?php
$id=@$_GET['quiz'];
//--------------------------------------

    $query13="SELECT * FROM quizzes WHERE id='$id'";
   $res=$conn->query($query13);
   $row=$res->fetch_assoc();
   $title=$row['title'];
Echo "<h5>".$title."</h5><br>";
   $qr="select * from quizzes where title='$title'";
   $result=$conn->query($qr);
   $nam=0;
   while($r=$result->fetch_assoc()){
?>
<p><?=$r['question']?></p>
<?php
if($r['type']=="radio"){
	$i=rand(0,3);
	$allAns=array($r['ans1'],$r['ans2'],$r['ans3'],$r['ans4']);
	$temp=$allAns[$i];
  $allAns[$i]=$allAns[0];
  $allAns[0]=$temp;

 ?>
<input type="radio" name="<?php echo $nam ?>" value="<?=$allAns[0]?>"><?=$allAns[0]?><br>
<input type="radio" name="<?php echo $nam ?>" value="<?=$allAns[1]?>"><?=$allAns[1]?><br>
<input type="radio" name="<?php echo $nam ?>" value="<?=$allAns[2]?>"><?=$allAns[2]?><br>
<input type="radio" name="<?php echo $nam ?>" value="<?=$allAns[3]?>"><?=$allAns[3]?><br>
<hr>
<?php }
$nam++;
} 
    ?>
<button type="submit" name="submitAns" class="btn bt-submit">Submit</button>
</form>

<?php
if (isset($_POST['submitAns'])) {
 $qr="select * from quizzes where title='$title'";
   $result=$conn->query($qr);
  $names=0;
  $totalQ=mysqli_num_rows($result);
  $marksPerQ=30/$totalQ;
  $totalMarks=0;
  while($ro=$result->fetch_assoc()){
    $hisAnswer=mysqli_escape_string($conn,$_POST[$names]);
    if($hisAnswer==$ro['ans1']){
       //echo $marksPerQ;
       $totalMarks=$totalMarks+$marksPerQ;
     }
   $names++; 
  }
    ob_flush();
    flush();
 //header("Location:index.php?m=".$totalMarks."&msg=all");
 echo "<script>location.href='index.php?m=".$totalMarks."&msg=all'</script>";
}


?>

<script type="text/javascript">
  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
            window.location = "index.php?m=0&msg=timeout";
        }
    }, 1000);
}

window.onload = function () {
    var fifteenMinutes = 60 * 15,
        display = document.querySelector('#time');
    startTimer(fifteenMinutes, display);
};
</script>
</div>
</div>