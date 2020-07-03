

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <title></title>
        <meta
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
            name="viewport"/>
             <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/viewallstudents.css">
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link rel="stylesheet" href="../css/responsive-tables.min.css" type="text/css"/>
    </head>

    <body>
        <div class="container-fluid login">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 logg">
        <button onclick="myFunction()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content">
        <a href="profilepageteacher.php">Profile</a>
        <a href="../Qrcode/qrcodegenerated.php">Qr Code </a>

<!-- <a href="../Class/class.php">Add Class</a> -->

<!-- <a href="../Subject/subject.php">Add Subject</a> -->

<a href="viewstudent.php">View All Student</a>
<a href="../logout.php">logout</a>
              </div>

<!-- <a class="sign" href="#SignIn"><i class="fa fa-user-circle"></i>SignIn</a> -->
            </div>
            <div class="col-lg-12 col-md-6">
                <h1 class="wer1">View Student Registration</h1>
            </div>
        
                <!-- <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Registration no</th>
            <th>Email</th>
            <th>Contact no</th>
            <th>Roll no</th>
            <th>D.O.B</th>
            <th>Class</th>
            <th>Batch</th>
            <th>Section</th>
            <th>Gender</th>
            <th>Update</th>
            <th>Delete</th>
        </tr> -->

        <?php
include '../config/connect.php';
// for check user is loged in or not
if(!isset($_COOKIE['Admin'])){
  header('location:../login.php');
}

$sql = "SELECT * FROM  student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo"<table class='table table-hover custab'>
    <thead>
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
  <th>Image</th>
 
    </tr></thead>";


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tbody>
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["s_registration"]."</td>
        <td>".$row["s_rollno"]."</td>
        <td>".$row["s_name"]."</td>
        <td>".$row["s_fname"]."</td>
        <td>".$row["s_dob"]."</td>
        <td>".$row["s_gender"]."</td>
        <td>".$row["s_email"]."</td>
        <td>".$row["s_phone"]."</td>
        <td>".$row["s_batch"]."</td>
        <td>".$row["s_class"]."</td>
        <td>".$row["s_section"]."</td>
        <td>".$row["s_username"]."</td>
        <td>".md5($row["s_password"])."</td>
        <td><img src='../images/".$row['s_image']."'height = '100px' width = '100px'></td>
        </tr>
        </tbody>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        <div class="col-lg-12">
                    <h1 class="head1">All Right Reserved To <a class="web" href="www.webcodice.com">WEBCODICE</a></h1>
                </div>
    </div>
    </div>

</div>


        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
        <script src="../js/jquery.responsive-tables.min.js"></script>
        <script src="../js/app.js"></script>
    </body>
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</html>
