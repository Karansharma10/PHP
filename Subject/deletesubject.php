<?php

include '../config/connect.php';
// sql to delete a record
$sql = "DELETE FROM subject WHERE id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    header('location:selectsubject.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>