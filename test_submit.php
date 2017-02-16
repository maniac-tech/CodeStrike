<?php
	include ('test_validate.php');
	session_start(); 
	require('test_connect.php');
	
	// // Question1
	// echo "Question is : ".$_SESSION["q1"]."<br>";
	// echo "Answer is ".$_POST["option1"]."<br>";

	// //Question2
	// echo "Question is : ".$_SESSION["q2"]."<br>";
	// echo "Answer is ".$_POST["option2"]."<br>";
	
	// //Question3
	// echo "Question is : ".$_SESSION["q3"]."<br>";
	// echo "Answer is ".$_POST["group1"]."<br>";

	// //Question4
	// echo "Question is : ".$_SESSION["q4"]."<br>";
	// echo "Answer is ".$_POST["answer1"]."<br>";
	// //Question5
	// echo "Question is : ".$_SESSION["q5"]."<br>";
	// echo "Answer is ".$_POST["answer2"]."<br>";
	
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

	$query = "INSERT INTO Results2017 (Name, Year, Stream, Q1, A1, Q2, A2, Q3, A3, Q4, A4, Q5, A5) VALUES ('Abhishek', 'Jain', '9876543211',
			\"'$rq1'\",
			\"'$ra1'\",
			\"'$rq2'\",
			\"'$ra2'\",
			\"'$rq3'\",
			\"'$ra3'\",
			\"'$rq4'\",
			\"'$ra4'\",
			\"'$rq5'\",
			\"'$ra5'\" )";
	echo $query;

	$result=$conn->query($query);
	if ($result){
		echo "Query Fired!!";
	}
	else{
		echo $conn->error;
	}
	ob_start(); // ensures anything dumped out will be caught
	            // do stuff here
	             $url = 'http://www.codestrike.in/interview2017.php'; // this can be set based on whatever

	            // clear out the output buffer
	            while (ob_get_status()) 
	            {
	                ob_end_clean();
	            }

	            // no redirect
	            header( "Location: $url" );
 ?>
