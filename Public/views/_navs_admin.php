<nav class="navbar sidebar" role="navigation" id="sidebar">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">INO Ltd</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active" style="background-color:#ebebe0;"><a href="dashboard.php"><i></i>Dashboard</a></li>
				<li <?php if(@$_GET['section']=='academic') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=academic"><i class="fas fa-book"></i> Academic</a></li>
				<li <?php if(@$_GET['section']=='eng_class') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=eng_class"><i class="fas fa-language"></i> English Class</a></li>
				<li <?php if(@$_GET['section']=='rules_road') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=rules_road"><i class="fas fa-taxi"></i> Rules of Road</a></li>
				<li <?php if(@$_GET['section']=='business') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=business"><i class="fas fa-briefcase"></i> Business</a></li>
				<li <?php if(@$_GET['section']=='health') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=health"><i class="fas fa-medkit"></i> Health</a></li>
				<li <?php if(@$_GET['section']=='culture') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=culture"><i class="fas fa-leaf"></i> Culture</a></li>
				<li <?php if(@$_GET['section']=='test') echo 'style="background-color: #ebebe0";' ?>><a href="dashboard.php?section=test"><i class="fas fa-question"></i>Test(s)</a></li>				
			</ul>
		</div>
	</div>
</nav>