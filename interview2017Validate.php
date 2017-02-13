<?php 
	require_once('interview2017Connect.php');
 	
 	$regStatus="";
 	session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["name"];
 		$emailID=$_POST["email"];
 		$mobileNo=$_POST["phone"];
 		$branch=$_POST["stream"];
 		$year=$_POST["year"];
 		$uid=uniqid('',true);
 		echo $uid;

 		$query="INSERT INTO  Interview2017(Name,EmailID,MobileNo,Branch,Year,UniqueID) VALUES ('$name','$emailID','$mobileNo','$branch','$year','$uid')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 	}
 ?>
