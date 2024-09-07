<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>

<?php 
	$rid=$_GET['rid'];
	$baglan=mysqli_connect("localhost","root","","web_proje");
	$roominfo= mysqli_query($baglan,"select * from rooms where id=$rid");
	mysqli_set_charset($baglan, "utf8");
	$roomname=$al['roomname'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Medipol</title>
    <link rel="stylesheet" href="add_roomm.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/d6b70590b4.js" crossorigin="anonymous"></script>
</head>
<body>
<style>
    *.fa-file-image{
    color: #566573;
    size: 30px;
    margin-right: 10px;
    padding-top: 25px;
}
*.room_picture{
    padding-top: 25px;
}

    <input type="file">

input[type="file"] {
  cursor: pointer;
  font: 300 14px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

  color:black;
}
input[type="file"]::-webkit-file-upload-button
{
  font: 300 14px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #2C3E50;
  border: 0;
  padding: 12px 25px;
  cursor: pointer;
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 15px;
}
 
input[type="file"]::-ms-browse {
  font: 300 14px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #2C3E50;
  border: 0;
  padding: 12px 25px;
  cursor: pointer;
  color: #fff;
  text-transform: uppercase;
}

</style>
<div class="header_top">
        <div class="header_left">
        
            <nav>
            <img src="images/medipollogo.jpg" alt="" class="logo">
            <ul class="header_left">
                <li>Home</li>
          
                <li>About Us</li>
                <li><a href="" class="booknow">Book Now</a></li>
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
        </nav>
        </div>
        <div class="header_right">
            <nav>
                <ul>
                    
                    <li>|</li>
                    <li class="hover4"><a href="">Log Out </a></li>
                </ul>
            </nav>
        </div>

    <div class="container">

            <img src="images/med.jpg" width="175" height="45" class="img">
			
        <form action="" method="post" enctype="multipart/form-data">
            <div class="content">
                <i class="fas fa-align-left"></i> <input type="text" placeholder=" Meeting Title" class="in1" name="meeting_title">
				                    <i class="fas fa-asterisk"></i><input list="room_type" placeholder=" Room Type" class="in2" name=room_type><br>
                     <datalist id="room_type">
                            <option value="Meeting">
                            <option value="Exam">
                            <option value="Classroom">
                    </datalist>

                    <i class="fas fa-asterisk"></i><input type="number" placeholder=" Attendees Number" class="in2" name=att_number><br>
                    
                    <i class="fas fa-asterisk"></i><label for="date">Date</label>
					  <input type="date" id="date" name="date" class="in2"><br>
					  <i class="fas fa-asterisk"></i>
					  <label for="time">Start Time</label>  
					  <input type="time" id="stime" name="start" class="in2"><br>
					  <i class="fas fa-asterisk"></i>
					  <label for="time">End Time</label>
					  <input type="time" id="etime" name="end" class="in2"><br>
					  <i class="fas fa-asterisk"></i>
					  <label for="note">Reservation Note</label>
					  <textarea id="note" name="reservation_note" class="in2" rows="2" cols="30"></textarea><br>
					 
                    <button type="submit" class="button button1" name="addroom" ><span class="fas fa-check"></span><b>Check Reservation</b></button>
            </div>
        </form>
</div>
</body>


</html>
