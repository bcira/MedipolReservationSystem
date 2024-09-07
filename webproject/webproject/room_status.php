<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>

<head>
   
    <title>Medipol</title>

    <link rel="stylesheet" href="room_status.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/d6b70590b4.js" crossorigin="anonymous"></script>
    
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
            <li><a href="register.php"> Log Out </a></li>
        </ul>
    </div>
</div>
</nav>

   
    <input  type="text" name="search" placeholder="Search..">
    
    <div class="container-fluid" style="height:1000px" >
    <div class="container"> 

    <div class="res_cardd" id="res_cardd1">
    <center> <p class="info"><br><img src="images/mroom1.jpg" alt=""   width= "100%" height="auto" ></p>
 
    <p> <b>Room:</b> C-210 </p>
    <button  id="btn1" class="bookborder">Set as Unavailable</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 style="color: darkblue;">Why you change the room status?</h4>
    <input type="text" name="unavailable" placeholder="Explain.."><br>
    <center> <button class="newbtn">Set as Unavailable</button></center>
  </div>

</div>



    </center>
    </div>
    <div class="res_cardd" id="res_cardd2">
    <center><p class="info"><br><img src="images/mroom2.jpg" alt="" width= "100%" height="auto" ></p>
 
    <p> <b>Room:</b> CZ-12 </p>
    <button id="btn1" class="bookborder">Set as Unavailable</button>

    </center>
    </div>
    <div class="res_cardd" id="res_cardd3">
    <center><p class="info"><br><img src="images/mroom3.jpg" alt="" width= "100%" height="auto" ></p>
 
    <p> <b>Room:</b> Senato Room </p>
    <button  id="btn1"class="bookborder" >Set as Unavailable</button>

    </center>
</div>
    </div> 
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("btn1");

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


    
