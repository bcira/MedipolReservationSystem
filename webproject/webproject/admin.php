<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medipol</title>
    <link rel="stylesheet" href="adminn.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/d6b70590b4.js" crossorigin="anonymous"></script>
</head>
<body background="images/meet.jpg">

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
            <li><a href="register.php"> Log Out </a></li>
        </ul>
    </div>
</div>
</nav>

    <div class="nav">
    <div class="center">

    <button class="button button1"><span class="fas fa-plus"></span><b><a href="add_room.php" class="text">Add Room</a> </b></button>
    <button class="button button2"><i class="fas fa-cog"></i><b><a href="room_status.php" class="text">Change Room Status</a> </b></button>
    <button class="button button3"><i class="far fa-calendar-alt"></i><b><a href="upcoming.php" class="text">See Reservations</a></b>  </button>
    </div>
    </div>
    
        
    </div>
</body>
<footer> 

        <div class="footermenu " >
            <div class="footercontainer"style="width:100%;">
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