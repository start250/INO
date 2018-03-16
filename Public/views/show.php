 
<!DOCTYPE html>
<html lang="en">
<head> 
<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
?>
</head>
<body>
<?=include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_navs.php');?> 
<div class="container">
<embed src="/INOGIT/Resources/Storage/Books/<?=$_GET['book_link']?>#toolbar=0&navpanes=0&scrollbar=0&statusbar=0&messages=0&scrollbar=0" width="70%" height="425">
</div>