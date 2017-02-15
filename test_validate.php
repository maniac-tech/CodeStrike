<?php
	session_start();
	
	//include database config file 
	include('test_connect.php');
	require_once('interview2017Connect.php');
	echo "test_validate: begun <br>";

	$id="0";
	$console='';
	$session_id='';

	echo "test_validate before if loop <br>";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$id=$_POST["loginID"];
		$password=$_POST["loginPassword"];

		//create query
		$query="SELECT * FROM Members2017 WHERE EmailID='$id' AND MobileNo='$password'";
		$result=$conn->query($query);

				//check the query in the database
		if ($result){
			if ($result->num_rows > 0){	
						//Create session id and store them 
				session_regenerate_id();
				$user=$result->fetch_assoc();

				$_SESSION['SESS_MEMBER_ID']=$user['id'];
				
				$session_id=$_SESSION['SESS_MEMBER_ID'];
				header("location:questionspage.php");
			}
		}
	}
?>