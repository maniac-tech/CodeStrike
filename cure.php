<?php  
	require ('interview2017Connect.php');
	$query = "DELETE FROM `Interview2017` WHERE `Interview2017`.`Name` = 'fatxcajb' AND `Interview2017`.`EmailID` = 'sample@email.tst' AND `Interview2017`.`MobileNo` = '555-666-06' AND `Interview2017`.`Branch` = '1' AND `Interview2017`.`Year` = '${9999216+9999125}' AND `Interview2017`.`DOB` = '0000-00-00' AND `Interview2017`.`UniqueID` = '58a1e759a271f5.93043276' AND `Interview2017`.`Status` = 3 AND `Interview2017`.`Timestamp` = '0000-00-00 00:00:00' LIMIT 1";

	$result = $conn->query($query);
	if ($result){
		echo "Success";
	}
	else
		echo $conn->error;
?>	