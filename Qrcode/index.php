<!DOCTYPE html>
<html>
<head>
  <title>QR Code</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="QR Code Generator Developed By Developer Ravi Khadka .It's Free Online QR Code Generator to make your own QR Codes.No sign-up required. Create unlimited non-expiring free QR codes for a website URL, YouTube video etc.">

<meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">

 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">

<style>

</style>
</head>
<body>
    <?php 
  include "meRaviQr/qrlib.php";
  include "../config/connect.php";
  if(isset($_POST['create']))
  {
    $qc =  $_POST['qrContent'];
     $qd =  $_POST['datemax'];
    $qrUname = $_POST['qrUname'];
    $qrImgName = "meravi".rand();
    if($qc=="" && $qrUname=="" && $qd=="")
    {
      echo "<script>alert('Please Enter Your Name And Msg For QR Code');</script>";
    }
    elseif($qc=="")
    {
      echo "<script>alert('Please Enter QR Code Msg');</script>";
    }
    elseif($qrUname=="")
    {
      echo "<script>alert('Please Enter Your Name');</script>";
    }
    elseif($qd=="")
    {
      echo "<script>alert('Please Enter Date');</script>";
    }
    else
    {
    // $dev = " ...Develop By Ravi Khadka";
    $final = $qrUname.$qc.$qd;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    // // $qrlink = $workDir."/qrcode".$qrImgName.".png";
    // $insQr = $meravi->insertQr($qrUname,$qc,$qrimage,$qd);
    $insQr = mysqli_query($conn,"INSERT INTO qrcodes(qrClass,qrSubject,qrImg,qrDate) VALUES('$qrUname','$final','$qrimage','$qd')");
    if($insQr==true)
    {
      echo "<script>alert('Thank You $qrUname. Success Create Your QR Code'); window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qd = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qd; ?>" readonly>
    <br><br>
<a href="download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>
<br>
 <br><br>
    <a href="index.php">Go Back To Generate Again</a>
    
     </div></div>
  <?php
}
else
{
  ?>
  <div class="container-fluid login">
  <!-- <div class="container"> -->
<div class="row">
  <div class="col-lg-12 logg">
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">☰</button>
  <div id="myDropdown" class="dropdown-content">
                <a href="../Teacher/profilepageteacher.php">Profile</a>
                <a href="#">Qr Code Generated </a>
                <a href="../Teacher/viewstudent.php">View All Student</a>
                <a href="../logout.php">logout</a>
    
  </div>
</div>

<a class="sign" href="#SignIn"><i class="fa fa-user-circle"></i>SignIn</a>
      </div>

  
  <form class="modal-content animate" style="background-color: #8FC5EB;" method="post" enctype="multipart/form-data">
    <!-- <div class="container"> -->
      <h2 align="center" class="main"> QR Code Generator</h2>
      <div class="we2">
      <label for="uname" class="we">Select Class</label>
      </div>
      <select id="user" type="text" class="input" name="qrUname" value="<?php if(isset($_POST['create'])){ echo $_POST['qrUname']; } ?>">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                     </select>
      

      <br><br><div class="we2"><label for="psw" class="we">Select Subject</label></div>
      <select id="user" type="text" class="input" name="qrContent" value="<?php if(isset($_POST['create'])){ echo $_POST['qrContent']; } ?>">
                       <option value="Science">Science</option>
                       <option value="Maths">Maths</option>
                       <option value="English">English</option>
                       <option value="Geography">Geography</option>
                     </select>

                     <br><br><div class="we2"><label for="psw" class="we">Select Date</label></div>
                     <input type="date" id="user" name="datemax" class="input" value="<?php if(isset($_POST['create'])){ echo $_POST['datemax']; } ?>">
     
        <div class="mito">
      <input type="submit" value="Generate Your Own QR Code" name="create">
      </div>
    
   <!--  </div -->
  </form>
  <div class="col-lg-12 bot">
          <h1 class="head1">All Right Reserved To <a class="web" href="www.webcodice.com">WEBCODICE</a></h1>
        </div>
    <?php 
}
   ?>

<!-- </div> -->
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
