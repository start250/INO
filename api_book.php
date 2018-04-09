
<?php  
include('DBfiles/connectDB.php');
 
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/views.php');
$_id=mysqli_real_escape_string($conn,$_GET['bookID']);

$q=mysqli_query($conn,"Select book_link FROM books WHERE _id=".$_id);
$fetch=mysqli_fetch_array($q);
$filename = 'Resources/Storage/Books/'.$fetch['book_link'];
if (file_exists($filename)) {
    echo $fetch['book_link'];
} else {
    echo '404.pdf';
} 


incrementTargetCol('books','downloads','_id',$_id,$conn);
 