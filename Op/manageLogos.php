<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
?>
<div class="row">
  <div class="col-lg-6">
  	<form method="POST" action="" enctype="multipart/form-data">
  		<input type="file" name="fileToUpload" class="form-control"><br>
  		<select name="position" class="form-control">
  			<option>Master</option>
  			<option>Academic</option>
  			<option>Business</option>
  			<option>Road</option>
  			<option>Health</option>
  			<option>English</option>
  			<option>Culture</option>
  			<option>Quiz</option>
        <option>Academic news</option>
        <option>Explore Rwandan Education</option>
        <option>Past Papers</option>
        <option>Scholarship</option>
        <option>Library</option>
        <option>Business Opportunities</option>
        <option>Business Advice</option>
        <option>Business News</option>
        <option>Biographies Of Successful Business Men</option>
        <option>Meet With Business Mentors</option>
        <option>Nutritions</option>
        <option>Traditional Medecine</option>
        <option>Serious Deseases</option>
        <option>Doctor Advice</option>
        <option>Health News</option>
        <option>Ask Doctor</option>
        <option>Igazeti</option>
        <option>Ibibazo nibisubizo</option>
        <option>Ibyapa</option>
        <option>Amakuru</option>
        <option>Baza Mwarimu</option>
        <option>For Biginners</option>
        <option>For Intermediate</option>
        <option>Advanced English</option>
        <option>Business English</option>
        <option>Ask Teacher</option>
        <option>Amateka yu Rwanda</option>
        <option>Imigani</option>
        <option>Ibisakuzo</option>
        <option>Kirazira zumuco Nyarwanda</option>
        <option>Baza Sokuru</option>
  		</select><br>
  		<button type="submit" class="form-control btn-info" name="uploadLogo">Upload</button>
  	</form>
  </div>
  <div class="col-lg-6">
  	<h2>All Logos Here...</h2>
  	<?php
  	$query="SELECT * FROM logos";
  	$res = $conn->query($query);
  	while($row=$res->fetch_assoc()){
  	?>
  	<img class="logo" src="/INOGIT/Resources/Storage/Logos/<?php echo $row['filename']; ?>"><br>
  	<label><?php echo $row['position']; ?></label><br>
  	<hr>
  	<?php } ?>
  </div>
</div>
<?php
if(isset($_POST['uploadLogo'])){
	$target_path =$_SERVER['DOCUMENT_ROOT']."/INOGIT/Resources/Storage/Logos/";
$position=mysqli_escape_string($conn,$_POST['position']);
$fullName=basename( $_FILES["fileToUpload"]["name"]);
  list($partName,$extension)=explode('.', $fullName);
$logo_name=urlencode($partName."-".time().".".$extension);
  $target_path .= $logo_name;  
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path)) {  
    $sql="UPDATE logos SET filename='$logo_name' WHERE position='$position'";
    if($conn->query($sql) === TRUE)
    echo "File uploaded successfully!"; 
}
else
	echo "eror";
}
    ?>