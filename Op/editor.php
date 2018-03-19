
<form method="POST">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" id="title" style="" placeholder="Title..." />
         <?php if($_GET['section']=="academic"){
         	echo '<select name="level" onchange="setLevel()" id="select_level" class="selectAcademicInfo">
         	<option>Select Level...</option>
    <option value="nursary">Nursary</option>
    <option value="primary">Primary</option>
    <option value="high school">High School</option>
    <option value="other info">Other Info</option>
</select>&nbsp;
<select name="topic" id="topic" onchange="setYa()" class="selectAcademicInfo">
<option>Select Topic...</option>
</select>
<select name="topic" id="year" class="selectAcademicInfo">
</select>';
         }?>
        <textarea class="ckeditor" name="editor"></textarea>
    </div>
    <center><input type="submit" name="publish" value="publish" class="btn btn-default" style="border:2px solid #c2c2a3;"></center>
</form>
<style>
</style>
<script type="text/javascript">
  function setLevel(){
     level=document.getElementById("select_level").value;
     if(level=="nursary"){
       topic="<option>baby</option><option>middle</option><option>top class</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="primary"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>set</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
      else if(level=="high school"){
       topic="<option>kinyarwanda</option><option>english</option><option>francais</option><option>gp</option><option>math</option><option>biology</option><option>chemistry</option><option>history</option><option>computer</option><option>kiswahili</option><option>literature</option><option>economie</option><option>entrepreneurship</option><option>geography</option>";
       topic_s=document.getElementById("topic");
       topic_s.innerHTML=topic;
     }
     else if(level=="other info"){
     	topic="<option>link(s)</option><option>Tips to Win Scholaship</option><option>Now open</option>";
     	topic_s=document.getElementById("topic");
     	topic_s.innerHTML=topic;
     }


  }

function setYa(){
   topic1=document.getElementById("topic").value;
   level=document.getElementById("select_level").value;
  if(topic1=="economie" || topic1=="literature"){
    year1="<option>4</option><option>5</option><option>6</option>"
  year_s=document.getElementById("year");
  year_s.innerHTML=year1;
}
else if(level!="nursary"){
  year1="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>"
  year_s=document.getElementById("year");
  year_s.innerHTML=year1;
}

else
  document.getElementById("year").innerHTML=""
}
</script>
<?php  
echo '<script type="text/javascript" src="ckeditor/ckeditor.js"></script>';
 ?>
<style type="text/css">
.selectAcademicInfo{
    padding: 5px 8px;
    border: 2px solid #c2c2a3;
    box-shadow: none;
    
  }
</style>

