<?php
	session_start(); 
	require('test_connect.php');
	echo "Question is : <br>".$_SESSION["q1"]."<br>";
 ?>