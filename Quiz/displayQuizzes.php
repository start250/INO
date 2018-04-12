<table class="table">
<?php

$category13=@$_GET['c'];
//--------------------------------------

    $query13="SELECT * FROM quizzes WHERE category='$category13' order by id desc";
    $chck="";
$result13 = $conn->query($query13);
while($row13 = $result13->fetch_assoc()) {
   if($chck!=$row13['title']){ 
?>
 <br>
 <tr>
     <td><a href="?c=<?=$_GET['c']?>&quiz=<?=$row13['id']?>"><?php echo $row13['title'];?></a></td>
     <td>30 marks | 15 min</td>
 </tr>
    <?php
}
$chck=$row13['title'];
}
    ?>
</table>