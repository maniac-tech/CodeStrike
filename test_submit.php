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
	echo "Answer is ".$_POST["option3"]."<br>";

	//Question4
	echo "Question is : ".$_SESSION["q4"]."<br>";
	echo "Answer is ".$_POST["option4"]."<br>";
	//Question5
	echo "Question is : ".$_SESSION["q5"]."<br>";
	echo "Answer is ".$_POST["option5"]."<br>";

	// $query = "INSERT INTO Results2017 (Name, Year, Stream, Q1, A1, Q3, A3, Q4, A4, Q5, A5) VALUES ()";
 ?>