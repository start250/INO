<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php');  
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
if(isset($_POST['name'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['email'])&&isset($_POST['terms'])){
    

 
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$email=mysqli_real_escape_string($conn,$_POST['email']); 
	$hashed_password=password_hash($password,PASSWORD_DEFAULT);
	$sql = "INSERT INTO users (name, username,password,email) VALUES ('$name','$username','$hashed_password','$email')";  
	if ($conn->query($sql) === TRUE) {

			session_start();
            $_SESSION['username']=$username;
            $_SESSION['level']='guest'; 
			$_SESSION['active']=FALSE;
		
			echo "<script>location.href='../'</script>";
			
			die();
					} else {
							echo "Error registering..";
					}
}  

?>
 <title>Register</title> 
</head>
<body>
    
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');
if(isset($_SESSION['username'])){
    echo "You are logged in as ".$_SESSION['username'];
    die();
} 
?>
<br><br><br>
<div class="container">
 <div class="form-avatar hidden-xs">
    <!-- <span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-user fa-stack-1x"></i>
				</span> -->

    <!-- Sign Up form -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-right-xs">Sign Up</h3>
        <p class="text-muted text-right-xs">
            Please fill out the form below to create a new account.
        </p>
        <div class="form-white">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" role="form">
                <input type="text" hidden name="req" value="register">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name">

                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email2">Email address</label>
                    <input name="email" type="email" class="form-control" id="email2" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="password2">Password</label>
                            <input name="password" type="password" class="form-control" id="password2" placeholder="Password">
                        </div>
                        <div class="col-sm-6">
                            <label for="password2">Repeat password</label>
                            <input type="password" class="form-control" id="password3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input name="terms" type="checkbox"> I agree to the
                        <a>Terms of Service</a> and
                        <a href=".html#"> </a>
                    </label>
                </div>
                <button type="submit" class="btn btn-info">Create an account</button>
            </form>
        </div>
    </div>
</div>


<!-- / wrapper -->


<?php include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>