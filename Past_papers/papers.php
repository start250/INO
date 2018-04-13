<?php
if(isset($_SESSION['filter'])&&!empty($_SESSION['filter']['cat'])){
?>

<br>
         <div class="alert alert-info">
             Results for:  <?php

echo "  >>  ".$_SESSION['filter']['cat'];
if(!empty($_SESSION['filter']['course']))
echo "  >>  ".$_SESSION['filter']['course'];
if(!empty($_SESSION['filter']['year']))
echo "  >>  ".$_SESSION['filter']['year'];
            ?>
                </div>


<?php
}
      
      if(isset($_POST['year'])){
        $sql = "SELECT * FROM past_papers where grade='".$_SESSION['filter']['cat']."' and paper_year='".$_SESSION['filter']['year']."' and title LIKE '%".$_SESSION['filter']['course']."%'";  
     }else  if(isset($_POST['course'])){
        $sql = "SELECT * FROM past_papers where grade='".$_SESSION['filter']['cat']."' and title LIKE '%".$_SESSION['filter']['course']."%'";  
 
     }else if(isset($_POST['cat'])){
        $sql = "SELECT * FROM past_papers where grade='".$_SESSION['filter']['cat']."'";
     }else{
        $sql = "SELECT * FROM past_papers LIMIT 25";
     }
 
 
    $result = $conn->query($sql);
    if (mysqli_num_rows($result)==0){
        ?>
        <div class="alert alert-danger">
            No Past Papers found
    </div>
        <?php
    }
        if(isset($_SESSION['filter']['cat'])&&$_SESSION['filter']['cat']==='p6'){
         
        ?>
       <form method="POST">
            <center>
                <button type="submit" name="course" class="SubCat" value="Mathematics">Mathematics</button>
                <button type="submit" name="course" class="SubCat" value="Kinyarwanda">Kinyarwanda</button>
                <button type="submit" name="course" class="SubCat" value="English">English</button>
                <button type="submit" name="course" class="SubCat" value="Social Studies">Social Studies</button> 
                <button type="submit" name="course" class="SubCat" value="all">All</button> 
            </center>
        </form>
        <?php
           if(isset($_SESSION['filter']['course'])&&$_SESSION['filter']['course']!=''){
            ?>
            <form method="POST">
<center>
<?php
for($i=2005;$i<=date('Y');$i++){
?> <button type="submit"  name="year" class="SubCat" value="<?=$i?>"><?=$i?></button>                              
<?php
}
?> </center>
        </form>


            <?php
            }
    }else  if(isset($_SESSION['filter']['cat'])&&$_SESSION['filter']['cat']==='s3'){
         
            ?>
           <form method="POST">
                <center>
                    <button type="submit" name="course" class="SubCat" value="Mathematics">Mathematics</button>
                    <button type="submit" name="course" class="SubCat" value="Kinyarwanda">Kinyarwanda</button>
                    <button type="submit" name="course" class="SubCat" value="English">English</button>
                    <button type="submit" name="course" class="SubCat" value="Geography">Geography</button> 
                    <button type="submit" name="course" class="SubCat" value="History">History</button>  
                    <button type="submit" name="course" class="SubCat" value="Chemistry">Chemistry</button> 
                    <button type="submit" name="course" class="SubCat" value="Biology">Biology</button> 
                    <button type="submit" name="course" class="SubCat" value="all">All</button> 
                </center>
            </form>
            <?php
               if(isset($_SESSION['filter']['course'])&&$_SESSION['filter']['course']!=''){
                ?>
                <form method="POST">
    <center>
    <?php
    for($i=2005;$i<=date('Y');$i++){
    ?> <button type="submit"  name="year" class="SubCat" value="<?=$i?>"><?=$i?></button>                              
    <?php
    }
    ?> </center>
            </form>
    
    
                <?php
                }
            }else  if(isset($_SESSION['filter']['cat'])&&$_SESSION['filter']['cat']==='s6'){
         
                ?>
               <form method="POST">
                    <center>
                        <button type="submit" name="course" class="SubCat" value="Mathematics">Mathematics</button>
                        <button type="submit" name="course" class="SubCat" value="Kinyarwanda">Kinyarwanda</button>
                        <button type="submit" name="course" class="SubCat" value="English">English</button>
                        <button type="submit" name="course" class="SubCat" value="Geography">Geography</button> 
                        <button type="submit" name="course" class="SubCat" value="History">History</button>  
                        <button type="submit" name="course" class="SubCat" value="Chemistry">Chemistry</button> 
                        <button type="submit" name="course" class="SubCat" value="Francais">Francais</button> 
                        <button type="submit" name="course" class="SubCat" value="Kiswahili">Kiswahili</button> 
                        <button type="submit" name="course" class="SubCat" value="Computer Science">Computer Science</button> 
                        <button type="submit" name="course" class="SubCat" value="all">All</button>   
                    </center>
                </form>
                <?php
                   if(isset($_SESSION['filter']['course'])&&$_SESSION['filter']['course']!=''){
                    ?>
                    <form method="POST">
        <center>
        <?php
        for($i=2005;$i<=date('Y');$i++){
        ?> <button type="submit"  name="year" class="SubCat" value="<?=$i?>"><?=$i?></button>                              
        <?php
        }
        ?> </center>
                </form>
      
                    <?php
                    }
                }
   
               
    while($row = $result->fetch_assoc()) { 
        ?>

 <br>

<div class=" row z-depth-1">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="background-color: white;">
                <div class="row">
                     
                    <div class="card border-success col-md-12">
                      <center>  <h4>
                            <?= $row["title"]."  ". $row["paper_year"]?>
                        </h4>
                 </center>
                      

                        
                        <button class="btn btn-info btn-xs" data-toggle="modal" onclick="getBookSrc(<?= $row['id']; ?>,'<?=$row['Qlink']?>');" data-target="#read_book_<?php echo $row['id']; ?>">
                            <i class="fa fa-book" aria-hidden="true"></i>
                           Questions</button><br> 
                            <button class="btn btn-success btn-xs" data-toggle="modal" onclick="getBookSrc('a<?= $row['id']; ?>','<?=$row['Alink']?>');" data-target="#read_book_a<?php echo $row['id']; ?>">
                            <i class="fa fa-book" aria-hidden="true"></i>
                           Answers </button><br>
                        <span id="er"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="read_book_<?php echo $row['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">
                    <?= $row["title"]?>
                </h4>
            </div>
            <div class="modal-body">
                <iframe id="frame<?= $row['id']; ?>" style="width: 100%; height: 500px;"></iframe>
                <a href="Resources/Storage/Books/<?php echo $row['Qlink'];?>" download class="btn btn-primary btn-xs">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    Download</a>
                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>

<div id="read_book_a<?php echo $row['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">
                    <?= $row["title"]?>
                </h4>
            </div>
            <div class="modal-body">
                <iframe id="framea<?= $row['id']; ?>" style="width: 100%; height: 500px;"></iframe>
                <a href="Resources/Storage/Books/<?php echo $row['Alink'];?>" download class="btn btn-primary btn-xs">
                    <i class="fa fa-download" aria-hidden="true"></i>
                    Download</a>
                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>
<?php } ?>



<script>
function getBookSrc(id,data){
  
        $("#frame"+id).attr("SRC", "Resources/Storage/Books/"+data);
 
}

</script> 