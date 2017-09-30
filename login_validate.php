<?php
	//include database config file 
include('login_connect.php');
//require_once('interview2017Connect.php');

session_start();

$id="0";
$console='';
$session_id='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$id=$_POST["loginID"];
	$password=$_POST["loginPassword"];
	
	// Checking the received data for correct expressions:
	if (!preg_match("/^[a-zA-Z]*$/",$id)){
		echo "Enter only characters";
	}else{

	//create query
		$query="SELECT * FROM users WHERE username='$id'";
		$result = mysqli_query($conn,$query);

			//check the query in the database
		if ($result){
			$row=mysqli_fetch_assoc($result);
			$hash=$row["password_hash"];
			if (password_verify($password,$hash)){
				$_SESSION['userId']=$row['UserID'];
				header('Location:admin.php');
			}else{
				header('Location:login.php');
			}
		}
	}
}
?>
