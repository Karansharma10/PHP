<?php

include '../config/connect.php';


if (isset($_POST['submit'])) {


$a_username = $_POST['a_username'];
$a_password = md5($_POST['a_password']);

// echo $subjectcode;

$sql = "INSERT INTO admin (username, password)
VALUES ('$a_username', '$a_password')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
  $main= "INSERT INTO user_main (username,password,role) VALUES ('$a_username','$a_password','Admin')";
     mysqli_query($conn,$main);
    echo "Data Inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <head>
    <title>Subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/subject.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
</head>
<body>


<div class="container-fluid login">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 logg">
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"> <BR></button>
  <!-- <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div> -->
</div>

<!-- <a class="sign" href="#SignIn"><i class="fa fa-user-circle"></i>SignIn</a> -->
      </div>

      <div class="col-lg-12">
        <h1 class="wer">SCHOOL</h1>
      </div>
      <form method="post">
      <div class="col-lg-12">
        <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin Form</label>
    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Username</label>
           <input type="text" id="user" name="a_username" class="input" placeholder="Subject Name">
                      
		</div>
		

        <div class="group">
          <label for="user" class="label">Password</label>
<input type="password" id="user" name="a_password" class="input" placeholder="Subject Code">
          

        </div>

                

    
        <div class="hr"></div>

        <div class="group">
          <button class="but" name="submit">Submit</button>
        </div>
        
        
      </div>
      <!-- <div class="for-pwd-htm">
        <div class="group">
          <label for="user" class="label">Username or Email</label>
          <input id="user" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Reset Password">
        </div>
        <div class="hr"></div>
      </div> -->
    </div>
  </div>
</div>

      </div>
    </form>
      
        
      </div>
      <div class="col-lg-12">
          <h1 class="head1">All Right Reserved To <a class="web" href="www.webcodice.com">WEBCODICE</a></h1>
        </div>
    </div>
  </div>
</div>

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