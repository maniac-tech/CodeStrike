<?php 
	require_once('interview2017Connect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["name"];
 		$emailID=$_POST["email"];
 		$mobileNo=$_POST["phone"];

 		$query="INSERT INTO  Interview2017(Name,EmailID,MobileNo) VALUES ('$name','$emailID','$mobileNo')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 	}
 ?>