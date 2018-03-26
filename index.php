<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>INO - Homepage</title>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar" id="topHeader">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="glyphicon glyphicon-th" style="font-size: 20px;"></i>                        
      </button>
      <a class="navbar-brand" href="#">
            <img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Master Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li><form class="navbar-form" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                </form></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="row">
    <div class="col-lg-8">
        
        <?php if(@$_GET['s']){ ?>
        <center><i class="glyphicon glyphicon-home"></i><a href="index.php">Home</a> | <img src="Resources/Storage/<?php $s=$_GET["s"]; 
        $query="SELECT * FROM logos WHERE position='".$s."'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">
        <?php
                if(@$_GET["s"]=="Academic Logo")
                    echo "Academic";
                else if(@$_GET['s']=="Business Logo")
                    echo "Business";
                else if(@$_GET['s']=='English Logo')
                    echo "English";
                else if(@$_GET['s']=="Culture Logo")
                    echo "Umuco";
                else if(@$_GET['s']=="Health Logo")
                    echo "Health";
                else if(@$_GET['s']=="Quiz Logo")
                    echo "Random Quiz";
                else if(@$_GET['s']=="Road Logo")
                    echo "Amategeko y'umuhanda";
        ?>
    </center><br>
    <div class="row">
        <div class="col-lg-5">
            
        </div>
        <div class="col-lg-3">kk</div>
    </div><?php } ?>
    </div>
    <div class="col-lg-4">
        <ul>
    <?php if(!@$_GET['s']) {?>        
        <li><a href="index.php?s=Academic Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Academic Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic</a></li>
    <li><a href="index.php?s=Business Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business</a></li>
    <li><a href="index.php?s=Road Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Road Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amategeko y'umuhanda</a></li>
    <li><a href="index.php?s=Health Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Health Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health</a></li>
    <li><a href="index.php?s=English Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='English Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">English</a></li>
    <li><a href="index.php?s=Culture Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Culture Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Umuco</a></li>
    <li><a href="index.php?s=Quiz Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Quiz Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Quiz</a></li>
<?php } 
else if(@$_GET['s']=="Academic Logo"){ ?>
  <li><a href="index.php?s=Academic Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Library'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Library</a></li>
    <li><a href="index.php?s=Business Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Scholarship'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Scholarship</a></li>
    <li><a href="index.php?s=Road Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Past_Papers'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">National Past Paper</a></li>
    <li><a href="index.php?s=Health Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Explore_Rwandan_Education'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Explore Rwandan Education</a></li>
    <li><a href="index.php?s=English Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Academic_news'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic news</a></li>
    

<?php } ?>
</ul>
    </div>
</div>

</body>
</html>
<style type="text/css">
    .col-lg-4 ul li{
        padding: 10px;
        list-style-type: none;
    }
    .col-lg-4 ul li a img{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border:2px solid blue;
    }

    .col-lg-8 center img{
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }
    .col-lg-8 center{
        font-size: 20px;
    }
</style>