
<?php   

require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
?>
 <title>User</title>
</head>
<body>
    
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');?>
<div class="container">
<?php

if(isset($_SESSION['username'])){
    echo "You are logged in as ".$_SESSION['username'];
}else{
    echo "You are not logged in ";
}

?>
</div>






<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>