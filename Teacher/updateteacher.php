<?php
include '../config/connect.php';
// for check user is loged in or not
if(!isset($_COOKIE['Admin'])){
  header('location:./login.php');
}
if (isset($_POST['submit'])) {
    $t_name = $_POST['t_name'];
     $t_fname =     $_POST['t_fname'];
        $t_dob =    $_POST['t_dob'];
        $t_qualification = $_POST['t_qualification'];
        $t_email =     $_POST['t_email'];
        $t_phone =    $_POST['t_phone'];
        $t_jdate = ($_POST['t_jdate']);
        $t_username =     $_POST['t_username'];
        $t_gender =     $_POST['t_gender'];
  
        $image =  $_FILES['t_image']['name'];
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["t_image"]["name"]);
        $image_name=basename($_FILES["t_image"]["name"]);
        if (move_uploaded_file($_FILES["t_image"]["tmp_name"], $target_file)) {
              // echo "The file ". basename( $_FILES["t_image"]["name"]). " has been uploaded.";
      
          $id =$_GET['id'];
          $sql = "SELECT * FROM teacher WHERE id='$id'";
          $result = $conn->query($sql);
      
          while($row = $result->fetch_assoc()) {
                  // echo $r=$row['t_image'];
              }
      
      
            // $path = "../images/$r";
            // if(!unlink($path))
            // {
            //   echo "Not Working";
            // }
            // else {
            //  echo "deleted";
            // }
          } else {
              echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
          }
      



  $two =mysqli_query($conn,"UPDATE teacher SET
			      t_name='$t_name', 
             t_fname='$t_fname',
             t_dob='$t_dob',
             t_qualification='$t_qualification',
			        t_email='$t_email',
             t_jdate='$t_jdate',
             t_phone='$t_phone',
              t_username='$t_username', 
              t_image='$image_name'
			

	   WHERE id='".$_GET['id']."'");
  
  if ($conn->query($two) === TRUE) {
    // echo "Record updated successfully";
  } else {
    // echo "Error updating record: " . $conn->error;
  }

}

$qur = "Select * from teacher WHERE id='".$_GET['id']."'";
$result = mysqli_query($conn, $qur);
if (mysqli_num_rows($result) > 0) {

	

  					
    while($row = mysqli_fetch_assoc($result)) {

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <title>Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https:/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/teacherregistration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
		<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
  <!--   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->


  </head>
</head>
<body>


<div class="container-fluid login">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 logg">
      <button onclick="myFunction()" class="dropbtn">☰</button>
              <div id="myDropdown" class="dropdown-content">
              <a href="../Student/viewallstudents.php">View Student</a>
                <a href="../Teacher/selectteacher.php">View Teacher</a>
                <a href="../Student/Studentregistration.php">Add Student</a>
                <a href="../Teacher/teacherregistration.php">Add Teacher</a>
                <a href="../Class/class.php">Add class</a>
                <a href="../Subject/subject.php">Add Subject</a>
                <a href="../logout.php">logout</a>
                <!-- <a href="../">Qr Code Scann</a> -->
                <!-- <a href="#contact">Contact</a> -->
              </div>

<!-- <a class="sign" href="../loginpage.php"><i class="fa fa-user-circle"></i>SignIn</a> -->
			</div>

			<div class="col-lg-12">
				<h1 class="wer">SCHOOL</h1>
			</div>
			<div class="col-lg-12">
<form method="POST" enctype="multipart/form-data">
				<div class="login-wrap">
	<div class="login-html">
		
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Teacher</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Name</label><br>
					<input id="user" type="text" value="<?php echo $row['t_name']?>" class="input" name="t_name" placeholder="NAME">
				</div>
				<div class="group">
					<label for="user" class="label">Father's Name</label><br>
					<input id="user" type="text" value="<?php echo $row['t_fname']?>" class="input" name="t_fname" placeholder="FATHER'S NAME">
				</div>
				<div class="group">
					<label for="user" class="label">Date of birth</label>
					<input type="date" id="user" value="<?php echo $row['t_dob']?>" name="t_dob" class="input" placeholder="DATE OF BIRTH">
				</div>
				<div class="group">
					<label for="user" class="label">Email</label><br>
					<input id="user" type="text" value="<?php echo $row['t_email']?>" class="input" name="t_email" placeholder="EMAIL">
				</div>
				<div class="group">
					<label for="user" class="label">Phone no</label><br>
					<input id="user" type="tel" value="<?php echo $row['t_phone']?>" class="input" name="t_phone" placeholder=" ENTER PHONE NO">
				</div>
<div class="group">
					<!-- <label for="user" name="t_qualification" class="label">Qualification</label>
                     <select id="user" name="t_qualification"  class="input" value="Qualification">
                       <option value="1">class 1</option>
                       <option value="2">class 2</option>
                       <option value="3">class 3</option>
                       <option value="4">class 4</option>
                       <option value="5">class 5</option>

                      
                     </select> -->

                     <label for="user" class="label">Qualification</label><br>
					<input id="user" type="text" class="input" value="<?php echo $row['t_qualification']?>" name="t_qualification" placeholder="Qualification">
</div>

				<div class="group">
					<label for="user" class="label">Joining Date</label>
					<input type="date" id="user" name="t_jdate" value="<?php echo $row['t_jdate']?>"  class="input" placeholder="JOINING DATE">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label><br>
					<input id="user" type="text" class="input" value="<?php echo $row['t_username']?>" name="t_username" placeholder="USERNAME">
				</div>
					<!-- <div class="group">
					<label for="user" class="label">Password</label>
					<input id="user" type="password" class="input" data-type="password" name="t_password" placeholder="PASSWORD">
				</div>
				<div class="group">
					<label for="user" class="label">Confirm Password</label><br>
					<input id="user" type="password" class="input" data-type="password" name="t_cpassword" placeholder="CONFIRM PASSWORD">
				</div> -->

			
        <?php
        
  echo"<img src='../images/".$row['t_image']."'height = '100px' width = '100px' style='border-radius:60px;'>"; 
  
  ?>
				
				<div class="group">
					<label>Upload profile pic
		           <input id="user" class="sus" type="file" name="t_image" />
	            </label>
				</div>
        
        <div class="group">
					<label for="user" class="label">Select Gender</label>
					<input  type="radio" id="male" name="t_gender" value="male" <?php echo ($row['t_gender'] == 'male') ? 'checked' : ''; ?>>
  <label value="male" id="male">Male</label>
  <input type="radio" id="female" name="t_gender" value="female" <?php echo ($row['t_gender'] == 'female') ? 'checked' : ''; ?> >
  <label value="female">Female</label>
  
				</div>

			<!-- 	<div class="group">
					<label for="user" class="label">Select Gender</label>
					<input  type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
				</div> -->

				<div class="hr"></div>
				<div class="group">
					<input type="submit" class="but" name="submit" value="Update" onclick="return Validate()" >

					<!-- <button class="but">Register</button> -->
				</div>
	

			</div>
		
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
</form>

<?php
    }
  }

?>

 <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
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

<script type="text/javascript">
  $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})

</script>


</html> 


download.jfifError updating record: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1' at line 1