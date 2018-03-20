<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../Public/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../Public/assets/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="../Public/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php

session_start();
if (@$_SESSION['admin']) {
	?>
	<script type="text/javascript">location.href='../'</script>
	<?php
}
include("../DBfiles/connectDB.php");
?>
<?php include('../Public/views/_header.php');?>
</head>
<body style="background-color: #e6f5ff; padding: 0px; margin: 0px;">
<?php include('../Public/views/_navs_admin.php'); ?>
<div id="main_dash" class="container">
<div class="row z-depth-1">
           <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body" style="">
                    <h1>Login..</h1>
                    <hr>
<?php
if (isset($_POST['login'])) {
	if (!empty(trim($_POST['username']))&&!empty(trim($_POST['password']))) {
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
	}
	else
	{
		echo "Both username and password required!";
	}
	
	$query=mysqli_query($conn,"SELECT * from adminauthor where username='".$username."' AND password='".$password."'");
   $num_r=mysqli_num_rows($query);
   $row=mysqli_fetch_array($query);
   if ($num_r>0) {
   
$_SESSION['author']=md5($row['id']);
  $_SESSION['au']=$row['id']; 
   if ($_SESSION['author']) {
   	echo "Logged in...";
   }
   
   ?>
   <script type="text/javascript">location.href='../'</script>
   <?php
   }
   else
   {
   echo "Incorrect Username or password!";

}


if(!empty($_POST["remember"])) {
				setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["username"])) {
					setcookie ("username","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
			}
}
	
			?>
      <form class="form-signin" method="POST" action="">
        
        <div class="form-group">

	 <label for="username" class="sr-only">Username</label>
	  <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
	</div>
 <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
		<div><input type="checkbox" name="remember" id="remember-me" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
     <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
       </div> 

      </form>

     
                </div>
            </div>
        </div>
    </div>
</div>
</body>
