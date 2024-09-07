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
  <link rel="stylesheet" href="login.css">

  
</head>
<body>
<nav data-spy="affix" data-offset-top="250">
<div class="header_top">
	<div class="header_left">
		<img src="images/medipologo.png" alt="" class="logo">
		<ul class="header_left">
		<li><a href="homepage.php">Home</li>
		<li><a href="about.php">About Us</li>

     <?php
    if($user){
      echo '<li><a href="book.php" class="booknow">Book Now</a></li>';
    }
    else{
      echo '<li><a href="register.php" class="booknow">Book Now</a></li>';
    }
    ?>

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
			<li><button onclick="document.getElementById('id01').style.display='block'" class="loginbtn">Login</button></li>
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
  <h2>It shouldn’t take 30 emails to schedule a 30-minute meeting</h2>
  <p style="color: gray; font-size: 25px; ">Book meetings faster with the smart scheduling... </p><br>
    <a href="book.php"  class="buttons" style="background-color:green;"><span class="fas fa-plus"></span><b>Set Meeting</a></b></button> 
</div>

<!-- The App Section -->
<div class="container56">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The Medipol</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why to use it?</b></h1>
      <p><span style="font-size:24px">No more juggling time zones and busy schedules.</span><br> <br></p>
      <a href="register.php" class="buttons">Get started now!</a></button>
    </div>
    <div class="column-33">
        <img src="images/hp4.jpg" width="335" height="471">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container56" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="images/hp.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Private</b></h1><br>
      <h1 class="large-font" style="color:red;"><b>Keep your calendar private.</b></h1><br>
      <p><span style="font-size:24px">Your calendar - and your attendees’ calendars - are personal. We get it. With Meetings, events, meetings, appointments and daily activities stay out of public view.</p><br>
      <a href="register.php" class="buttons" style="background-color:red;">Sign Up</a></button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container56">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Skip the email guessing game.</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b></b></h1>
      <p><span style="font-size:24px"><br> Check availability across time zones, so key players don’t get left out of important meetings - and projects move faster without spending time with e-mails.</p></span><br>
      <a href="register.php" class="buttons">Start using it!</a></button>
    </div>
    <div class="column-33">
        <img src="images/hp3.jpg" width="335" height="471" >
    </div>
  </div>
</div>
        
    </div> 
</div>


    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="register_db.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <center><img src="images/medipollogo.jpg" alt="LOGO" class="avatar"></center>
    </div>

    <div class="container2">
      
       <input type="email" placeholder="Enter Email" name="email" required>

      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" class="buttons" name="buttonlogin"><b>Login</b></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container2">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button>
      <span class="psw">Forgot password?</span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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
