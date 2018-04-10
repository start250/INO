
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/INOGIT">
<img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php $query="SELECT * FROM logos WHERE position='Master'";
    $res = $conn->query($query);
    $row=$res->fetch_assoc(); echo $row['filename']; ?>">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/INOGIT">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/INOGIT/Quiz">Quiz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
</ul>
<ul class="navbar-nav ml-auto">
  <li>

    <form action="/INOGIT/index.php" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></li>
      
      <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['username'])){
    ?>
<li> &nbsp; &nbsp;<a href="/INOGIT/User"><i class="fa fa-user" aria-hidden="true"></i></span> <?=$_SESSION['username']?></a></li>
<li> &nbsp; &nbsp;<a href="/INOGIT/Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a></li>
</ul>
    <?php

}else{
    ?>
<li> &nbsp; &nbsp; <a href="/INOGIT/Register"><i class="fa fa-plus-circle" aria-hidden="true"></i></span> Sign Up</a> </li>
<li> &nbsp; &nbsp;<a href="/INOGIT/Login"><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</a></li>
</ul>
    <?php

}
 

?>

  </div>
</nav>

 