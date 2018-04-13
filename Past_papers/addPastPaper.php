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


<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(isset($_SESSION['level'])&&$_SESSION['level']==='admin'&&isset($_GET['id'])) { 
  if(mysqli_query($conn,"DELETE from past_papers where id='".$_GET['id']."'")){
    if($_GET['Adelete']!=='')
    $Afile = $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$_GET['Adelete'];
    else  $Afile='nofiletodelete';
    if($_GET['Qdelete']!=='')
    $Qfile = $_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$_GET['Qdelete'];
    else  $Qfile='nofiletodelete';
    
    if (!unlink($Qfile)) {
        ?>
        <div class="alert alert-danger">
          Error deleting questions.
      </div>
        <?php 
      }
    else
      {
        if (!unlink($Afile)) {

          ?>
          <div class="alert alert-info">
          Info: Answers file not found.
        </div>
          <?php 
        }
        ?>
        <div class="alert alert-success">
        Deleted paper successfully.
      </div>
        <?php  
      }
  }else{
    ?>
        <div class="alert alert-danger">
        Error deleting book. Try again.
      </div>
        <?php  
  }

}
if (isset($_POST['search_post_btn'])) {
	$search_post=trim($_POST['search_post_text']);
}


if (@$search_post!=''&&@$_SESSION['level']=='admin') {
$query=mysqli_query($conn,"SELECT * from past_papers where title LIKE '%$search_post%' OR added_by LIKE '%$search_post%'") or die('Failed to search '.mysqli_error());
}
elseif (@$search_post!=''&&@$_SESSION['level']=='author') {
	$query=mysqli_query($conn,"SELECT * from past_papers where title LIKE '%$search_post%'  added_by LIKE '%$search_post%' AND added_by='".$_SESSION['username']."'") or die('Failed to search '.mysqli_error());
}
elseif(@!$search_post&&@$_SESSION['level']==='admin')
{
	$query=mysqli_query($conn,"SELECT * from past_papers");
}
elseif (@!$search_post&&$_SESSION['level']==='author') {
	$query=mysqli_query($conn,"SELECT * from past_papers where added_by='".$_SESSION['username']."'") or die('Failed to search '.mysqli_error());
}
?>

  <br><br>
      <div class="row">
  <div class="col-md-8">
    <h2>Available Papers.</h2>
    <div class="search-container">
    <form action="" method="post">
      <input type="text" placeholder="Search post.." name="search_post_text" style="width: 75%;">
      <button type="submit" name="search_post_btn" style="width: 20%;"><i class="fa fa-search"></i></button>
    </form>
  </div>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th> 
        <th>Paper</th> 
      </tr>
    </thead>
    <tbody>
<?php

while ($row=mysqli_fetch_array($query)) { 
?>
      <tr>
        <td><?php echo $row['title']; ?></td> 
         <td style="font-size: 25px;"> <i onclick="deletetask('<?= $row['title'] ?>',<?= $row['id'] ?>,'<?= $row['Alink'] ?>','<?= $row['Qlink'] ?>')" class="fa fa-trash"></i> 
      </tr>
     
      <?php
}
?><?php
if (mysqli_num_rows($query)==0) {
  ?>
  <tr>
       
        <td colspan="4">You haven't any past papers.</td>
      </tr>
  <?php
}
      ?>

    </tbody></table></div>
  <div class="col-md-4">
     </div>
</div>
 <script>
function deletetask(title,id,Alink,Qlink) {
    
    if (confirm('Do you really want to delete this paper '+title+' and its answers ?') == true) {
   window.location='dashboard.php?section=<?php echo $_GET['section']; ?>&action=<?= $_GET['action']; ?>&id='+id+'&Adelete='+encodeURIComponent(Alink)+'&Qdelete='+encodeURIComponent(Qlink);
    } 
  
}
</script>