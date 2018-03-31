<center><form class="form-contact" id="ask_form" method="POST">
	<?php  
      $t=@$_GET['sub'];
      if($t=="Ask_Teacher"){
	?>
    <h2><i class="fa fa-question-circle"></i>Ask Teacher</h2>
    <?php }
   else if($t=="Ask_Doctor"){
    ?>
    <h2><i class="fa fa-question-circle"></i>Ask Doctor</h2>
<?php
}
else if($t=="Baza_Sokuru"){
?>
<h2><i class="fa fa-question-circle"></i>Baza Sokuru</h2>
<?php
}
else if($t=="Baza_Mwarimu"){
?>
<h2><i class="fa fa-question-circle"></i>Baza mwalimu</h2>
<?php
}
?>
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


</style>