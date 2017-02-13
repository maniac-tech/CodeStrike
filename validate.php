<?php
	//include database config file 
include('connect.php');
require_once('interview2017Connect.php');

session_start();

$id="0";
$console='';
$session_id='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$id=$_POST["loginID"];
	$password=$_POST["loginPassword"];

	//create query
	$query="SELECT * FROM login WHERE id='$id' AND password='$password'";
	$result=$conn->query($query);

			//check the query in the database
	if ($result){
		if ($result->num_rows > 0){	
					//Create session id and store them 
			session_regenerate_id();
			$user=$result->fetch_assoc();

			$_SESSION['SESS_MEMBER_ID']=$user['id'];
			
			$session_id=$_SESSION['SESS_MEMBER_ID'];
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<p><h1>CodeStrike-HQ</h1></p>
	<p><h1><u>Registration 2017 Database</u></h1></p>
	
	<p>
		Below is the table of registered students, apart from the starting few entries all the data has been <u>injected</u>.
		<p>
		<table>
			<?php 
			$query="SELECT Name FROM Interview2017";
			$result=$conn->query($query);

			if ($result->num_rows > 0){
				while ($row=$result->fetch_assoc()){
					echo "<tr><td>".$row["Name"]."</td></tr>";
				}
			}
			else
				echo "No Results";
			?>
		</table>
		</p>	
	</p>
</body>
</html>