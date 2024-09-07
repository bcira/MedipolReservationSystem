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
  <link rel="stylesheet" href="show_ress.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="footer.css">
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
			
			|
			<li><a href="register.php">Log Out </a></li>
		</ul>
	</div>
</div>
</nav>

<div class="header_down"></div>
<!-- FINISH HEADER -->

<div class="past_title">My Past Reservations</div>
<table class="table">
<thead>
<tr>
<th>Room Photo</th>
<th>Room Floor/Number</th>
<th>Day</th>
<th>Time</th>
<th>Attendees</th>
<th>Reservation Type</th>
<th>Utilities</th>
</tr>
</thead>
<tbody>
<tr>
<td><img src="images/class1.jpg" class="photo"></td><td>2/C-210</td><td>28.03.2020</td><td>11.30AM-1.30PM</td><td>20</td><td>Meeting</td><td>Beverages</td></tr>
<tr>
<td><img src="images/class2.jpg" class="photo"></td><td>3/C-314</td><td>15.03.2020</td><td>2.00PM-5.00PM</td><td>30</td><td>Classroom</td><td></td></tr>
<tr>
<td><img src="images/class3.jpg" class="photo"></td><td>3/C-317</td><td>4.03.2020</td><td>9.00AM-11.00AM</td><td>15</td><td>Classroom</td><td></td></tr>
<tr>
<td><img src="images/class4.jpg" class="photo"></td><td>4/C-410</td><td>2.03.2020</td><td>1.30PM-4.00PM</td><td>10</td><td>Meeting</td><td>Beverages</td></tr>
<tr>
<td><img src="images/class5.jpg" class="photo"></td><td>2/C-237</td><td>22.02.2020</td><td>11.00AM-1.00PM</td><td>30</td><td>Classroom</td><td></td></tr>
</tbody>
</tr>
</table>
   
    
</body>

<!-- START FOOTER -->
<footer> 

        <div class="footermenu">
		    <div class="footercontainer">
            <a href="homepage.html"><img class="footerlogo" src="images/medipologo.png" alt="Medipol University"></a>
        
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