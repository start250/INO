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

   while($r=$result->fetch_assoc()){
?>
<p><?=$r['question']?></p>
<?php
if($r['type']=="radio"){
	$i=rand(1,4);
	$allAns=array($r['ans1'],$r['ans2'],$r['ans3'],$r['ans4']);
	swap($allAns[0],$allAns[$i]);
 } ?>
<input type="radio" name="" value="<?=$allAns[0]?>"><br>
<input type="radio" name="" value="<?=$allAns[1]?>"><br>
<input type="radio" name="" value="<?=$allAns[2]?>"><br>
<input type="radio" name="" value="<?=$allAns[3]?>"><br>
<?php }


	
    ?>

</form>