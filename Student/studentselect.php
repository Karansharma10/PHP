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
// for check user is loged in or not
if(!isset($_COOKIE['Admin'])){
    header('location:./login.php');
  }

$sql = "SELECT * FROM  student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo"<table>
	<tr>
  <th>ID</th>
  <th>Registration</th>
  <th>Rollno</th>
  <th>Name</th>
  <th>Father name</th>
  <th>D.O.B</th>
  <th>Gender</th>
  <th>E-mail</th>
  <th>Phone no.</th>
  <th>Batch</th>
  <th>Class</th>
  <th>Section</th>
  <th>Username</th>
  <th>Password</th>
  <th>Confirm Password</th>
  <th>Image</th>
  <th>Action</th>
 
  
	
	</tr>";


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["s_registration"]."</td><td>".$row["s_rollno"]."</td><td>".$row["s_name"]."</td><td>".$row["s_fname"]."</td><td>".$row["s_dob"]."</td><td>".$row["s_gender"]."</td><td>".$row["s_email"]."</td><td>".$row["s_phone"]."</td><td>".$row["s_batch"]."</td><td>".$row["s_class"]."</td><td>".$row["s_section"]."</td><td>".$row["s_username"]."</td><td>".$row["s_password"]."</td><td>".$row["s_cpassword"]."</td><td><img src='../images/".$row['s_image']."'height = '100px' width = '100px'></td><td><a href ='studentupdate.php?id=".$row['id']."'>Update</a>/<a href ='studentdelete.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 

 
