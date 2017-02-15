<?php
	session_start(); 
	require('test_connect.php');
	$rq1=$_SESSION["q1"];
	$ra1=$_POST["option1"];
	$rq2=$_SESSION["q2"];
	$ra2=$_POST["option2"];
	$rq3=$_SESSION["q3"];
	$ra3=$_POST["option3"];
	$rq4=$_SESSION["q4"];
	$ra4=$_POST["option4"];
	$rq5=$_SESSION["q5"];
	$ra5=$_POST["option5"];
	// Question1
	echo "Question is : ".$rq1."<br>";
	echo "Answer is ".$ra1."<br>";

	//Question2
	echo "Question is : ".$rq2."<br>";
	echo "Answer is ".$ra2."<br>";
	
	//Question3
	echo "Question is : ".$rq3."<br>";
	echo "Answer is ".$ra3."<br>";

	//Question4
	echo "Question is : ".$rq4."<br>";
	echo "Answer is ".$ra4."<br>";
	//Question5
	echo "Question is : ".$rq5."<br>";
	echo "Answer is ".$ra5."<br>";

	// $query = "INSERT INTO Results2017 (Name, Year, Stream, Q1, A1, Q3, A3, Q4, A4, Q5, A5) VALUES ()";
 ?>