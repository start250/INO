<div class="row">
  <div class="col-lg-4"></div>
  <div class="col-lg-8">
<form class="form" method="POST">
<?php
$id=@$_GET['quizz'];
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
<p style="font-weight: bold;"><?=$r['question']?></p>
<?php
if($r['type']=="radio"){
	
 ?>
<p>Answer is:<span style="font-weight: bold;"><?=$r['ans1']?></span></p>
<hr>
<?php }
$nam++;
} 
    ?>
</form>
<center><a href="index.php" style="font-size: 20px;text-decoration: none;">Take another quiz</a></center></center>
</div>
</div>