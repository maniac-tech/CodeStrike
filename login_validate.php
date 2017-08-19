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

	//create query
	$query="SELECT * FROM $tableName WHERE username='$id'";
	$result=$conn->query($query);

			//check the query in the database
	if ($result){
		if ($result->num_rows > 0){	
			$row=mysqli_fetch_assoc($result);
			if ($row['password']==$password){
				// echo "LOGIN GRANTED";
				$_SESSION['userId']=$row['username'];
				header('Location:admin.php');
			}else{
				echo "<script>console.log('Login Denied');</script>";
				header('Location:login.php');
			}
		}
	}
}
?>