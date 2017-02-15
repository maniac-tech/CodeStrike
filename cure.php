<?php  
	require ('interview2017Connect.php');
	$query = "DELETE FROM `Interview2017` WHERE `Name'='Jeet Bafna'";

	$result = $conn->query($query);
	if ($result){
		echo "Success";
	}
	else
		echo $conn->error;
?>	