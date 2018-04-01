
<?php @$url=$_SESSION["url"];
include('DBfiles/connectDB.php');
?>

<?php

if (isset($_SESSION['admin'])||isset($_SESSION['author'])) {
  ?>
  <div class="tab">
  <ul id="action">
    <li style="<?php if(@$_GET['action']=="home") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=home'?>">Home</a></li>
    <li style="<?php if(@$_GET['action']=="editor") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=editor'?>">Post</a></li>
    <li style="<?php if(@$_GET['action']=="upload_files") echo 'background-color: #ebebe0;'?>"><a href="<?php echo ''.@$url.'&action=upload_files'?>">Upload Documents</a></li>
    <li style="<?php if(@$_GET['action']=="manage_books") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=manage_books'?>">Manage Books</a></li>
    <li style="<?php if(@$_GET['action']=="manage_posts") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=manage_posts'?>">Manage Posts</a></li>
    <li style="<?php if(@$_GET['action']=="upload_videos") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=upload_videos'?>">Upload Videos</a></li>
    <?php if(@$_GET['section']=="academic") {?><li style="<?php if(@$_GET['action']=="upload_files_lib") echo 'background-color: #ebebe0';?>"><a href="<?php echo ''.@$url.'&action=upload_files_lib'?>">Upload Files Library</a></li><?php }?>
    <?php
if (@$_SESSION['admin']==$ad) {
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
else if(@$_GET['action']=="upload_videos" && @$_GET['section']!="academic")
  include('Op/upload_videos.php');
else if(@$_GET['action']=="upload_videos" && @$_GET['section']=="academic")
  include('Op/academic_videos_upload.php');
else if(@$_GET['action']=="manage_books")
  include('Op/manage_books.php');
else if(@$_GET['action']=="upload_files_lib")
  include('Op/upload_files_lib.php');
else
  include("Op/home.php");
?>
  
</div>