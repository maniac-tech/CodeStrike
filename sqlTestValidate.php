<!-- <?php 
	require_once('sqlTestConnect.php');



	if ($_SERVER["REQUEST_METHOD"]=="POST"){

		echo "<br>If loop entered";
		$stmt = $mysqli->prepare("INSERT INTO sqlTest (test1,test2) VALUES (?, ?)");
		$stmt->bind_param('ss', $name, $emailID);

		echo "<br>Echo done";
		$name=$_POST["fullName"];
		$emailID=$_POST["emailID"];

		/* execute prepared statement */
		$stmt->execute();

		echo "<br>Post execution";
		printf("%d Row inserted.\n", $stmt->affected_rows);

		/* close statement and connection */
		$stmt->close();

		/* close connection */
		$conn->close();
	}
?> -->

<?php 
	require_once('sqlTestConnect.php');
 	
 	$regStatus="";

 	if ($_SERVER["REQUEST_METHOD"]=="POST"){
 		$name=$_POST["fullName"];
 		$emailID=$_POST["emailID"];
 		$mobileNo=$_POST["mobileNo"];

 		$query="INSERT INTO sqlTest (test1,test2) VALUES ('$name','$emailID')";

 		$result=$conn->query($query);

 		if($result){
 			header("location:RegComplete.html");
 		}
 		else{
 			header("location:RegFailed.html");
 		}
 	}
 ?>