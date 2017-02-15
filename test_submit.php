<?php 
	require('test_connect.php');
	if ($_SERVER('REQUEST_METHOD')=='POST'){
		echo $_SESSION["q1"];
	}
 ?>