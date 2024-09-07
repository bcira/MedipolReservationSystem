<!--database connection-->

<?php
session_start();

include("dbconnect.php");

/* if btnreg button is clicked, add the datas from database */
if(isset($_POST['buttonreg'])){
	
$name = $_POST['name'];

$email = $_POST['email'];

$pnumber = $_POST['pnumber'];

$password = $_POST['password'];

$a_type = $_POST['a_type'];

	
if($con -> exec("INSERT INTO useradmin (name,email,pnumber,password,a_type) VALUES ('$name','$email','$pnumber','$password','$a_type')")) {
	
		/* go to login.php */
		header("Location:homepage.php?id=$id");
	    
	
}else{
	echo("Failed");
	
}

}

/* if btnlogin button is clicked */
if(isset($_POST['buttonlogin'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	/* get datas from database and check username of user there is or not in database */
	$getUser = $con -> prepare("SELECT * FROM useradmin where email =?");
	$getUser -> execute(array($email));
	
	if($getUser -> rowCount()){
		
		/* add datas to session */
		foreach($con -> query("SELECT * FROM useradmin where email = '$email'") as $recvUserDatas){
			
			$current_password = $recvUserDatas['password'];
			$id = $recvUserDatas['id'];
			
			if($password == $current_password){
				
				$_SESSION["login"] = "true";
				$_SESSION["name"]= $recvUserDatas['name'];
				$_SESSION["email"]= $recvUserDatas['email'];
				$_SESSION["pnumber"]= $recvUserDatas['pnumber'];
				$_SESSION["password"]= $recvUserDatas['password'];
				$_SESSION["a_type"]= $recvUserDatas['a_type'];
				$_SESSION["id"] = $id;
				
				
					header("Location:homepage.php?id=$id");
				
					echo "Failed";
				
				
				
				
			}else{
				echo "Şifre Yanlış";
			}
		}
		
		}
	        else{
			echo "Kullanıcı bulunamadı";
	}
	}
