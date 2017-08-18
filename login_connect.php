<?php 
	$servername=getenv('DATABASE_SERVER_NAME_IMAC');
	$databaseName=getenv('DATABASE_NAME_IMAC');
	$tableName=getenv('DATABASE_TABLE_3');
	$username=getenv('DATABASE_USERNAME_IMAC');
	$password=getenv('DATABASE_PASSWORD_IMAC');

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