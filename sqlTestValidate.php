<?php 
	require_once('sqlTestConnect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		// $name=$_POST["fullName"];
 		// $emailID=$_POST["emailID"];
 		

 		// $query="INSERT INTO sqlTest (test1,test2) VALUES ('$name','$emailID')";

 		// $result=$conn->query($query);

 		// if($result){
 		// 	header("location:RegComplete.html");
 		// }
 		// else{
 		// 	header("location:RegFailed.html");
 		// }
 		// 
 		
 		$stmt = $mysqli->prepare("INSERT INTO sqlTest VALUES (?, ?)");
$stmt->bind_param('ss', $name, $emailID);

$name="stuffed";
$emailID="Value";

/* execute prepared statement */
$stmt->execute();

/* close statement and connection */
$stmt->close();

 	}
 	else{
 		echo " <br>Error in validate!!";
 	}
 ?>