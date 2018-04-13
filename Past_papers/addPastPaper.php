<?php 


if(isset($_POST['upload'])){ 
 

//prepare questions upload
  $qname=basename($_FILES["Qupload"]["name"]);
  list($partName,$extension)=explode('.', $qname);
$qname=urlencode($partName."-q-".time().".".$extension);
  $q_target_path .= $qname;  

//prepare answers upload   
if(!empty($_FILES["Aupload"]["name"])){
$aname=basename($_FILES["Aupload"]["name"]);
list($partName,$extension)=explode('.', $aname);
$aname=urlencode($partName."-a-".time().".".$extension);
$a_target_path .= $aname;  
} 
//actual upload
if(!move_uploaded_file($_FILES["Qupload"]["tmp_name"],
 $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$q_target_path))    
  die('fatal error: Could not save questionaire. Contact developper.');
  
if(!empty($_FILES["Aupload"]["name"])&&!move_uploaded_file($_FILES["Aupload"]["tmp_name"], 
$_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$a_target_path))
die('fatal error: Could not save Answers. Contact developper.');

//save info to db
$title=mysqli_real_escape_string($conn,$_POST['title']);
$grade=mysqli_real_escape_string($conn,$_POST['grade']); 
$qlink=mysqli_real_escape_string($conn,$qname);
$alink=mysqli_real_escape_string($conn,$aname);  
$year=mysqli_real_escape_string($conn,$_POST['year']); 

$sql = "INSERT INTO past_papers (title, grade, qlink, alink, paper_year) 
  
                   VALUES ('$title', '$grade', '$qlink', '$alink', '$year')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
   window.location = "/INOGIT/dashboard.php"
</script>';
} else {
    echo "Error ". $sql . "<br>" . $conn->error;
}

}  

?>


<form method="POST" enctype="multipart/form-data">
  <div class="form-group row">
  <label for="grade"  class="col-sm-2 col-form-label col-form-label-lg">Select  grade</label>
    <div class="col-sm-10">
    <select required class="form-control" name="grade" id="grade">
      <option>P6</option>
      <option>S3</option>
      <option>S6</option>
      <option>Other Papers</option>
    </select>
</div>
  </div>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input required  type="text" class="form-control" name="title" id="title" placeholder="eg: Mathematics">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label for="year" class="col-sm-2 col-form-label">Year (format: YYYY)</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" name="year" id="year" placeholder="eg: 2015">
    </div>
  </div>

  <div class="form-group row">
    <label for="qfile"  class="col-sm-2 col-form-label">Questions(PDF)</label>
    <div class="col-sm-10">
    <input required type="file" name="Qupload" class="form-control-file" id="qfile">
    </div>
  </div>

   <div class="form-group row">
    <label for="afile"  class="col-sm-2 col-form-label">Answers (PDF)</label>
    <div class="col-sm-10">
    <input type="file" name="Aupload" class="form-control-file" id="afile">
    </div>
  </div>
   <input type="submit"name="upload" class="btn btn-primary">
</form>