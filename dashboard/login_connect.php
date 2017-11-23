<?php
// Connecting, selecting database
$servername=getenv('PostGRE_DB_Host');
$databaseName=getenv('PostGRE_DB');
$username=getenv('PostGRE_DB_User');
$password=getenv('PostGRE_DB_Password');
// $tableName=getenv('DATABASE_TABLE_NAME_DASHBOARDUSERS');

$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
if (!$dbconn){
	echo ('Could not connect: ' . pg_last_error().'<br>');
	echo pg_result_error($dbconn);
}

?>
