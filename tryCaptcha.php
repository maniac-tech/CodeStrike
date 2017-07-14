<?php 
require_once('imacConnect.php');

$regStatus="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	// Captcha Validation
	$captcha = $_POST['g-recaptcha-response'];
	$captchaSecretKey=	getenv('GOOGLE_RECAPTCHA_SECRET');
	$clientIp = $_SERVER['REMOTE_ADDR'];
	$captchResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecretKey."&response=".$captcha);

	if ($captchResponse.success==false){
		echo "FAILED";
	}
	else{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$name;
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

 		// Regex Expressions:
 		// NAME CHECKING:
 		if (!preg_match("/^[a-zA-Z]*$/", $fname)){ 
 			echo "FIRST NAME NO MATCH<br>";
 		}
 		else{
 			if (!preg_match("/^[a-zA-Z]*$/", $lname)){
 				echo "LAST NAME NO MATCH";
 			}
 			else{
 				echo "NAME HAS BEEN MATCHED.<BR>";
 				echo "doubt";
 				$name = $fname." ".$lname;
 				// IF THE NAME IS ACCEPTABLE, CHECK FOR EMAIL ID:
 				// EMAIL CHECKING:
 				if (!filter_var($emailID,FILTER_VALIDATE_EMAIL)){
 					echo "EMAIL NOT PROPER<br>";
 				}
 				else{
 					echo "EMAIL HAS BEEN MATCHED.<BR>";
 					// IF THE EMAIL IS ACCEPTABLE, CHECK FOR NUMBER:
 					//NUMBER CHECKING :
 					if (!preg_match("/[0-9]{10,10}/", $mobileNo)){
 						echo "number not proper<br>";
 					}
 					else{
 						echo "NUMBER HAS BEEN MATCHED.<BR>";
 						// IF THE NUMBER IS ACCEPTABLE, CHECK FOR YEAR:
 						//YEAR CHECKING :
 						if (!preg_match("/^.{2}$/", $year)){
 							echo "year not proper<br>";
 						}
 						else{
 							if (preg_match("/^[a-zA-Z]*$/", $year)){
 								echo "YEAR HAS BEEN MATCHED.<BR>";
			 					// IF THE YEAR IS ACCEPTABLE, CHECK FOR BRANCH:
			 					//BRANCH CHECKING :
 								if (preg_match("/^[a-zA-Z]*$/", $branch)){
 									echo "BRANCH HAS BEEN MATCHED.<BR>";
 									// IF THE BRANCH IS ACCEPTABLE, WRITE THE DATA TO DB:
 									$query="INSERT INTO $tableName (Name,Year,Branch,Email,Mobile) VALUES ('$name','$year','$branch','$emailID','$mobileNo')";
 									$result=$conn->query($query);

 									if ($result) {
 										echo "REG COMPLETE.";
 									}
 									else{
 										echo "REG FAILED";
 									}
 								}
 								else{
 									echo "branch not proper";
 								}
 							}
 							else{
 								echo "only letters in years pls";
 							}
 						}
 					}
 				}
 			}
 		}
 	}
 }