
<style type="text/css">
  li{
padding: 3px;
}
. .search-container {
  float: right;
}

.search-container input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background-color: #0066ff;
  color: white;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
.search-container {
    float: none;
  }
  .search-container a, .search-container input[type=text], .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .search-container input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-size:100%; background-color: white; margin-bottom:20px;">
    <a class="navbar-brand" href="#" style="color: black;">Iga Neza</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">

      <span class="navbar-toggler-icon" style="background-color: black; padding: 3px;"></span>
    
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">

       
        <li <?php if(@$_GET['section']=='academic'||!@$_GET['section']) echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=academic"><i class="fa fa-book"></i>&nbsp; Academic</a></li>
        <li <?php if(@$_GET['section']=='eng_class') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=eng_class"><i class="fa fa-language"></i>&nbsp; English Class</a></li>
        <li <?php if(@$_GET['section']=='rules_road') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=rules_road"><i class="fa fa-taxi"></i>&nbsp; Rules of Road</a></li>
        <li <?php if(@$_GET['section']=='business') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=business"><i class="fa fa-briefcase"></i>&nbsp; Business</a></li>
        <li <?php if(@$_GET['section']=='health') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=health"><i class="fa fa-medkit"></i>&nbsp; Health</a></li>
        <li <?php if(@$_GET['section']=='culture') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=culture"><i class="fa fa-leaf"></i>&nbsp; Culture</a></li>
        <li <?php if(@$_GET['section']=='test') echo 'style="border-bottom: 3px solid #0066ff;"'; ?>><a href="dashboard.php?section=test"><i class="fa fa-question"></i>&nbsp; Test(s)</a></li>

      </ul>
      <ul class="navbar-nav float-right">
      <?php
if (isset($_SESSION['admin'])) {
?>
 <li class="nav-item">
          <a class="float-right nav-link" href="Admin/logout.php" style="color: black; font-weight: bold;">Logout</a>
        </li>
<?php
}
      ?>
       
      </ul>
      <!--<form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
    </div>
</nav>
