
<?php   
require_once($_SERVER['DOCUMENT_ROOT'].'/link/views/header.php');

if(isset($_SESSION['username'])){
    echo "You are logged in as ".$_SESSION['username'];
}else{
    echo "You are not logged in ";
}

?>







<?php require_once($_SERVER['DOCUMENT_ROOT'].'/link/views/footer.php');?>