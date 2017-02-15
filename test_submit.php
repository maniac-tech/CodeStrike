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

	$rq1=$_SESSION["q1"];
	$rq2=$_SESSION["q2"];
	$rq3=$_SESSION["q3"];
	$rq4=$_SESSION["q4"];
	$rq5=$_SESSION["q5"];
	$ra1=$_POST["option1"];
	$ra2=$_POST["option2"];
	$ra3=$_POST["group1"];
	$ra4=$_POST["answer1"];
	$ra5=$_POST["answer2"];

	$query = "INSERT INTO Results2017 (Q1, A1, Q2, A2,Q3, A3, Q4, A4, Q5, A5) VALUES ('$rq1','$rq2','$rq3','$rq4','$rq5','$ra1','$ra2','$ra3','$ra4','$ra5')";

	$result=$conn->query($query);
	if ($result){
		echo "Hello";
	}
	else{
		echo "Bye";
	}
 ?>