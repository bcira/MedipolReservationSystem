<!--database connection-->

<?php

session_start();
include("dbconnect.php");

$user = $_SESSION["email"];
$a_type = $_SESSION["a_type"];

?>

<?php 
    $con = mysqli_connect("localhost","root","1234");
    mysqli_select_db($con,"web_proje") or die(mysqli_error($con));

    $projector = 0;
    $microphone = 0;
    $plug = 0;

    if (isset($_POST['addroom'])) {

        $roomname           = $_POST['roomname'];
        $roomlocation       = $_POST['roomlocation'];
        $roomcapacity       = $_POST['roomcapacity'];

        $folderpath              = "images/rooms/";
        $room_picture_tmp_name   = $_FILES['room_picture']['tmp_name'];
        $room_picture_name       = $_FILES['room_picture']['name'];
        $room_picture_boyut      = $_FILES['room_picture']['size'];
        $room_picture_tip        = $_FILES['room_picture']['type'];
        $room_picture_uzanti     = substr($room_picture_name, -4, 4);
        $date                    = date('Y-m-d-h-i-s');
        $randomnumber2           = rand(10000, 50000);
        $resimad                 = $date . $randomnumber2 . $room_picture_uzanti;

        if(isset($_POST['projector'])){
            $projector          = $_POST['projector'];
        }
        if(isset($_POST['microphone'])){
            $microphone         = $_POST['microphone'];
        }
        if(isset($_POST['plug'])){
            $plug               = $_POST['plug'];
        }

        if (!$roomname || !$roomlocation || !$roomcapacity){
            echo "Please fill all empty spaces!";
            
            echo $room_picture_name;
            echo  $room_picture_boyut;
            echo $room_picture_boyut;
            echo $room_picture_tip;
        } else if (strlen($room_picture_name) == 0) {
            echo "Choose a file!";
        } else if ($room_picture_boyut > (1024 * 1024 * 3)) {
            echo "File size must be lower than 3 Mb!";
        }else if ($room_picture_tip != 'image/jpeg' && $room_picture_tip != 'image/png' && $room_picture_uzanti != '.jpg') {
            echo "Only upload .jpeg or .png format!";
        }else{
        
        $movepicture = move_uploaded_file($room_picture_tmp_name, "$folderpath/$resimad");

        if (!$movepicture) {
            echo  "Fotoğraf yüklemede bir sorun oluştu";
        } else {

        mysqli_query($con,"insert into rooms(roomname,roomlocation,roomcapacity,projector,microphone,plug,roompicture) values('$roomname','$roomlocation','$roomcapacity','$projector','$microphone','$plug','$resimad')");
        header("Location:add_room.php");
        }
    } 
}
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
                <i class="fas fa-align-left"></i> <input type="text" placeholder=" Enter Room Name/Number" class="in1" name="roomname">
                <i class="fas fa-map-marker-alt"></i><input list="floors" placeholder=" Location" class="in2" name= "roomlocation">
                     <datalist id="floors">
                            <option value=" 1. Floor ">
                            <option value=" 2. Floor">
                            <option value=" 3. Floor">
                            <option value=" 4. Floor">
                    </datalist>

                    <i class="fas fa-asterisk"></i><input list="Capacity" placeholder=" Room Capacity" class="in2" name=roomcapacity>
                     <datalist id="Capacity">
                            <option value=" 10">
                            <option value=" 20">
                            <option value=" 30">
                            <option value=" 40">
                            <option value=" 50">
                            <option value=" 70">
                            <option value=" 100">
                            <option value=" 150">
                    </datalist>
                    
                    <i class="fas fa-file-image"></i><label for="room_picture">Room Picture</label><br>
                    <input type="file" class="room_picture" require name="room_picture" placeholder="Room Picture">
                    

                    <br><br>
                    <input type="checkbox" id="component1" class="in" value="1" name="projector">
                    <label for="component1"> Projector</label><br>
                    <input type="checkbox" id="component2" class="in" value="1" name="microphone" >
                    <label for="component2"> Microphone & Speakers</label><br>
                    <input type="checkbox" id="component3" class="in" value="1" name="plug">
                    <label for="component3"> Plug</label><br>
                    
                    

                    
                    
                    <button type="submit" class="button button1" name="addroom" ><span class="fas fa-plus"></span><b>Add Room</b></button>
            </div>
        </form>

</body>


</html>
