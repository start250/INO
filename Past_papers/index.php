<?php  
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php'); 
   
// $id=mysqli_real_escape_string($conn,$_GET['post']); 
// incrementTargetCol('posts','views','id',$id,$conn);
 
$query = "SELECT level FROM past_papers";  
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {

?>
 <div class="alert alert-info">
<?= $row['level']?>
 </div>

  <?php }?>
    
</head>

<body>

 
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>