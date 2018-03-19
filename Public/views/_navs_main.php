
<style type="text/css">
  li{
padding: 3px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-size:100%;<?php
if(@$_GET['section']=='rules_road'){
  echo "background-image: url('images/road.jpg');";
}
if(@$_GET['section']=='eng_class'){
  echo "background-image: url('images/english.jpg');";
}
?>">
    <a class="navbar-brand" href="#" style="color: black;">Iga Neza</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">

      <span class="navbar-toggler-icon"></span>
    
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">

       <li <?php if(!@$_GET['section']) echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php"><i class="fa fa-home"></i>Home</a></li>
        <li <?php if(@$_GET['section']=='academic') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=academic"><i class="fa fa-book"></i> Academic</a></li>
        <li <?php if(@$_GET['section']=='eng_class') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=eng_class"><i class="fa fa-language"></i> English Class</a></li>
        <li <?php if(@$_GET['section']=='rules_road') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=rules_road"><i class="fa fa-taxi"></i> Rules of Road</a></li>
        <li <?php if(@$_GET['section']=='business') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=business"><i class="fa fa-briefcase"></i> Business</a></li>
        <li <?php if(@$_GET['section']=='health') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=health"><i class="fa fa-medkit"></i> Health</a></li>
        <li <?php if(@$_GET['section']=='culture') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=culture"><i class="fa fa-leaf"></i> Culture</a></li>
        <li <?php if(@$_GET['section']=='test') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=test"><i class="fa fa-question"></i>Test(s)</a></li>

      </ul>
      <ul class="navbar-nav float-right">
      <li class="nav-item">
          <a class="float-right nav-link" href="#" style="color: black;">Log In</a>
        </li>
        <li class="nav-item">
          <a class="float-right nav-link" href="#" style="color: black;">Sign Up</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>
