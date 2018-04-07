<?php
  if(!isset($_SESSION)) { session_start(); }  
unset($_SESSION['author']);
unset($_SESSION['au']);
?>
<script type="text/javascript">location.href='login.php'</script>