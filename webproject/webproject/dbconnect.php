
<?php 

/* hide unneccesaary errors*/
error_reporting(~E_DEPRECATED & ~E_NOTICE);

/* connect to database */
$host = "localhost";
$dbname = "web_proje";
$username = "root";
$password = "1234";

try{
	
	$con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", "$username", "$password");

/* if there is an error while connecting to database, show the message */	
}catch(PDOException $error){
	echo "Hata oluştu.". $error -> getMessage();
}


?>