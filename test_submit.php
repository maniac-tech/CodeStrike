<?php
	session_start(); 
	require('test_connect.php');
	
	// Question1
	echo "Question is : <br>".$_SESSION["q1"]."<br>";
	echo "Answer is ".$_POST["option1"]."<br>";

	//Question2
	echo "Question is : <br>".$_SESSION["q2"]."<br>";
	echo "Answer is ".$_POST["option2"]." ".$_SESSION["answer1"]."<br>";
	
	//Question3
	echo "Question is : <br>".$_SESSION["q3"]."<br>";
	
	//Question4
	echo "Question is : <br>".$_SESSION["q4"]."<br>";
	
	//Question5
	echo "Question is : <br>".$_SESSION["q5"]."<br>";
 ?>