<style type="text/css">
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 20px;
  /*font-family:  sans serif;*/
}
th {

    font-family: sans serif;
    
    color: red;

/*background-color:black;*/
    font-size: 21px;

}
  td {

    font-family: sans serif; 
    
    /*background-color: black;*/

	color:black;
    font-size: 19px;
    text-align: center;

}

a{
	color: black;
}

a:hover{
	color: red;
}

</style> 
 <?php
include '../config/connect.php';


$sql = "SELECT * FROM  class";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo"<table>

	<tr>

  <th>ID</th>
  <th>Class</th>
  <th>Subject</th>
  <th>Action</th>

	</tr>";


    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>".$row["id"]."</td><td>".$row["c_class"]."</td><td>".$row["c_subject"]."</td><td><a href ='updateclass.php?id=".$row['id']."'>Update</a>/<a href ='deleteclass.php?id=".$row['id']."'>Delete</a></td></tr>";
    
    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 