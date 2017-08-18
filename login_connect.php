<?php 
	$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_3');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');

	// $servername='localhost';
	// $username='root';
	// $password='';
	// $databaseName='dashboard';
	// $tableName='users';

	//create connection
	$conn=mysqli_connect($servername,$username,$password,$databaseName);

	//check connection
	if (!$conn){
		die('Connection failed:'.mysqli_connect_error());
	}
	
 ?>