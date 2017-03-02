<?php 
	require_once('sqlTestConnect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["fullName"];
 		$emailID=$_POST["emailID"];
 		

 		$query="INSERT INTO sqlTest (test1,test2) VALUES ('$name','$emailID')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 	}
 	else{
 		echo " <br>Error in validate!!";
 	}
 ?>