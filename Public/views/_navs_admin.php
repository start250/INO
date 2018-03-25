
<style type="text/css">
  ul li{
padding: 15px;
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
      
      </ul>
      <!--<form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    
    </div>
</nav>
