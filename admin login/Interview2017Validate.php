<?php 
	require_once('Interview2017Connect.php');

	echo "Printing from Interview2017Validate.php, before request check<br>";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name=$_POST["fullName"];
		$emailID=$_POST["emailID"];
		$mobile=$_POST["mobileNo"];

		echo "Printing from Interview2017Validate.php, after succesfull request check <br>";

		echo $name."<br>";
		echo $emailID."<br>";
		echo $mobile."<br>";

		$query="INSERT INTO Interview2017 (Name,EmailID,MobileNo) VALUES ('$name','$emailID','$mobile')";
		$result=$conn->query($query);

		if($result)
			echo "Success";
		else
			echo "Failed: ".$conn->error;
	}
 ?>