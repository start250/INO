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
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
        <center><i class="fa fa-home" style="font-size: 30px;"></i><a href="index.php">Home</a> | <img src="Resources/Storage/<?php $s=$_GET["s"]; 
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
  <li><a href="index.php?s=Academic Logo&sub=Library"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Library'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Library</a></li>
    <li><a href="index.php?s=Academic Logo$sub=Scholarship"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Scholarship'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Scholarship</a></li>
    <li><a href="index.php?s=Academic Logo$sub=Past_Papers"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Past_Papers'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">National Past Paper</a></li>
    <li><a href="index.php?s=Academic Logo$sub=Explore_Rwandan_Education"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Explore_Rwandan_Education'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Explore Rwandan Education</a></li>
    <li><a href="index.php?s=Academic Logo&sub=Academic_news"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Academic_news'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic news</a></li>
    

<?php } 
else if(@$_GET['s']=="Business Logo"){
?>
<li><a href="index.php?s=Business Logo&sub=Business_Opportunities"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_Opportunities'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Opportunities</a></li>
    <li><a href="index.php?s=Business Logo&sub=Business_Advice"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Advice</a></li>
    <li><a href="index.php?s=Business Logo&sub=Business_News"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business News</a></li>
    <li><a href="index.php?s=Business Logo&sub=Biographies_Of_Successful_Business_Men"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Biographies_Of_Successful_Business_Men'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Biographies Of Successful Business Men</a></li>
    <li><a href="index.php?s=Business Logo&sub=Meet_With_Business_Mentors"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Meet_With_Business_Mentors'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Meet With Business Mentors</a></li>
    <?php
}
   else if(@$_GET['s']=="Health Logo"){ ?>
    <li><a href="index.php?s=Health Logo&sub=Nutritions"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Nutritions'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Nutritions</a></li>
    <li><a href="index.php?s=Health Logo&sub=Traditional_Medecine"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Traditional_Medecine'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Traditional Medecine</a></li>
    <li><a href="index.php?s=Health Logo&sub=Serious_Deseases"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Serious_Deseases'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Serious Deseases</a></li>
    <li><a href="index.php?s=Health Logo&sub=Doctor_Advice"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Doctor_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Doctor Advice</a></li>
    <li><a href="index.php?s=Health Logo&sub=Health_News"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Health_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health News</a></li>
    <li><a href="index.php?s=Health Logo&sub=Ask_Doctor"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ask_Doctor'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask_Doctor</a></li>

   <?php

}
else if(@$_GET['s']=="Road Logo"){
   ?>
   <li><a href="index.php?s=Road Logo&sub=Igazeti"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Igazeti'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Igazeti</a></li>
    <li><a href="index.php?s=Road Logo&sub=Ibibazo_nibisubizo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibibazo_nibisubizo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibibazo n'Ibisubizo</a></li>
    <li><a href="index.php?s=Road Logo&sub=Ibyapa"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibyapa'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibyapa</a></li>
    <li><a href="index.php?s=Road Logo&sub=Amakuru"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Amakuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amakuru</a></li>
    <li><a href="index.php?s=Road Logo&sub=Baza_Mwarimu"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Baza_Mwarimu'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Mwarimu</a></li>
<?php }
else if(@$_GET['s']=="English Logo"){ ?>
    <li><a href="index.php?s=English Logo&sub=For_Biginners"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='For_Biginners'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Biginners</a></li>
    <li><a href="index.php?s=English Logo&sub=For_Intermediate"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='For_Intermediate'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Intermediate</a></li>
    <li><a href="index.php?s=English Logo&sub=Advanced_English"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Advanced_English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Advanced English</a></li>
    <li><a href="index.php?s=English Logo&sub=Business_English"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business English</a></li>
    <li><a href="index.php?s=English Logo&sub=Ask_Teacher"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ask_Teacher'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask Teacher</a></li>
<?php
}
else if(@$_GET['s']=="Culture Logo"){
?>
<li><a href="index.php?s=Culture Logo&sub=Amateka_yu_Rwanda"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Amateka_yu_Rwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amateka y'u Rwanda</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Imigani"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Imigani'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Imigani</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Ibisakuzo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibisakuzo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibisakuzo</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Kirazira_z'umuco_Nyarwanda"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Kirazira_zumuco_Nyarwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Kirazira z'umuco Nyarwanda</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Baza_Sokuru"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Baza_Sokuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Sokuru</a></li>
<?php
}
?>
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
        width: 60px;
        height: 60px;
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