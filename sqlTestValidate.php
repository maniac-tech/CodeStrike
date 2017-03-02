<?php 
	require_once('sqlTestConnect.php');

	$regStatus="";

	if ($_SERVER["REQUEST_METHOD"]=="POST"){

		$stmt = $mysqli->prepare("INSERT INTO sqlTest VALUES (?, ?)");
		$stmt->bind_param('ss', $name, $emailID);

		$name=$_POST["fullName"];
		$emailID=$_POST["emailID"];
		
		/* execute prepared statement */
		$stmt->execute();

		printf("%d Row inserted.\n", $stmt->affected_rows);

		/* close statement and connection */
		$stmt->close();
		
		/* close connection */
		$mysqli->close();
	}
?>