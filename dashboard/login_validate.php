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
		// $query="SELECT * FROM $tableName WHERE username='$id'";
		// $result = mysqli_query($conn,$query);

		$result = pg_query_params($dbconn, "SELECT * FROM $tableName WHERE userID='$1'", array($id));
		echo "result done";
		//check the query in the database
		/*
		if ($result){
			$row=mysqli_fetch_assoc($result);
			$hash=$row["password"];
			if (password_verify($password,$hash)){
				$_SESSION['userId']=$row['Unique ID'];
				$_SESSION['username']=$row['username'];
				header('Location:index.php');
			}else{
				header('Location:login.php');
			}
		}
		*/

		echo "<br> Result:". pg_result_status($result) ." <br>";
	}
}
?>