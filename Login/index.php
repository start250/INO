
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php');  
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/mailer.php'); 
    if(!isset($_SESSION)) { session_start(); }   

if(isset($_POST['email'])&&isset($_POST['password'])){ 
    $email=mysqli_real_escape_string($conn,$_POST['email']); 
    $password=mysqli_real_escape_string($conn,$_POST['password']); 
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email='$email'"); 
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc(); 
    if(password_verify($password, $row['password'])) { 
        session_start();
        $_SESSION['active']=$row['active'];
        $_SESSION['username']=$row['username'];  
        $_SESSION['level']=$row['level'];
        if(isset($_SESSION['level'])&&($_SESSION['level']==='admin'||$_SESSION['level']==='author')) 
        header("Location: /INOGIT/dashboard.php");
        die();
    }
        header("Location: /INOGIT/");
        die();
    }             
    if(isset($_POST['email_reset_pass'])){
                $email=mysqli_real_escape_string($conn,$_POST['email_reset_pass']); 
                $stmt = $conn->prepare("SELECT * FROM users WHERE email='$email'"); 
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc(); 
    
                if(isset($row['email'])){
                    $token=sha1(time());
                    $sql = "INSERT INTO reset_password (token,email) VALUES ('$token','$email')";  
            if ($conn->query($sql) === TRUE) {
                        
                $to = $email;
                $subject = "Your Password Reset Link @aimuhire";
                $txt = "http://localhost/INOGIT/reset/?t=".$token;
                $headers = "From: aimuhirecom@gmail.com" ;
                if(mail($to,$subject,$txt,$headers)){
                    die("Reset link sent to your email.");
                }else{
                    die("Unknown error Mars2341; Please try again later");
                }
    
          
                   
                    }else{
                        echo "Errors ". $sql . "<br>" . $conn->error;
                        //die("Error Mars3422");
                    }
    
                }else{
                    echo "<script>alert('Please use the email you registered with')</script>";
                }
    
            } 


?>

 <title>Login</title>
</head>
<body>
    
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');
if(isset($_SESSION['username'])){
    echo "You are logged in as ".$_SESSION['username'];
    die();
} 
?>
<div class="container">
<br>
<br>
<br>


<div class="wrapper body-inverse">
    <!-- wrapper -->
    <div class="container">
        <div class="row">
            <!-- Sign In form -->
            <div class="col-sm-5 col-sm-offset-1">
                <h3>Sign In</h3>
                <p class="text-muted">
                    Please fill out the form below to login to your account.
                </p>
                <div class="form-white">
                    <form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <input type="text" hidden name="req" value="login">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-block btn-color btn-xxl">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    


    <hr>
<p>
    <a href=".html#" id="lost-btn">Lost your password?</a>
</p>
<div class="col-sm-5 col-sm-offset-1" id="lost-form">
    <p>Enter your email address and we will send you a link to reset your password.</p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" role="form">
        <input type="text" hidden name="req" value="pass">
        <div class="form-group">
            <label for="email-lost">Email address</label>
            <input type="email" name="email_reset_pass" class="form-control" id="email-lost" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-default">Send</button>
    </form>
</div>
</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_footer.php');?>