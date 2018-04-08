
<?php 
include('DBfiles/connectDB.php');

$q=mysqli_query($conn,"Select book_link FROM books WHERE _id=".$_GET['bookID']);
$fetch=mysqli_fetch_array($q);


 
$filename = 'Resources/Storage/Books/'.$fetch['book_link'];

if (file_exists($filename)) {
    echo $fetch['book_link'];
} else {
    echo '404.pdf';
} 

 


?>
