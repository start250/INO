<?php
include($_SERVER['DOCUMENT_ROOT'].'/INOGIT'.'/DBfiles/connectDB.php');
?>
<div class="row">
  <div class="col-lg-6">
  	<form method="POST" action="" enctype="multipart/form-data">
  		<input type="file" name="fileToUpload" class="form-control"><br>
  		<select name="position" class="form-control">
  			<option>Master Logo</option>
  			<option>Academic Logo</option>
  			<option>Business Logo</option>
  			<option>Road Logo</option>
  			<option>Health Logo</option>
  			<option>English Logo</option>
  			<option>Culture Logo</option>
  			<option>Quiz Logo</option>
        <option>Academic_news</option>
        <option>Explore_Rwandan_Education</option>
        <option>Past_Papers</option>
        <option>Scholarship</option>
        <option>Library</option>
        <option>Business_Opportunities</option>
        <option>Business_Advice</option>
        <option>Business_News</option>
        <option>Biographies_Of_Successful_Business_Men</option>
        <option>Meet_With_Business_Mentors</option>
        <option>Nutritions</option>
        <option>Traditional_Medecine</option>
        <option>Serious_Deseases</option>
        <option>Doctor_Advice</option>
        <option>Health_News</option>
        <option>Ask_Doctor</option>
        <option>Igazeti</option>
        <option>Ibibazo_nibisubizo</option>
        <option>Ibyapa</option>
        <option>Amakuru</option>
        <option>Baza_Mwarimu</option>
        <option>For_Biginners</option>
        <option>For_Intermediate</option>
        <option>Advanced_English</option>
        <option>Business_English</option>
        <option>Ask_Teacher</option>
        <option>Amateka_yu_Rwanda</option>
        <option>Imigani</option>
        <option>Ibisakuzo</option>
        <option>Kirazira_zumuco_Nyarwanda</option>
        <option>Baza_Sokuru</option>
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