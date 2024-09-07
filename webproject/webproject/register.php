<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Medipol</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="register.css">
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
			<li><button onclick="document.getElementById('id01').style.display='block'" class="loginbtn">Login</button></li>
			|
			<li><a href="register.php">Register</a></li>
		</ul>
	</div>
</div>
</nav>

<div class="header_down"></div>
<!-- FINISH HEADER -->

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
      <span class="psw">Forgot password?</span>
    </div>
  </form>
</div>
          
            <div class="container2">
                <div class="content">
                    <form method="post" action="register_db.php">
                        <h2 class="signtitle">CREATE ACCOUNT</h2>
                        <div>
                            <input type="text" class="input" placeholder="Your Name" name="name" />
                        </div>
                        <div>
                            <input type="email" class="input" placeholder="Your Email" name="email" />
                        </div>
                        <div>
                            <input type="tel" class="input" placeholder="Phone Number" name="pnumber" />
                        </div>
                        <div>
                            <input type="password" class="input" placeholder="Password" name="password" />
                        </div>
                        <div class="accountype">
                            <label for="text" class="labelcheck"><span>Select your account type:</span></label>
                            <label for="user" class="labelcheck"><span>User</span></label>
                            <input type="radio" name="a_type" value="user" >
                            <label for="admin" class="labelcheck"><span>Admin</span></label>
                            <input type="radio" name="a_type" value="admin">
                        </div>
                      
                        <div>
                            <button class="signup" name="buttonreg"><a href="" style="color: black;">Sign Up</a></button>
                        </div>
                    </form>
					
                </div>
            </div>
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