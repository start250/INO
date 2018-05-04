<?php 
function updateViews($table,$id,$conn){

$table=mysqli_real_escape_string($conn,$table);
$id=mysqli_real_escape_string($conn,$id);

$query = "UPDATE $table
          SET views=views+1 
         WHERE id='$id'";

if ($conn->query($query) === TRUE) {
    
} else {
    echo "Error updating... " . $query . "<br>" . $conn->error;
}

}

?> 
