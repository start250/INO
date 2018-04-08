<?php  
 
function updateViews($table,$col,$id,$conn){

$table=mysqli_real_escape_string($conn,$table);
$id=mysqli_real_escape_string($conn,$id);

$query = "UPDATE $table SET downloads=downloads+1  WHERE BINARY $col = '$id'";
 
if ($conn->query($query) === TRUE) {
 // echo "<br>";
} else {
    echo "Error Mars2342..." ;//. $query . "<br>" . $conn->error;
}

} 


