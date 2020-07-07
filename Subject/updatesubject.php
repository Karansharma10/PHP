<?php

include '../config/connect.php';


if (isset($_POST['submit'])) {


$subjectname = $_POST['subjectname'];
$subjectcode = $_POST['subjectcode'];

// echo $subjectcode;

$sql= mysqli_query($conn,  " UPDATE subject SET subjectname='$subjectname', subjectcode='$subjectcode' WHERE id='".$_GET['id']."'");




if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

$qur = "Select * from subject WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn, $qur);
if (mysqli_num_rows($result) > 0) {

  

            
    while($row = mysqli_fetch_assoc($result)) {
?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <head>
    <title> Update Subject</title>
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
  <button onclick="myFunction()" class="dropbtn">☰</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>

<!-- <a class="sign" href="#SignIn"><i class="fa fa-user-circle"></i>SignIn</a> -->
      </div>

      <div class="col-lg-12">
        <h1 class="wer">SCHOOL</h1>
      </div>
      <form method="post" name="myform" onsubmit="return validateform()">
      <div class="col-lg-12">
        <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Subject Form</label>
    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Subject Name</label>
           <input type="text" id="user" value="<?php echo $row['subjectname']?>" name="subjectname" class="input" placeholder="Subject Name">
                      
        </div>

        <div class="group">
          <label for="user" class="label">Subject Code</label>
<input type="tect" id="user" value="<?php echo $row['subjectcode']?>" name="subjectcode" class="input" placeholder="Subject Code">
          

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
      
      <?php
    }
  }
?>
        
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
<script>  
function validateform(){  
var subjectname=document.myform.subjectname.value;  
var subjectcode=document.myform.subjectcode.value;  
  
if (subjectname==null || subjectname==""){  
  alert("subjectname can't be blank");  
  return false;  
}else if(subjectcode==null || subjectcode==""){  
  alert("subjectcode can't be blank");  
  return false;
}  
}
</script>  


</html>