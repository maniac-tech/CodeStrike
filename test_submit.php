<?php
	session_start(); 
	require('test_connect.php');
	
	// Question1
	echo "Question is : ".$_SESSION["q1"]."<br>";
	echo "Answer is ".$_POST["option1"]."<br>";

	//Question2
	echo "Question is : ".$_SESSION["q2"]."<br>";
	echo "Answer is ".$_POST["option2"]."<br>";
	
	//Question3
	echo "Question is : ".$_SESSION["q3"]."<br>";
	echo "Answer is ".$_POST["group1"]."<br>";

	//Question4
	echo "Question is : ".$_SESSION["q4"]."<br>";
	echo "Answer is ".$_POST["answer1"]."<br>";
	//Question5
	echo "Question is : ".$_SESSION["q5"]."<br>";
	echo "Answer is ".$_POST["answer2"]."<br>";

	$query = "INSERT INTO Results2017 (Q1, A1, Q3, A3, Q4, A4, Q5, A5) VALUES ('$_SESSION["q1"]','$_POST["option1"]','$_SESSION["q2"]','$_POST["option2"]','$_SESSION["q3"]','$_POST["group1"]','$_SESSION["q4"]','$_POST["answer1"]','$_SESSION["q5"]','$_POST["answer2"]')";

	$result=$conn->query($query);
	if ($result){
		echo "Hello";
	}
	else{
		echo "Bye";
	}
 ?>