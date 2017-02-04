<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name=$_POST["loginID"];
		$password=$_POST["password"];

		if ($name="admin" && $password=="admin")
			header("location:https://www.google.com");
		else
			header("location:https://www.yahoo.com");
	}
 ?>