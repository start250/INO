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
      <a class="navbar-brand" href="index.php">
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
                <?php

                session_start();
                if(isset($_SESSION['username'])){
                    ?>
 <li><a href="/INOGIT/User"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['username']?></a></li>
<li><a href="/INOGIT/Logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php

                }else{
                    ?>
  <li><a href="/INOGIT/Register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="/INOGIT/Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php

                }
                 

                ?>
          
      </ul>
    </div>
  </div>
</nav>
 
<div class="row">
    <div class="col-lg-8">
        
        <?php if(@$_GET['s']){ ?>
        <center><i class="fa fa-home" style="font-size: 30px;"></i><a href="index.php">Home</a> | <a href="index.php?s=<?=$_GET['s']?>"> <img src="Resources/Storage/<?php $s=$_GET["s"]; 
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
        ?></a> <?php if(@$_GET['sub']){ ?>| <img src="Resources/Storage/<?php $s=$_GET["sub"]; $query="SELECT * FROM logos WHERE position='".$s."'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>"><?php echo @$_GET['sub'];} ?>
    </center><br>
    <?php
    $subCat=@$_GET['sub'];
    if($subCat=="Library"){?>
            <center>
               <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=1" class="lib_Cat" name="Science_Books"> <i class="fa fa-flask"></i>Science Books</a>
                <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=2" class="lib_Cat" name="Humanity_Books"><i class="fa fa-users"></i>Humanity Books</a>
                <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=3" class="lib_Cat" name="Life_Books"><i class="fa fa-heartbeat"></i>Life Books</a>
                <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=4" class="lib_Cat" name="ICT_Books"><i class="fa fa-laptop"></i>ICT Books</a><br>
                <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=5" class="lib_Cat" name="Language_Books"><i class="fa fa-language"></i>Language Books</a>
                <a href="<?php echo $_SERVER['REQUEST_URI'];?>&lib_Cat=6" class="lib_Cat" name="Business_Books"><i class="fa fa-briefcase"></i>Business Books</a>
            </center>
        <?php
    }
    else if ($subCat=="Past_Papers") {?>
       <form method="POST">
            <center>
                <button type="submit" class="SubCat">P6</button>
                <button type="submit" class="SubCat">S3</button>
                <button type="submit" class="SubCat">S6</button>
                <button type="submit" class="SubCat">Other Papers</button>
            </center>
        </form>
   <?php }
   else if($subCat=="Scholarship"){?>
        <form method="POST">
            <center>
                <button type="submit" name="sub_ex" class="SubCat"><i class="fa fa-star"></i>Tips to Win Scholarship</button>
                <button type="submit" name="sub_ex" class="SubCat"><i class="fa fa-link"></i>Links</button>
                <button type="submit" name="sub_ex" class="SubCat"><i class="fa fa-newspaper"></i>News</button>
                <button type="submit" name="sub_ex" class="SubCat"><i class="fa fa-question-circle"></i>Ask</button>
            </center>
        </form>
    <?php
   }
   else if(@$_GET['sub']=="Explore_Rwandan_Education"){
           $urlNow=$_SERVER['REQUEST_URI'];
    ?>
      <center><div class="dropDownsButton">  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Nursary
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Baby class</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Middle class</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tp class</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Primary
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Elementary science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Social Studies</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Francais</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Ordinary level
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Biology</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chemistry</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Geography</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">History</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Entrepreneurship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Computer science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Francais</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kiswahili</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Advanced Level
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Biology</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chemistry</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Geography</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">History</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Entrepreneurship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Computer science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Francais</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Economie</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Literature</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">General paper</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">University
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Links</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tips to win scholarship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ask</a></li>
    </ul>
  </div></div></center>    
   <?php }
if(@$_GET['sub']=="Ask_Teacher" || @$_GET['sub']=="Ask_Doctor" || @$_GET['sub']=="Baza_Sokuru" || @$_GET['sub']=="Baza_Mwarimu")
include('Public/views/ask_everyone.php');
if(@$_GET['s']!="Academic Logo" && @$_GET['sub'])
    include('Public/views/documentWRITTENvideo.php');   
    ?>

   <?php } ?>
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
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Umuco w'i Rwanda</a></li>
    <li><a href="index.php?s=Quiz Logo"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Quiz Logo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Quiz</a></li>
<?php } 
else if(@$_GET['s']=="Academic Logo"){ ?>
  <li><a href="index.php?s=Academic Logo&sub=Library"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Library'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Library</a></li>
    <li><a href="index.php?s=Academic Logo&sub=Scholarship"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Scholarship'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Scholarship</a></li>
    <li><a href="index.php?s=Academic Logo&sub=Past_Papers"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Past_Papers'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">National Past Paper</a></li>
    <li><a href="index.php?s=Academic Logo&sub=Explore_Rwandan_Education"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Explore_Rwandan_Education'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Explore Rwandan Education</a></li>
    <li><a href="index.php?s=Academic Logo&sub=Academic_news"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Academic_news'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic news</a></li>
    

<?php } 
else if(@$_GET['s']=="Business Logo"){
?>
<li><a href="index.php?s=Business Logo&sub=Business_Opportunities&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_Opportunities'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Opportunities</a></li>
    <li><a href="index.php?s=Business Logo&sub=Business_Advice&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Advice</a></li>
    <li><a href="index.php?s=Business Logo&sub=Business_News&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business News</a></li>
    <li><a href="index.php?s=Business Logo&sub=Biographies_Of_Successful_Business_Men&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Biographies_Of_Successful_Business_Men'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Biographies Of Successful Business Men</a></li>
    <li><a href="index.php?s=Business Logo&sub=Meet_With_Business_Mentors"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Meet_With_Business_Mentors'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Meet With Business Mentors</a></li>
    <?php
}
   else if(@$_GET['s']=="Health Logo"){ ?>
    <li><a href="index.php?s=Health Logo&sub=Nutritions&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Nutritions'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Nutritions</a></li>
    <li><a href="index.php?s=Health Logo&sub=Traditional_Medecine&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Traditional_Medecine'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Traditional Medecine</a></li>
    <li><a href="index.php?s=Health Logo&sub=Serious_Deseases&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Serious_Deseases'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Serious Deseases</a></li>
    <li><a href="index.php?s=Health Logo&sub=Doctor_Advice&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Doctor_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Doctor Advice</a></li>
    <li><a href="index.php?s=Health Logo&sub=Health_News&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Health_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health News</a></li>
    <li><a href="index.php?s=Health Logo&sub=Ask_Doctor"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ask_Doctor'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask_Doctor</a></li>

   <?php

}
else if(@$_GET['s']=="Road Logo"){
   ?>
   <li><a href="index.php?s=Road Logo&sub=Igazeti&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Igazeti'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Igazeti</a></li>
    <li><a href="index.php?s=Road Logo&sub=Ibibazo_nibisubizo&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibibazo_nibisubizo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibibazo n'Ibisubizo</a></li>
    <li><a href="index.php?s=Road Logo&sub=Ibyapa&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibyapa'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibyapa</a></li>
    <li><a href="index.php?s=Road Logo&sub=Amakuru&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Amakuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amakuru</a></li>
    <li><a href="index.php?s=Road Logo&sub=Baza_Mwarimu"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Baza_Mwarimu'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Mwarimu</a></li>
<?php }
else if(@$_GET['s']=="English Logo"){ ?>
    <li><a href="index.php?s=English Logo&sub=For_Biginners&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='For_Biginners'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Biginners</a></li>
    <li><a href="index.php?s=English Logo&sub=For_Intermediates&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='For_Intermediate'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Intermediate</a></li>
    <li><a href="index.php?s=English Logo&sub=Advanced_English&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Advanced_English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Advanced English</a></li>
    <li><a href="index.php?s=English Logo&sub=Business_English&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Business_English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business English</a></li>
    <li><a href="index.php?s=English Logo&sub=Ask_Teacher"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ask_Teacher'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask Teacher</a></li>
<?php
}
else if(@$_GET['s']=="Culture Logo"){
?>
<li><a href="index.php?s=Culture Logo&sub=Amateka_yu_Rwanda&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Amateka_yu_Rwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amateka y'u Rwanda</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Imigani&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Imigani'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Imigani</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Ibisakuzo&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Ibisakuzo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibisakuzo</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Kirazira_z'umuco_Nyarwanda&t=1"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Kirazira_zumuco_Nyarwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Kirazira z'umuco Nyarwanda</a></li>
    <li><a href="index.php?s=Culture Logo&sub=Baza_Sokuru"><img src="Resources/Storage/<?php $query="SELECT * FROM logos WHERE position='Baza_Sokuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Sokuru</a></li>
<?php
}

?>
</ul>
<br><br><hr>
<?php
if(@$_GET['t']==3 && @$_GET['post']){
$section20=@$_GET['s'];
$category20=@$_GET['sub'];
$query20="SELECT * FROM videos WHERE category='$category20' order by id desc";
$display_count=1;
$result20=$conn->query($query20);

   echo "<strong><h2>Related Videos</h2></strong>"; 
while($row20=$result20->fetch_assoc()){
    if($display_count<=5){
?>
<div class="row">
    <div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row20['id']; ?>"><?php echo $row20['title']; ?></a></strong><h4>
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row20['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Thumbs/'.$row20['thumb'];?>"></a>
    <p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $row20['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $row20['comments']; ?></p>
</div>    
</div>
<hr>
<?php
}
$display_count+=1;
}}
if(@$_GET['t']==2 && @$_GET['post']){
    
$section21=@$_GET['s'];
$category21=@$_GET['sub'];
$query21="SELECT * FROM posts WHERE category='$category21' order by id desc";
$display_count=1;
$result21=$conn->query($query21);
echo "<strong><h2>Related Videos</h2></strong>"; 
while($row21=$result21->fetch_assoc()){
    if($display_count<=5){
?>
<div class="row">
    <div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row21['id']; ?>"><?php echo $row21['title']; ?></a></strong><h4>
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row21['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Featured_images/'.$row21['featured_image'];?>"></a>
    <p style="text-align: center;"><i class="fa fa-eye"></i>Views:<?php echo $row21['views']; ?> | <i class="fa fa-comment"></i>Comments:<?php echo $row21['comments']; ?></p>
</div>    
</div>
<hr>
<?php
}
$display_count+=1;
}}
//-------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------

/*-------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------*/
if(@$_GET['t']==1){
    
$section22=@$_GET['s'];
$category22=@$_GET['sub'];
$query22="SELECT * FROM posts WHERE category='$category22' order by id desc";
echo $pages;
$display_count=1;
$result22=$conn->query($query22);
echo "<strong><h2>Also see</h2></strong>"; 
while($row22=$result22->fetch_assoc()){
    if($display_count<=5){
?>
<div class="row">
    <div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row22['id']; ?>"><?php echo $row22['title']; ?></a></strong><h4>
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row22['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Featured_images/'.$row22['featured_image'];?>"></a>
</div>    
</div>
<hr>
<?php
}
$display_count+=1;
}}
?>
    </div>
</div>
<!--Footer-->

  <hr>
<?php include('Public/views/_footer.php'); ?>


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
    .SubCat{
        border:none;
        background-color:white;
        margin: 15px; 
    }
    .dropDownsButton .dropdown{
        display: inline-block;
    }
    .lib_Cat{
  padding: 10px;
  margin: 20px;
  cursor: pointer;
}

</style>


<?php
if(isset($_POST['sub_ex1'])){

}




?>



   