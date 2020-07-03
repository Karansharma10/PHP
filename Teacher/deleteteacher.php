<?php

include '../config/connect.php';
$id =$_REQUEST['id'];
$sql = "SELECT * FROM teacher WHERE id='$id'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo $r=$row['t_image'];
    }


  $path = "../images/$r";
  if(!unlink($path))
  {
    echo "Not Working";
  }
  else {
   echo "deleted";
  }



// sql to delete a record
$sql = "DELETE FROM teacher WHERE id='".$_GET['id']."'";
// $sql = "DELETE FROM user_main WHERE id='".$_GET['username']."'";


if ($conn->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    header('location:selectteacher.php');
} else {
    echo "Error deleting record: " . $conn->error;
}






$conn->close();
?>