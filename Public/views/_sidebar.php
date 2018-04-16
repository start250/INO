<style>
.logo{
	height: 40px;
    width:40px;
    
}
</style>
 
        <ul>
    <?php if(!@$_GET['s']) {?>        
        <li><a href="/INOGIT/?s=Academic"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Academic'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic</a></li>
    <li><a href="/INOGIT/?s=Business"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business</a></li>
    <li><a href="/INOGIT/?s=Road"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Road'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amategeko y'umuhanda</a></li>
    <li><a href="/INOGIT/?s=Health"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Health'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health</a></li>
    <li><a href="/INOGIT/?s=English"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">English</a></li>
    <li><a href="/INOGIT/?s=Culture"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Culture'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Umuco w'i Rwanda</a></li>
    <li><a href="/INOGIT/?s=Quiz"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Quiz'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Quiz</a></li>
<?php } 
else if(@$_GET['s']=="Academic"){ ?>
  <li><a href="/INOGIT/?s=Academic&sub=Library&lib_Cat=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Library'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Library</a></li>
    <li><a href="/INOGIT/?s=Academic&sub=Scholarship&sc=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Scholarship'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Scholarship</a></li>
    <li><a href="/INOGIT/?s=Academic&sub=Past Papers"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Past Papers'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">National Past Paper</a></li>
    <li><a href="/INOGIT/?s=Academic&sub=Explore Rwandan Education"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Explore Rwandan Education'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Explore Rwandan Education</a></li>
    <li><a href="/INOGIT/?s=Academic&sub=Academic news&t=2"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Academic news'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic news</a></li>
    

<?php } 
else if(@$_GET['s']=="Business"){
?>
<li><a href="/INOGIT/?s=Business&sub=Business Opportunities&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business Opportunities'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Opportunities</a></li>
    <li><a href="/INOGIT/?s=Business&sub=Business Advice&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Advice</a></li>
    <li><a href="/INOGIT/?s=Business&sub=Business News&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business News</a></li>
    <li><a href="/INOGIT/?s=Business&sub=Biographies Of Successful Business Men&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Biographies Of Successful_Business Men'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Biographies Of Successful Business Men</a></li>
    <li><a href="/INOGIT/?s=Business&sub=Meet With Business Mentors"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position=' Meet With Business Mentors'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Meet With Business Mentors</a></li>
    <?php
}
   else if(@$_GET['s']=="Health"){ ?>
    <li><a href="/INOGIT/?s=Health&sub=Nutritions&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Nutritions'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Nutritions</a></li>
    <li><a href="/INOGIT/?s=Health&sub=Traditional Medecine&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Traditional Medecine'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Traditional Medecine</a></li>
    <li><a href="/INOGIT/?s=Health&sub=Serious Deseases&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Serious Deseases'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Serious Deseases</a></li>
    <li><a href="/INOGIT/?s=Health&sub=Doctor Advice&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Doctor Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Doctor Advice</a></li>
    <li><a href="/INOGIT/?s=Health&sub=Health News&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Health News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health News</a></li>
    <li><a href="/INOGIT/?s=Health&sub=Ask Doctor"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ask Doctor'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask Doctor</a></li>

   <?php

}
else if(@$_GET['s']=="Road"){
   ?>
   <li><a href="/INOGIT/?s=Road&sub=Igazeti&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Igazeti'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Igazeti</a></li>
    <li><a href="/INOGIT/?s=Road&sub=Ibibazo nibisubizo&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibibazo nibisubizo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibibazo n'Ibisubizo</a></li>
    <li><a href="/INOGIT/?s=Road&sub=Ibyapa&t=2"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibyapa'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibyapa</a></li>
    <li><a href="/INOGIT/?s=Road&sub=Amakuru&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Amakuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amakuru</a></li>
    <li><a href="/INOGIT/?s=Road&sub=Baza Mwarimu"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Baza Mwarimu'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Mwarimu</a></li>
<?php }
else if(@$_GET['s']=="English"){ ?>
    <li><a href="/INOGIT/?s=English&sub=For Biginners&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='For Biginners'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Biginners</a></li>
    <li><a href="/INOGIT/?s=English&sub=For Intermediates&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='For Intermediate'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Intermediate</a></li>
    <li><a href="/INOGIT/?s=English&sub=Advanced English&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Advanced English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Advanced English</a></li>
    <li><a href="/INOGIT/?s=English&sub=Business English&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business English</a></li>
    <li><a href="/INOGIT/?s=English&sub=Ask Teacher"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ask Teacher'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask Teacher</a></li>
<?php
}
else if(@$_GET['s']=="Culture"){
?>
<li><a href="/INOGIT/?s=Culture&sub=Amateka yu Rwanda&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Amateka yu Rwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amateka y'u Rwanda</a></li>
    <li><a href="/INOGIT/?s=Culture&sub=Imigani&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Imigani'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Imigani</a></li>
    <li><a href="/INOGIT/?s=Culture&sub=Ibisakuzo&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibisakuzo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibisakuzo</a></li>
    <li><a href="/INOGIT/?s=Culture&sub=Kirazira z'umuco Nyarwanda&t=1"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Kirazira zumuco Nyarwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Kirazira z'umuco Nyarwanda</a></li>
    <li><a href="/INOGIT/?s=Culture&sub=Baza Sokuru"><img src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Baza Sokuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Sokuru</a></li>
<?php
}

?>
</ul>  
<br><br><br>




<!-- Popular Posts-->
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT/DBfiles/connectDB.php'); 

$sql = "SELECT * FROM posts ORDER BY id DESC";
  
    $result = $conn->query($sql);
    ?>
    <br><br>
    <div class="container">
    <h3>Recent posts...</h3>
    <br><hr>
    <?php
    $POSTc=1;
      while($row = $result->fetch_assoc()) {
         if($POSTc<=5){
        ?>

<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h5><strong><a href="/INOGIT/Post?post=<?=$row['id']?>"><?=$row['title']?></a></strong></h5>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="/INOGIT/Post?post=<?=$row['id']?>" class="thumbnail">
            <img  style="
 object-fit: cover;
 width:100%;
  height:200px" src="/INOGIT/Resources/Storage/Featuredimgs/<?php
                     $filename = $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Featuredimgs/'.$row['featured_image'];
                     if (file_exists($filename)) {
                         echo $row['featured_image'];
                     } else {
                         echo 'Default.png';
                     } 
                     
                     
                     
                     ?>" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
        <?=$row['excerpt']?>
         </p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
        <i class="fa fa-user" aria-hidden="true"></i> by <a href="#"><?=$row['author']?></a> 
         |<i class="fa fa-tags"></i>Section : <a href="#"><span class=""><?=$row['section']?></span></a> 
        </p>
      </div>
    </div>
  </div>
</div>
<hr>


        <?php } $POSTc++; } ?>
      </div>