<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];
$name = $_SESSION["name"];
$pnumber = $_SESSION["pnumber"];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Medipol</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="userpagee.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/d6b70590b4.js" crossorigin="anonymous"></script>
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
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
</div>
</nav>

      <div class="contain"> 


<div class="cardphoto">
  <img src="images/user.png" alt="John" style="width:80%">
  <h2 class="h3profile">My Profile </h2> 
  <hr>
  <p class="info"><b>Name: </b><?php echo $name; ?></p>
  <p class="info"><b>Mail: </b><?php echo $user; ?></p>
  <hr>
  <p class="info_no"><b>Tel: </b><?php echo $pnumber; ?></p>
  <button class="btncolor"><a href="book.htm" class="addpast">Add Reservation</a></button>
  <button class="btncolor"><a href="show_res.html" class="addpast"> Show Past Reservations</a></button>
</div>

<div class="res_card">
  <h2 class="h3profile"><center>My Reservations</center></h2> 
  <hr>

  <div class="res_cardd" id="res_cardd1">
  <p class="info"><b> Reservation 1 </b>
    <button id="myBtn3" class="bookborder">Edit</button>

  <button class="btn_c" id="btn_ec2">Cancel</button></p>
  <hr>
  <center><p> <b>Room:</b> C-210 </p>
  <p> <b>Reservation Day:</b> 12.04.2020 </p>
  <p> <b>Start:</b> 10.00 AM - <b>End:</b> 1.00 PM</p>
  <p><b>Reservation type:</b> Meeting</p>
  <p><b>Number of attendees:</b> 10</p>
  <br>
   <p><b>Reservation Notes</b></p>
   <hr>
   <p>Beverages needed</p>
 </center>
</div>

<div class="res_cardd" id="res_cardd2">
  <p class="info"><b> Reservation 2 </b>
    <button id="myBtn2" class="bookborder">Edit</button>

  <button class="btn_c" id="btn_ec2">Cancel</button></p>
  <hr>
  <center><p> <b>Room:</b> C-314 </p>
  <p> <b>Reservation Day:</b> 15.04.2020 </p>
  <p> <b>Start:</b> 1.00 PM - <b>End:</b> 3.00 PM</p>
  <p><b>Reservation type:</b> Exam</p>
  <p><b>Number of attendees:</b> 15</p>
  <br>
   <p><b>Reservation Notes</b></p>
   <hr>
   <p></p>
 </center> 
</div>

<div class="res_cardd" id="res_cardd3">
  <p class="info"><b> Reservation 3 </b>

  <button id="myBtn" class="bookborder">Edit</button>
  
  <button class="btn_c" id="btn_ec2">Cancel</button></p>
  <hr> 
  <center><p> <b>Room:</b> C-237 </p>
  <p> <b>Reservation Day:</b> 20.04.2020 </p>
  <p> <b>Start:</b> 2.00 PM - <b>End:</b> 4.00 PM</p>
  <p><b>Reservation type:</b> Classroom</p>
  <p><b>Number of attendees:</b> 35</p>
  <br>
   <p><b>Reservation Notes</b></p>
   <hr>
   <p></p>
 </center>
</div>

</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Select Date and Time</h2>
	<p><form action="#">
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
  <button id="checkdate" class="checkbuton">Change</button>
</form> </p>
  </div>

</div>
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
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

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
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

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
}// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

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