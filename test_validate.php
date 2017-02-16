<?php
	session_start();
	
	//include database config file 
	include('test_connect.php');
	require_once('interview2017Connect.php');
	echo "test_validate: begun <br>";

	echo "test_validate before if loop <br>";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$id=$_POST["loginID"];
		$password=$_POST["loginPassword"];
	
		echo "Test after if loop";
		//create query
		$query="SELECT * FROM Interview2017 WHERE EmailID='$id' AND MobileNo='$password'";
		$result=$conn->query($query);
		echo "<br>".$id."     ".$password."<br>";
				//check the query in the database
		if ($result){
			echo "Result IN";
			if ($result->num_rows > 0){	
						//Create session id and store them 
				session_regenerate_id();
				$user=$result->fetch_assoc();
				$_SESSION['user']=$id;
				$_SESSION['pass']=$password;
				header('location:jeet.php');
			}
			else
				echo "Result IN failed";
		}
		else
			echo "Result failed";
	}
?>
