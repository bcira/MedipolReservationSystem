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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Medipol</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="book.css">

	<link rel="stylesheet" href="footer.css">


	
</head>

<body >

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
			<li><a href="register.php">Log Out</a></li>
		</ul>
	</div>
</div>
</nav>

<div class="header_down"></div>
<!-- FINISH HEADER -->

  <div class="container">
<?php 
$baglan=mysqli_connect("localhost","root"," ","web_proje");
$roominfo= mysqli_query($baglan,"select * from rooms");
mysqli_set_charset($baglan, "utf8");
while( $al = mysqli_fetch_array($roominfo)){
	$roomname=$al['roomname'];
	$roomlocation=$al['roomlocation'];
	$roomcapacity=$al['roomcapacity'];
	$roomphoto=$al['roomphoto'];
	$projector=$al['projector'];
	$microphone=$al['microphone'];
	$plug=$al['plug'];
	$rid= $al['id'];
	echo"<div class='res_cardd' id='res_cardd1'>
  <center> <p class='info'><br><img src='images/mroom1.jpg' alt=''   width= '100%' height='auto' ></p>
 
  <p> <b>Room:</b> ".$roomname." </p>
  <p> <b>Room Floor:</b>" .$roomlocation." </p>
  <p> <b>Room Capacity:</b> ".$roomcapacity." </p>
  <p> <b>Projector:</b>".$projector."</p>
  <p> <b>Microphone:</b>".$microphone."</p>
  <p> <b>Plug:</b>".$plug."</p>
  <a href='add_book.php?".$rid."' class='bookborder'>Book Now</a>
  
 </center>
</div>  ";
}



?>
  

 <!--
<div id="myModal" class="modal" role="dialog">

  <div class="modal-content" >
    <span class="close">&times;</span>
    <h2>Select Date and Time</h2>
	<p>
  <label for="meettittle">Meeting Tittle</label>
  <input type="text" id="meettittle" name="meettittle" class="modaltext"><br> 
  <label for="roomtype">Room Type</label>
  <input list="RType" id="roomtype" class="modaltext"><br>
        <datalist id="RType">
			<option value="Meeting">
			<option value="Exam">
			<option value="Classroom">
		</datalist>
  <label for="numattend">Attendees Number</label>
  <input type="number" id="numattend" name="numattend" class="modaltext"><br>
  <label for="date">Date</label>
  <input type="date" id="date" name="date" class="modaltext">
  <label for="time">Start Time</label>
  <input type="time" id="stime" name="stime" class="modaltext">
  <label for="time">End Time</label>
  <input type="time" id="etime" name="etime" class="modaltext"><br>
  <label for="note">Reservation Note</label>
  <textarea id="note" name="note" class="modaltext2" rows="2" cols="30"></textarea><br><br>
  <button id="checkdate" class="checkbuton">Check</button>
 </p>
  </div>

</div> -->
    </div> 


</body>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
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

