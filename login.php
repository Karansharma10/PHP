<?php
session_start();

include 'config/connect.php';
//   setcookie("Auction_Item", "Luxury Car", time()+2*24*60*60);

 if(isset($_POST['submit']))
  {
 	
	 $username = $_POST['username'];
	 $password = md5($_POST['password']);

 $result= mysqli_query($conn,'SELECT * from user_main where username="'.$username.'" and password="'.$password.'"');


	if(mysqli_num_rows($result)==1)
	{
		 while($row = mysqli_fetch_array($result)){
               $_SESSION['isLogin'] = 'yes';
                setcookie("Admin", $row['role'], time()+2*24*60*60);

                $_SESSION["username"]=$username;

             // if ($row['role'] == 'Student') {
             	
             // 	header('location:welcomestudent.php');
             // }
             // if ($row['role'] == 'Teacher') {
             	
             // 	header('location:');
             // 	echo '<script>alert("Welcome teacher")</script>';
             // }

                if($row['role'] == 'Teacher'){

                		header('location:Teacher/welcometeacher.php');
                	// echo "hello";

                }
                if($row['role'] == 'Student'){

                		header('location:Student/welcomestudent.php');
                	// echo "hello1";

				}
				if($row['role'] == 'Admin'){

					header('location:Admin/welcomeadmin.php');
				// echo "hello1";

			}
 
        }
		// header('location:welcome_john.php');
		// echo '<script>alert("user found")</script>';
	}
		else
		{ 

		echo '<script>alert("user not found")</script>';

		}

 }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <title>Loginpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/loginpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--     <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

  </head>
</head>
<body>


<div class="container-fluid login">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 logg">
				<!-- <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><br></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div> -->

<!-- <a class="sign" href="#SignIn"><i class="fa fa-user-circle"></i>SignIn</a> -->
			</div>

			<div class="col-lg-12 school">
				<h1 class="wer">SCHOOL</h1>
			</div>
			<div class="col-lg-12">
				<div class="login-wrap">
	<div class="login-html">
		
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="post">
				<div class="group">
					<label for="user" class="label"></label>
					<input id="user" type="text" class="input" name="username" placeholder="USERNAME OR EMAIL">
				</div>
				<div class="group">
					<label for="pass" class="label"></label>
			<input id="pass" type="password" class="input" data-type="password" name="password" placeholder="PASSWORD">
				</div>
				<div class="hr"></div>
				<div class="group">
					<button class="but" name="submit">Sign In</button>
				</div>
				
				</form>
				<!-- <div class="call"><h3 class="signn">Sign in with</h3></div>
				
						<input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
						<input class="btn btn-lg btn-gmail btn-block" type="submit" value="Login via Gmail"> -->
					
				<!-- <div class="call"><h3 class="signn">Click here for <a class="web" href="#">Register</a></h3></div> -->
				

			</div>
			<!-- <div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label"></label>
					<input id="user" type="text" class="input" placeholder="USERNAME OR EMAIL">
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