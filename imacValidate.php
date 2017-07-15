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
		// ON SUCCESSFUL CAPTCHA VALIDATION, ALLOW DATABASE ENTRY:
		$fname=$_POST["fname"]; 
		$lname=$_POST["lname"];
		$name;
		$emailID=$_POST["email"];
		$mobileNo=$_POST["phone"];
		$year=$_POST["year"];
		$branch=$_POST["stream"];

 		// REGEX EXPRESSIONS TO AVOID SQL INJECTIONS:
 		
 		// NAME VALIDATION:
 		if (!preg_match("/^[a-zA-Z]*$/", $fname)){ 
 			echo "PLEASE ENTER ONLY ALPHABETS IN THE NAME FIELD, NO SYMBOLS, NUMBERS OR ANY SPECIAL CHARACTERS.<br>";
 		}
 		else{
 			if (!preg_match("/^[a-zA-Z]*$/", $lname)){
 				echo "PLEASE ENTER ONLY ALPHABETS IN THE NAME FIELD, NO SYMBOLS, NUMBERS OR ANY SPECIAL CHARACTERS.<br>";
 			}
 			else{
 				//echo "NAME HAS BEEN MATCHED.<BR>";
 				$name = $fname." ".$lname; //COMBINED FIRST NAME AND LAST NAME INTO ONE VARIABLE

 				// IF THE NAME IS ACCEPTABLE, PROCEED TO CHECK FOR EMAIL ID:
 				// EMAIL CHECKING:
 				if (!filter_var($emailID,FILTER_VALIDATE_EMAIL)){
 					echo "ENTER A VALID EMAIL ADDRESS.<br>";
 				}
 				else{
 					// echo "EMAIL HAS BEEN MATCHED.<BR>";

 					// IF THE EMAIL IS ACCEPTABLE, PROCEED TO CHECK FOR NUMBER:
 					//NUMBER CHECKING :
 					if (!preg_match("/[0-9]{10,10}/", $mobileNo)){
 						echo "PLEASE ENTER ONLY 10-DIGIT CONTACT NUMBER.<br>";
 					}
 					else{
 						// echo "NUMBER HAS BEEN MATCHED.<BR>";
 						
 						// IF THE NUMBER IS ACCEPTABLE, PROCEED TO CHECK FOR YEAR:
 						//YEAR CHECKING :
 						if (!preg_match("/^.{2}$/", $year)){
 							echo "ENTER A VALID YEAR. i.e FE,SE,TE or BE.<br>";
 						}
 						else{
 							if (preg_match("/^[a-zA-Z]*$/", $year)){
 								// echo "YEAR HAS BEEN MATCHED.<BR>";
			 					
			 					// IF THE YEAR IS ACCEPTABLE, PROCEED TO CHECK FOR BRANCH:
			 					//BRANCH CHECKING :
 								if (preg_match("/^[a-zA-Z]*$/", $branch)){
 									// echo "BRANCH HAS BEEN MATCHED.<BR>";
 									
 									// IF THE BRANCH IS ACCEPTABLE, WRITE THE DATA TO DB:
 									$query="INSERT INTO $tableName (Name,Year,Branch,Email,Mobile) VALUES ('$name','$year','$branch','$emailID','$mobileNo')";
 									$result=$conn->query($query);

 									if ($result) {
 										echo "Your Registration has been completed.<br>";
 									}
 									else{
 										echo "Registration Failed. Try Again. If the problem still occurs, contact the iMac Incharge.<br>";
 									}
 								}
 								else{
 									echo "ENTER A VALID BRANCH. i.e IT,CMPN,ELEX,ELEC or EXTC. <br>";
 								}
 							}
 							else{
 								echo "ENTER A VALID YEAR. i.e FE,SE,TE or BE.<br>";
 							}
 						}
 					}
 				}
 			}
 		}
 	}
 }