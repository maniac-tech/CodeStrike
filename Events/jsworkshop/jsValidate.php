<?php 
// Importing all the required files:
require_once('jsConnect.php');
require '../../vendor/autoload.php';

//Dependcies for using SparkPost as our email delievery client:
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

// Declaring Global variables: is for False nd 1 is for True
$status_captcha;

// Form Variables:
$form_fname;
$form_lname;
$form_name;
$form_emailId;
$form_mobileNo;
$form_year;
$form_branch;
$dbconn=$dbconn;

// Declating all the required functions:
function insertData($func_var_name,$func_var_year,$func_var_branch,$func_var_emailID,$func_var_mobileNo){
	global $tableName_imacTraining;
	global $dbconn;

	//Re-establishing DB connection...
	$servername=getenv('PostGRE_DB_Host');
	$databaseName=getenv('PostGRE_DB');
	$username=getenv('PostGRE_DB_User');
	$password=getenv('PostGRE_DB_Password');
	$tableName_imacTraining = getenv('PostGRE_DB_JavascriptWorkshop_2018');

	$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
	if (!$dbconn){
		echo ('Could not connect: ' . pg_last_error().'<br>');
	}else{ 
		//----- PostGRE SQL Commands -----
		$query="INSERT INTO $tableName_imacTraining (\"Name\",\"Year\",\"Branch\",\"Email\",\"Mobile\") VALUES ('$func_var_name','$func_var_year','$func_var_branch','$func_var_emailID','$func_var_mobileNo')";
		$result=pg_query($dbconn,$query);
		// -X-X-X- End of PostGRE SQL Commands -X-X-X-

		//----- SQL Commands -----
		/*
		$query="INSERT INTO $tableName (Name,Year,Branch,Email,Mobile) VALUES ('$func_var_name','$func_var_year','$func_var_branch','$func_var_emailID','$func_var_mobileNo')";
		$result=$conn->query($query);
		*/
		// -X-X-X- End of SQL Commands -X-X-X-

		if ($result) {
			// Mailing client code:
			// Refer to Sparkpost Mail delievery documentation in case of any query.

			// Note: Since, the mails are being sent on runtime, we make use of substituion data to send emails to the registered students on their respective IDs.

			$httpClient = new GuzzleAdapter(new Client());
			$sparky = new SparkPost($httpClient, ["key" => getEnv("SPARKPOST_API_KEY_IMAC_DELIEVERY")]);			
			$promise = $sparky->transmissions->post([

				'substitution_data' => ['name' => 'Javascript Workshop'],
				'recipients' => [
					[
						'address' => [
							// Fetching the form data i.e. Name and Email ID, from the form data.
							'name' => $func_var_name,
							'email' => $func_var_emailID,
						],
					],
				],
				'content' => [
					'from' => [
						'name' => 'CodeStrike',
						'email' => 'donotreply@codestrike.in',
					],
					'subject' => 'Notification message for JavaScript Workshop 2018',
					'html' => '<html>
					<body style="background-color: grey; width:100%; font-family: sans-serif;">
					<table style="background-color: white;margin-left: 5%; margin-right: 5%; margin-top: 5%;margin-bottom: 5%;width: 90%;">
					<tr >
					<td style="width: 100%; border-bottom: solid; border-color: grey; border-width: 1%;">
					<center>
					<img src="http://www.codestrike.in/img/logo.png" alt="" style="width: 25%; align-content: center;">
					</center>
					</td>
					</tr>
					<tr >
					<td>
					<p style="margin-top: 2%; margin-left:2%;margin-right: 2%;">
					Hi {{address.name}},
					</p>
					<p style="margin-left:2%; margin-right: 2%;margin-bottom: 2%;">
					We have recorded your registration for the Introduction to Javascript Workshop - 2018.
					Your registration will be confirmed once you have paid the registration fee. <br> 

					The payment desks will be set up in the college canteen or on the 2nd/3rd floor of our college on the following day and time:
					<br>
					<ul>
					<li>28th February - 10 am to 2.30 pm</li>
					<li>1st March - 9.30 am to 3.30pm</li>
					</ul>
					<br>
					Registration fee: Rs. 150
					<br><br>
					Limited seats only! Complete the payment at the earliest to confirm your seats!
					<br><br>
					Thank You,<br>
					Team CodeStrike.
					</p>
					</td>
					</tr>
					</table>
					</body>
					</html>',
        		// 'text' => 'Congratulations, {{name}}! You just sent your very first mailing!',
				]
			]);
			try {
				$response = $promise->wait();
				echo "try:";
				echo $response->getStatusCode()."\n";
				print_r($response->getBody())."\n";
			} catch (\Exception $e) {
				echo $e->getCode()."\n";
				echo $e->getMessage()."\n";
			}
			header('Location:jsworkshop.php');
			// echo "Successful submission of form";
		}
		else{
			echo "Registration failed. Try Again, if the problem persists, contact the Lab.";
			// echo "pg_querya output:".pg_query($dbconn,$query);
			// header('Location:http://www.google.com');
		}
	}
}

function captchaValidation(){
	//Captcha Validation as instructed by Google:
	// Refer to the documentation of Google Cpatcha to understand the validation.
	$captcha = $_POST['g-recaptcha-response'];
	$captchaSecretKey=	getenv('GOOGLE_RECAPTCHA_SECRET');
	$clientIp = $_SERVER['REMOTE_ADDR'];
	$captchResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$captchaSecretKey."&response=".$captcha);
	
	// The success status of captcha is being returned:
	if ($captchResponse.success==false){
		echo "Captcha Failed.";
		return 0; //Captcha Failed
	}
	else{
		//On Captcha Successful:
		// Fetch form data
		fetchFormData();

		// After we have succesfully retrieved the data:
		// Regular expression check
		regularExpression();
		return 1; 
	}
}

function fetchFormData(){
	global $form_fname, $form_lname, $form_name, $form_emailId, $form_mobileNo, $form_year, $form_branch;

	$form_fname=$_POST["fname"]; 
	$form_lname=$_POST["lname"];
	$form_emailId=$_POST["email"];
	$form_mobileNo=$_POST["phone"];
	$form_year=$_POST["year"];
	$form_branch=$_POST["stream"];
}

function regularExpression(){
	global $form_fname, $form_lname, $form_name, $form_emailId, $form_mobileNo, $form_year, $form_branch;
	// REGEX EXPRESSIONS TO AVOID SQL INJECTIONS
	// NAME VALIDATION:
	if (!preg_match("/^[a-zA-Z]*$/", $form_fname)){ 
		echo "PLEASE ENTER ONLY ALPHABETS IN THE NAME FIELD, NO SYMBOLS, NUMBERS OR ANY SPECIAL CHARACTERS.<br>";
	}
	else{
		if (!preg_match("/^[a-zA-Z]*$/", $form_lname)){
			echo "PLEASE ENTER ONLY ALPHABETS IN THE NAME FIELD, NO SYMBOLS, NUMBERS OR ANY SPECIAL CHARACTERS.<br>";
		}
		else{
 				//echo "NAME HAS BEEN MATCHED.<BR>";
 				$name = $form_fname." ".$form_lname; //COMBINED FIRST NAME AND LAST NAME INTO ONE VARIABLE

 				// IF THE NAME IS ACCEPTABLE, PROCEED TO CHECK FOR EMAIL ID:
 				// EMAIL CHECKING:
 				if (!filter_var($form_emailId,FILTER_VALIDATE_EMAIL)){
 					echo "ENTER A VALID EMAIL ADDRESS.<br>";
 				}
 				else{
 					// echo "EMAIL HAS BEEN MATCHED.<BR>";

 					// IF THE EMAIL IS ACCEPTABLE, PROCEED TO CHECK FOR NUMBER:
 					//NUMBER CHECKING :
 					if (!preg_match("/[0-9]{10,10}/", $form_mobileNo)){
 						echo "PLEASE ENTER ONLY 10-DIGIT CONTACT NUMBER.<br>";
 					}
 					else{
 						// echo "NUMBER HAS BEEN MATCHED.<BR>";
 						
 						// IF THE NUMBER IS ACCEPTABLE, PROCEED TO CHECK FOR YEAR:
 						//YEAR CHECKING :
 						if (!preg_match("/^.{2}$/", $form_year)){
 							echo "ENTER A VALID YEAR. i.e FE,SE,TE or BE.<br>";
 						}
 						else{
 							if (preg_match("/^[a-zA-Z]*$/", $form_year)){
 								// echo "YEAR HAS BEEN MATCHED.<BR>";

			 					// IF THE YEAR IS ACCEPTABLE, PROCEED TO CHECK FOR BRANCH:
			 					//BRANCH CHECKING :
 								if (preg_match("/^[a-zA-Z]*$/", $form_branch)){
 									// echo "BRANCH HAS BEEN MATCHED.<BR>";
 									
 									// IF THE BRANCH IS ACCEPTABLE, WRITE THE DATA TO DB:
 									insertData($name,$form_year,$form_branch,$form_emailId,$form_mobileNo);
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


 	function error($func_var_mobileNo){
 		global $form_fname, $form_lname, $form_name, $form_emailId, $form_mobileNo, $form_year, $form_branch;
 		global $tableName_imacTraining, $dbconn;
 		$sql = "SELECT Name FROM $tableName WHERE Mobile='$func_var_mobileNo'";
 		$result = mysqli_query($conn, $sql);

 		if (mysqli_num_rows ($result) > 0){
 			echo "You have been Registered already.";
 		}
 		else{
 			echo "Registration Failed. Try Again. If the problem still occurs, contact the iMac Incharge.<br>";
 			echo $conn->error;
 		}
 	}

 	function main(){
 		if($_SERVER["REQUEST_METHOD"]=="POST"){
 			$status_captcha = captchaValidation();
 		}
 	}

 	main();

 	?>