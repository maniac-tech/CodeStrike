<?php
	//include database config file 
include('connect.php');
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
	<p><h1>After-Login Page</h1></p>
	<p>Below is a detailed suammary of the connection.</p>
	
	<p>
		Your Credentials:<br>
		Your username is <?php echo $session_id;?>	

		<hr>
		The interview page will be shown here after successful implementation.
		<br>
		<a href="anotherpage.php">Move to another page</a>	
		<br>
		Click here to <a href="logout.php">logout</a>	
	</p>
</body>
</html>