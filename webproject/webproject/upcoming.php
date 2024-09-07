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
  <link rel="stylesheet" href="upcoming.css">
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
			<li><a href="register.php">Log Out</a></li>
		</ul>
	</div>
</div>
</nav>


<div class="header_down"></div>
<!-- FINISH HEADER -->


  
    <div>
        <h1 style="color:darkblue;">Upcoming Reservations</h1>
    </div>

<div class="container3">
    <div class="container_table">
        <div class="wraptable">
            <div class="table">

                <div class="head">
                    <table>
                        <thead>
                            <tr>
                                <th class="column1">Edit</th>
                                <th class="column2">Room Number</th>
                                <th class="column3">Room Type</th>
                                <th class="column4">Room Capacity</th>
                                <th class="column5">Utilities</th>
                                <th class="column6">Day</th>
                                <th class="column7">Time</th>
                                <th class="column8">Delete</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="tablebody">
                    <table>
                        <tbody>
                        <tr>
                            <td class="column1"><button  id="myBtn" class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">15.04.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button id="myBtn2" class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">2</td>
                            <td class="column3">Classroom</td>
                            <td class="column4">40</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">15.04.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button id="myBtn3" class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button id="myBtn4" class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button id="myBtn5" class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn"><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td class="column1"><button class="edbtn" ><i class="fa fa-edit"></i></button></td>
                            <td class="column2">1</td>
                            <td class="column3">Meeting</td>
                            <td class="column4">30</td>
                            <td class="column5">Beverages</td>
                            <td class="column6">10.05.2020</td>
                            <td class="column7">11:00 AM - 2:00 PM</td>
                            <td class="column8"><button class="edbtn"><i class="fa fa-trash"></i></button></td>
                        </tr>
            
                        </tbody>
                    </table>

                </div> 
            </div>
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
  <button id="checkdate" class="checkbuton">Check</button>
</form> </p>
  </div>

</div>
</div>

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
var btn = document.getElementById("myBtn4");

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
var btn = document.getElementById("myBtn5");

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