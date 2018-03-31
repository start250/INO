<?php
$section13=@$_GET['s'];
$category13=@$_GET['sub'];
$query13="SELECT * FROM videos WHERE section='$section13' AND category='$category13'";
$display_count=1;
?>