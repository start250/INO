<?php 
include('C:\xampp\htdocs\INOGIT\DBfiles\connectDB.php');
echo "<h2> Books in ".$_SESSION["section"]." section </h2>";

$sql = "SELECT * FROM Books WHERE section='".$_SESSION["section"]."'";
  
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        ?>

<div class="card bg-info w-75">
  <div class="card-body">
    <h5 class="card-title"><?= $row["title"]?></h5>
    <p class="card-text"><?= $row["description"]?></p>
    <a target="_blank" href="/INOGIT/Public/views/show.php?book_link=<?=$row["book_link"]?>" class="btn btn-primary">Show Book</a>
  </div>
</div>

    <?php } ?>