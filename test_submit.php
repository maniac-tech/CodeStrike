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
	//Question4
	//Question5
 ?>