<?php  
	require ('interview2017Connect.php');
	$query = "DELETE FROM `Interview2017` WHERE `Interview2017`.`Name` = 'hrncdxjo' AND `Interview2017`.`EmailID` = 'sample@email.tst' AND `Interview2017`.`MobileNo` = '555-666-06' AND `Interview2017`.`Branch` = '1' AND `Interview2017`.`Year` = '/etc/passwd' AND `Interview2017`.`DOB` = '0000-00-00' AND `Interview2017`.`UniqueID` = '58a330dc8ac1b5.60816625' AND `Interview2017`.`Status` = 3 AND `Interview2017`.`Timestamp` = '2017-02-14 16:37:10' LIMIT 1";

	$result = $conn->query($query);
	if ($result){
		echo "Success";
	}
	else
		echo $conn->error;
?>	