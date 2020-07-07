<?php
include '../config/connect.php';
session_start();

  // for check user is loged in or not
  if(!isset($_COOKIE['Admin'])){
    header('location:./login.php');
  }
  // for logout
  // if (isset($_POST['logout'])) {
    
  //   setcookie('Admin', false);
  //   header('location:../loginpage.php');
  // }
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body></body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <head>
      <title>welcomepage</title>
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
      />

      <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet"
      />

      <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      />

      <link rel="stylesheet" href="../css/animate.css" />

      <link rel="stylesheet" href="../css/owl.carousel.min.css" />
      <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
      <link rel="stylesheet" href="../css/magnific-popup.css" />

      <link rel="stylesheet" href="../css/ionicons.min.css" />

      <link rel="stylesheet" href="../css/flaticon.css" />
      <link rel="stylesheet" href="../css/icomoon.css" />
      <link rel="stylesheet" href="../css/welcome.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <script src="/scripts/jquery.min.js"></script>
      <script src="/bootstrap/js/bootstrap.min.js"></script>
    </head>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 nav">
            <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">☰</button>
              <div id="myDropdown" class="dropdown-content">
                <a href="profilepagestudent.php">Profile</a>
                <a href="qrcodepagestudent.php">Qr Code Scann</a>
                <a href="../logout.php">logout</a>
                <!-- <a href="#contact">Contact</a> -->
              </div>
            </div>

            <!-- <button type="sumbit" class="sign" >Logout</button> -->

            <!-- <button class="sign" name="logout">Logout</button> -->
          </div>
          <div class="col-lg-12 nav1">
            <h1 class="head">
              welcome
              <?php echo   $_COOKIE['Admin']; ?>
            </h1>
            <!-- <form method="post">
              <button type="sumbit" name="logout">Logout</button>
            </form> -->
          </div>
          <div class="col-lg-12 nav2">
            <img
              class="img-responsive pic"
              src="../image/welcome1.png
					"
            />
          </div>
          <div class="col-lg-12 nav1">
            <h1 class="head1">
              All Right Reserved To
              <a class="web" href="www.webcodice.com">WEBCODICE</a>
            </h1>
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
    window.onclick = function (event) {
      if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains("show")) {
            openDropdown.classList.remove("show");
          }
        }
      }
    };
  </script>
</html>
