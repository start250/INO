<?php @$url=$_SESSION["url"]; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<div class="tab">
  <ul id="action">
    <li style="<?php if(@$_GET['action']=="home") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=home'?>">Home</a></li>
    <li style="<?php if(@$_GET['action']=="editor") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=editor'?>">Editor</a></li>
    <li style="<?php if(@$_GET['action']=="upload_files") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=upload_files'?>">Upload Files</a></li>
    <li style="<?php if(@$_GET['action']=="manage_posts") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=manage_posts'?>">Manage Posts</a></li>
</ul>
</div>


<div>
<?php
if(@$_GET['action']=="editor")
  include('Op/editor.php');
else if(@$_GET['action']=="upload_files")
  include('Op/upload_files.php');
else if(@$_GET['action']=="manage_files")
  include('Op/manage_files.php');
else if(@$_GET['action']=="manage_posts")
  include('Op/manage_posts.php');
else
  include("Op/home.php");
?>
  
</div>