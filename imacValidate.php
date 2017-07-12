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

 		// Regex Expressions:
 		// NAME CHECKING:
 		if (!preg_match("/^[a-zA-Z]*$/", $name)){ 
 			echo "NO MATCH<br>";
 		}
 		else{
 			echo "NAME HAS BEEN MATCHED.<BR>";
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
 	else{
 		echo " <br>Error in validate!!";
 	}
 	?>