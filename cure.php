<?php  
	require ('interview2017Connect.php');
	$query = "DELETE FROM `Interview2017` WHERE `Interview2017`.`Name` = 'fjqotuko' AND `Interview2017`.`EmailID` = '\r\n SomeCustomInjectedHeader:injected_by_wvs' AND `Interview2017`.`MobileNo` = '555-666-06' AND `Interview2017`.`Branch` = '1' AND `Interview2017`.`Year` = '1967' AND `Interview2017`.`DOB` = '0000-00-00' AND `Interview2017`.`UniqueID` = '58a1e73530cce5.75904258' AND `Interview2017`.`Status` = 3 AND `Interview2017`.`Timestamp` = '0000-00-00 00:00:00' LIMIT 1";

	$result = $conn->query($query);
	if ($result){
		echo "Success";
	}
	else
		echo $conn->error;
?>	