<?php

include '../config/connect.php';

$sql = "SELECT * from user_main";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["role"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>