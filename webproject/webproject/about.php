<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Medipol</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="homepage.css">
  <script src="https://kit.fontawesome.com/d6b70590b4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="loginn.css">

  
</head>
<body>
<nav data-spy="affix" data-offset-top="250">
<div class="header_top">
	<div class="header_left">
		<img src="images/medipologo.png" alt="" class="logo">
		<ul class="header_left">
		<li><a href="homepage.php">Home</li>
		<li><a href="about.php">About Us</li>
		<li><a href="book.php" class="booknow">Book Now</a></li>
    <?php
    if($user){
    if($a_type == "user"){
      echo '<li><a href="userpage.php">My Page</a></li>';
    }
    else{
      echo '<li><a href="admin.php">My Page</a></li>';
    }
  }
    ?>
		</ul>
	</div>
	<div class="header_right">
		<ul>
			<li><a href="login.php">Login</a></li>
			|
			<li><a href="register.php">Register</a></li>
		</ul>
	</div>
</div>
</nav>

<div class="header_down"></div>
<!-- FINISH HEADER -->

<div>
  <div>

     
       <div style="text-align:center">
      <h1 class="xlarge-font"><b>About Us</b></h1>
  <p style="color: gray; font-size: 25px; ">This website started as Medipol University Web Programming course project. Later, it was ensured that it was actively used within the school. While we were doing this project, we did not only look at it for teaching purposes. The students in the project are below. </p>

<div>
<b>Kübranur KARAOĞLAN</b><p>Computer Engineering 4.Year</p><br>
<b>Beyza KALENDEROĞLU</b><p>Computer Engineering 4.Year</p><br>
<b>Gözde Sevim TÜMACAR</b><p>Computer Engineering 4.Year</p><br>
<b>Büşra ÇIRA</b><p>Computer Engineering 4.Year</p><br>
<b>Fuat Beraat AVŞAR</b><p>Computer Engineering 4.Year</p><br>
</div>
        
    </div> 


</body>
<!-- START FOOTER -->
<footer> 

        <div class="footermenu">
		    <div class="footercontainer">
            <a href="homepage.php"><img class="footerlogo" src="images/medipologo.png" alt="Medipol University"></a>
        
        <div class="linecontainer">
            <span class="line"></span>
        <div class="footeright">
            <div class="rights">© 2019. All Rights Reserved.</div>
        
                <nav>
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li>-</li>
                        <li><a href="about.php">About Us</a></li>
                        <li>-</li>
                        <li><a href="termsandconditions.php">Terms And Conditions</a></li>
                        <li>-</li>
                        <li><a href="book.php">Booking</a></li>
                    </ul>
                </nav>
            </div>
			</div>
            </div>
        </div>
    </footer>
</html>
