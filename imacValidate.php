<?php 
	require_once('imacConnect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["name"];
 		$emailID=$_POST["email"];
 		$mobileNo=$_POST["phone"];
 		$year=$_POST["year"];
 		$branch=$_POST["stream"];
/*
 		$query="INSERT INTO Members2017 (Name,EmailID,MobileNo) VALUES ('$name','$emailID','$mobileNo')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 		*/
 		echo $name;
 		if (!preg_match("/^[a-zA-Z]*$/", $name)){
 			echo "NO MATCH<br>";
 		}
 		else{
 			echo "Match <br>";
 		}
 		if (!filter_var($emailID,FILTER_VALIDATE_EMAIL)){
 			echo "EMAIL NOT PROPER<br>";
 		}
 		else{
 			echo "proper<br>";
 		}
 		if (!preg_match("/[0-9]{10,10}/", $mobileNo)){
 			echo "number not proper<br>";
 		}
 		else{
 			echo "number proper";
 		}
 		if (!preg_match("/^.{2}$/", $year)){
 			echo "year not proper<br>";
 		}
 		else{
 			if (preg_match("/^[a-zA-Z]*$/", $year)){
	 			echo "year proper";
	 		}
	 		else{
	 			echo "only letters in years pls";
	 		}
 		}
 		if (preg_match("/^[a-zA-Z]*$/", $branch)){
 			echo "branch proper";
 		}
 		else{
 			echo "branch not proper";
 		}
 	}
 	else{
 		echo " <br>Error in validate!!";
 	}
 ?>