<style>
.logo{
	height: 40px;
	width:40px;
}
</style>

<div class="col-lg-4">
        <ul>
    <?php if(!@$_GET['s']) {?>        
        <li><a href="index.php?s=Academic"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Academic'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic</a></li>
    <li><a href="index.php?s=Business"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business</a></li>
    <li><a href="index.php?s=Road"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Road'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amategeko y'umuhanda</a></li>
    <li><a href="index.php?s=Health"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Health'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health</a></li>
    <li><a href="index.php?s=English"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">English</a></li>
    <li><a href="index.php?s=Culture"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Culture'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Umuco w'i Rwanda</a></li>
    <li><a href="index.php?s=Quiz"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Quiz'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Quiz</a></li>
<?php } 
else if(@$_GET['s']=="Academic"){ ?>
  <li><a href="index.php?s=Academic&sub=Library"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Library'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Library</a></li>
    <li><a href="index.php?s=Academic&sub=Scholarship"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Scholarship'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Scholarship</a></li>
    <li><a href="index.php?s=Academic&sub= Past Papers"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Past Papers'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">National Past Paper</a></li>
    <li><a href="index.php?s=Academic&sub=Explore Rwandan Education"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Explore Rwandan Education'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Explore Rwandan Education</a></li>
    <li><a href="index.php?s=Academic&sub=Academic news"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Academic news'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Academic news</a></li>
    

<?php } 
else if(@$_GET['s']=="Business"){
?>
<li><a href="index.php?s=Business&sub=Business_Opportunities&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business_Opportunities'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Opportunities</a></li>
    <li><a href="index.php?s=Business&sub=Business_Advice&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business Advice</a></li>
    <li><a href="index.php?s=Business&sub=Business_News&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business News</a></li>
    <li><a href="index.php?s=Business&sub=Biographies_Of_Successful_Business_Men&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Biographies_Of_Successful_Business_Men'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Biographies Of Successful Business Men</a></li>
    <li><a href="index.php?s=Business&sub= Meet With Business Mentors"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position=' Meet With Business Mentors'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Meet With Business Mentors</a></li>
    <?php
}
   else if(@$_GET['s']=="Health"){ ?>
    <li><a href="index.php?s=Health&sub=Nutritions&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Nutritions'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Nutritions</a></li>
    <li><a href="index.php?s=Health&sub=Traditional_Medecine&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Traditional_Medecine'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Traditional Medecine</a></li>
    <li><a href="index.php?s=Health&sub=Serious_Deseases&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Serious_Deseases'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Serious Deseases</a></li>
    <li><a href="index.php?s=Health&sub=Doctor_Advice&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Doctor_Advice'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Doctor Advice</a></li>
    <li><a href="index.php?s=Health&sub=Health_News&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Health_News'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Health News</a></li>
    <li><a href="index.php?s=Health&sub=Ask_Doctor"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ask_Doctor'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask_Doctor</a></li>

   <?php

}
else if(@$_GET['s']=="Road"){
   ?>
   <li><a href="index.php?s=Road&sub=Igazeti&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Igazeti'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Igazeti</a></li>
    <li><a href="index.php?s=Road&sub=Ibibazo_nibisubizo&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibibazo_nibisubizo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibibazo n'Ibisubizo</a></li>
    <li><a href="index.php?s=Road&sub=Ibyapa&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibyapa'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibyapa</a></li>
    <li><a href="index.php?s=Road&sub=Amakuru&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Amakuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amakuru</a></li>
    <li><a href="index.php?s=Road&sub=Baza Mwarimu"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Baza Mwarimu'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Mwarimu</a></li>
<?php }
else if(@$_GET['s']=="English"){ ?>
    <li><a href="index.php?s=English&sub=For Biginners&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='For Biginners'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Biginners</a></li>
    <li><a href="index.php?s=English&sub=For Intermediates&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='For Intermediate'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">For Intermediate</a></li>
    <li><a href="index.php?s=English&sub=Advanced English&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Advanced English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Advanced English</a></li>
    <li><a href="index.php?s=English&sub=Business English&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Business English'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Business English</a></li>
    <li><a href="index.php?s=English&sub=Ask Teacher"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ask Teacher'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ask Teacher</a></li>
<?php
}
else if(@$_GET['s']=="Culture"){
?>
<li><a href="index.php?s=Culture&sub=Amateka yu Rwanda&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Amateka yu Rwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Amateka y'u Rwanda</a></li>
    <li><a href="index.php?s=Culture&sub=Imigani&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Imigani'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Imigani</a></li>
    <li><a href="index.php?s=Culture&sub=Ibisakuzo&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Ibisakuzo'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Ibisakuzo</a></li>
    <li><a href="index.php?s=Culture&sub=Kirazira z'umuco Nyarwanda&t=1"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Kirazira zumuco Nyarwanda'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Kirazira z'umuco Nyarwanda</a></li>
    <li><a href="index.php?s=Culture&sub=Baza Sokuru"><img src="Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Baza Sokuru'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">Baza Sokuru</a></li>
<?php
}

?>
</ul>
</div>
<br><br>