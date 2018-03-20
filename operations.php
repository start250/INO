
<?php @$url=$_SESSION["url"];
include('DBfiles/connectDB.php');
?>

<?php
if (@$_SESSION['admin']==md5($ad)||$_SESSION['author']==md5($au)) {
  ?>
  <div class="tab">
  <ul id="action">
    <li style="<?php if(@$_GET['action']=="home") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=home'?>">Home</a></li>
    <li style="<?php if(@$_GET['action']=="editor") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=editor'?>">Editor</a></li>
    <li style="<?php if(@$_GET['action']=="upload_files") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=upload_files'?>">Upload Files</a></li>
    <li style="<?php if(@$_GET['action']=="manage_posts") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=manage_posts'?>">Manage Books</a></li>
    <?php
if (@$_SESSION['admin']==md5($ad)) {
  ?>
    <li style="<?php if(@$_GET['action']=="manage_authors") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=manage_authors'?>">Manage Authors</a></li>
   <?php
}
?> 
</ul>
</div>
<?php
}
?>

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
else if(@$_GET['action']=="manage_authors")
  include('Op/manage_authors.php');
else
  include("Op/home.php");
?>
  
</div>