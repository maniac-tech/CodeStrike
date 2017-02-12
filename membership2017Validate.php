<?php 
	require_once('membership2017Connect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["fullName"];
 		$emailID=$_POST["emailID"];
 		$mobileNo=$_POST["mobileNo"];

 		$query="INSERT INTO Members2017 (Name,EmailID,MobileNo) VALUES ('$name','$emailID','$mobileNo')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 	}
 ?>