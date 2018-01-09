<?php 

	$servername=getenv('DATABASE_URL');
	$databaseName=getenv('PostGRE_DB');
	$username=getenv('PostGRE_DB_User');
	$password=getenv('PostGRE_DB_Password');

	// $servername="localhost";
	// $databaseName="imac";
	// $tableName;
	// $username="root";
	// $password="";

	//create connection
	$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password")
or die('Could not connect: ' . pg_last_error());
	
	?>