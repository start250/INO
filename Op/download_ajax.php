<?php
include('../DBfiles/connectDB.php');
$id=$_POST['id'];
$sql=mysqli_query($conn,"SELECT * from books where _id='$id'") or die('failed'.mysqli_error());
$row=mysqli_fetch_array($sql);
$ex=$row['downloads'];
$nw=$ex+1;
mysqli_query($conn,"UPDATE books set downloads='$nw' where _id='$id'") or die('dsfghjklfgfhjk');
$sql1=mysqli_query($conn,"SELECT * from books where _id='$id'") or die('failed'.mysqli_error());
$row1=mysqli_fetch_array($sql1);
echo $row1['title']."......".$id;

?>