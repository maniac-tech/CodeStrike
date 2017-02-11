<?php 
	$servername='localhost';
	$databaseName='phplogin';
	$tableName='login';
	$username='root';
	$password='';

	//create connection
	$conn=new mysqli($servername,$username,$password,$databaseName);

	//check connection
	if ($conn->connect_error){
		die('Connection failed:'.$conn->connect_error);
	}
 ?>