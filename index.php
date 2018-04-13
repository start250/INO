<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');


?>
 <title>Home</title>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');?>
<div class="container">
    
 
<div class="row">
    <div class="col-lg-8">
        
        <?php if(@$_GET['s']){ ?>
        <center><i class="fa fa-home" style="font-size: 30px;"></i><a href="index.php">Home</a> | <a href="index.php?s=<?=$_GET['s']?>"> <img src="Resources/Storage/Logos/<?php $s=$_GET["s"]; 
        $query="SELECT * FROM logos WHERE position='".$s."'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">
        <?php
                if(@$_GET["s"]=="Academic")
                    echo "Academic";
                else if(@$_GET['s']=="Business")
                    echo "Business";
                else if(@$_GET['s']=='English')
                    echo "English";
                else if(@$_GET['s']=="Culture")
                    echo "Umuco";
                else if(@$_GET['s']=="Health")
                    echo "Health";
                else if(@$_GET['s']=="Quiz")
                    echo "Quiz";  
                else if(@$_GET['s']=="Road")
                    echo "Amategeko y'umuhanda";
        ?></a> <?php if(@$_GET['sub']){ ?>| <img src="Resources/Storage/Logos/<?php $s=$_GET["sub"]; $query="SELECT * FROM logos WHERE position='".$s."'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>"><?php echo @$_GET['sub'];} ?>
    </center><br>
    <?php
    $subCat=@$_GET['sub'];
    if($subCat=="Library"){?>
            <center>
               <a href="?s=Academic&sub=Library&lib_Cat=1" class="lib_Cat" name="Science_Books"> <i class="fa fa-flask"></i>Science Books</a>
                <a href="?s=Academic&sub=Library&lib_Cat=2" class="lib_Cat" name="Humanity_Books"><i class="fa fa-users"></i>Humanity Books</a>
                <a href="?s=Academic&sub=Library&lib_Cat=3" class="lib_Cat" name="Life_Books"><i class="fa fa-heartbeat"></i>Life Books</a>
                <a href="?s=Academic&sub=Library&lib_Cat=4" class="lib_Cat" name="ICT_Books"><i class="fa fa-laptop"></i>ICT Books</a><br>
                <a href="?s=Academic&sub=Library&lib_Cat=5" class="lib_Cat" name="Language_Books"><i class="fa fa-language"></i>Language Books</a>
                <a href="?s=Academic&sub=Library&lib_Cat=6" class="lib_Cat" name="Business_Books"><i class="fa fa-briefcase"></i>Business Books</a>
            </center>
        <?php
    }
    else if ($subCat=="Past Papers") {?>
       <form method="POST">
            <center>
                <button type="submit" name="cat" value="p6" class="SubCat">P6</button>
                <button type="submit" name="cat" value="s3" class="SubCat">S3</button>
                <button type="submit" name="cat" value="s6" class="SubCat">S6</button>
                <button type="submit" name="cat" value="other" class="SubCat">Other Papers</button>
            </center>
        </form>
   <?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      
      if(!isset($_POST['cat'])&&!isset($_POST['year'])&&!isset($_POST['course'])){ 
        $_SESSION['filter']=[]; 
      }
   if(isset($_POST['cat'])){ 
          $_SESSION['filter']=[]; 
          $_SESSION['filter']['cat']= $_POST['cat'];
   }

if(isset($_POST['course'])){ 
$_SESSION['filter']['course']= ($_POST['course']!=='all')?$_POST['course']:''; 
if($_POST['course']==='all'){
    $_SESSION['filter']['year']= '';
}

}
if(isset($_POST['year'])){  
    $_SESSION['filter']['year']= $_POST['year'];
}
   require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Past_papers/papers.php'); 
   }



   else if($subCat=="Scholarship"){?>
            <center>
                <a href="?s=Academic&sub=Scholarship&sc=1" class="SubCat"><i class="fa fa-star"></i>Tips to Win Scholarship</a>
                <a href="?s=Academic&sub=Scholarship&sc=2" class="SubCat"><i class="fa fa-link"></i>Links</a>
                <a href="?s=Academic&sub=Scholarship&sc=3" class="SubCat"><i class="fa fa-newspaper"></i>News</a>
                <a href="?s=Academic&sub=Scholarship&sc=4" class="SubCat"><i class="fa fa-question-circle"></i>Ask</a>
            </center>
    <?php
   }
   else if(@$_GET['sub']=="Explore Rwandan Education"){
           $urlNow=$_SERVER['REQUEST_URI'];
    ?>
      <center><div class="dropDownsButton">  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Nursary
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=Nursary&course=baby&t=1">Baby class</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=Nursary&course=middle&t=1">Middle class</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=Nursary&course=top class&t=1">Top class</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Primary
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=math&t=1">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=set&t=1">Elementary science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=social studies&t=1">Social Studies</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=kinyarwanda&t=1">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=english&t=1">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=pri&course=francais&t=1">Francais</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Ordinary level
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=math">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=biology&t=1">Biology</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=chemistry&t=1">Chemistry</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=geography&t=1">Geography</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=history&t=1">History</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=entrepreneurship&t=1">Entrepreneurship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=computer&t=1">Computer science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=kinyarwanda&t=1">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=english&t=1">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=francais&t=1">Francais</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=ol&course=kiswahili&t=1">Kiswahili</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Advanced Level
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=math&t=1">Math</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=biology&t=1">Biology</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=chemistry&t=1">Chemistry</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=geography&t=1">Geography</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=history&t=1">History</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=entrepreneurship&t=1">Entrepreneurship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=computer&t=1">Computer science</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=kinyarwanda&t=1">Kinyarwanda</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=english&t=1">English</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=francais&t=1">Francais</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=economie&t=1">Economie</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=literature&t=1">Literature</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Explore Rwandan Education&lv=al&course=gp&t=1">General paper</a></li>
    </ul>
</div><div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">University
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Scholarship&sc=2">Links</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Scholarship&sc=1">Tips to win scholarship</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="?s=Academic&sub=Scholarship&sc=4">Ask</a></li>
    </ul>
  </div></div></center>    
   <?php }
if(@$_GET['sub']=="Ask Teacher" || @$_GET['sub']=="Ask Doctor" || @$_GET['sub']=="Baza Sokuru" || @$_GET['sub']=="Baza Mwarimu")
    include('Public/views/ask_everyone.php');
else if(@$_GET['sub']=="Meet With Business Mentors")
  include('Public/views/ask_everyone.php');
else if(@$_GET['s']!="Academic" && @$_GET['sub'])
    include('Public/views/documentWRITTENvideo.php');   
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Library")
    include('Public/views/listLib.php');
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Scholarship"  && !@$_GET['sc']=="4") 
    include('Public/views/listSch.php');  
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Scholarship" && @$_GET['sc']=="4") 
    include('Public/views/ask_everyone.php');  
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Academic news") 
    include('Public/views/documentWRITTENvideo.php');  
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Explore Rwandan Education") {
    echo "<br>";
    include('Public/views/documentWRITTENvideo.php');  }
else if(@$_GET['s']=="Quiz")
  header("Location:Quiz/");
else if(@$_GET['s']=="Academic" && @$_GET['sub']=="Scholarship" && @$_GET['sc']=="4")
  include('Public/views/ask_everyone.php'); 

    ?>

   <?php } ?>


<!--++++++++++++++++
++++++++++++++++++
++++++++++++++++++
++++++++++++++++++
++++++++++++++++++-->
   


<?php
if(isset($_GET['q'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/searchResults.php');?>
  </div> 
  <!-- sidebar starts on get q -->
  <div class="col-lg-4">
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_sidebar.php');
    ?>
    </div>
     <!-- sidebar closed on get q-->
    </div> 
      <?php
    require_once('Public/views/_footer.php'); 
    die();
   
}


//require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/home.php');?>
    




<!--++++++++++++++++
++++++++++++++++++
++++++++++++++++++
++++++++++++++++++
++++++++++++++++++-->
    </div>
     <!-- sidebar starts -->
  <div class="col-lg-4">
   <?php require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_sidebar.php');?>
   </div>
     <!-- sidebar closed -->
    <hr>
<?php
if(@$_GET['t']==3 && @$_GET['post']){
$section20=@$_GET['s'];
$category20=@$_GET['sub'];
$query20="SELECT * FROM videos WHERE category='$category20' order by id desc";
$display_count=1;
$result20=$conn->query($query20);

   echo "<strong><h2>Related Videos</h2></strong>"; 
while($row20=$result20->fetch_assoc()){
    if($display_count<=6){
?>
<div class="row">
    <div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row20['id']; ?>"><?php echo $row20['title']; ?></a></strong><h4>
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row20['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Logos/Thumbs/'.$row20['thumb'];?>"></a>
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
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row21['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Logos/Featured_images/'.$row21['featured_image'];?>"></a>
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
$display_count=1;
$result22=$conn->query($query22);
echo '<strong><h2>Also see</h2></strong><br><br>'; 
while($row22=$result22->fetch_assoc()){
    if($display_count<=5){
?>
<div class="row">
    <div class="col-lg-12"><h4><strong><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row22['id']; ?>"><?php echo $row22['title']; ?></a></strong><h4>
    <a href="<?php echo $_SERVER['REQUEST_URI'] ?>&post=<?php echo $row22['id']; ?>"><img style="width: 270px;height: 220px" src="<?php echo '/INOGIT/Resources/Storage/Logos/Featured_images/'.$row22['featured_image'];?>"></a>
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
  <hr>

 
<style type="text/css">
   

</style>


<?php
if(isset($_POST['sub_ex1'])){

}




?>
<?php include('Public/views/_footer.php'); ?>




   