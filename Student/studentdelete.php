<?php

include '../config/connect.php';
// for check user is loged in or not
if(!isset($_COOKIE['Admin'])){
  header('location:./login.php');
}
$id =$_REQUEST['id'];
$sql = "SELECT * FROM student WHERE id='$id'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo $r=$row['s_image'];
    }


  $path = "../images/$r";
  if(!unlink($path))
  {
    // echo "Not Working";
  }
  else {
  //  echo "deleted";
  }



// sql to delete a record
$sql = "DELETE FROM student WHERE id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully')</script>";
    header('location:viewallstudents.php');
} else {
    echo "Error deleting record: " . $conn->error;
}






$conn->close();
?>