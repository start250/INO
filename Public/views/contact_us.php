<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Public/views/_nav.php');
?>
<center><form class="form-contact" id="ask_form" method="POST">

<input type="text" name="names" class="form-control" placeholder="Your name"><br>
<input type="text" name="email" class="form-control" placeholder="Your Email address"><br>
<input type="text" name="phone" class="form-control" placeholder="Your phone number (optional)"><br>
<input type="text" name="location" class="form-control" placeholder="Location"><br>
<textarea cols="form-control" placeholder="Type your message here.." id="msg"></textarea><br>
<button type="submit" class="form-control btn-primary">Submit</button>
</form></center>


<style type="text/css">
	#msg{
		width: 100%;
		height: 130px;
	}
	.form-contact{
		width: 40%;
	}

</style>


<?php
require_once('_footer.php');

?>