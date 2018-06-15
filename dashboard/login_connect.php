<?php
// Database Credentials:
$servername=getenv('PostGRE_DB_Host');
$databaseName=getenv('PostGRE_DB');
$username=getenv('PostGRE_DB_User');
$password=getenv('PostGRE_DB_Password');

// Table Variables:
$tableName=getenv('PostGRE_DB_Users');

// iMac:
$tablename_iMac=getenv('PostGRE_DB_imac');
$tablename_IMac_Coord=getenv('PostGRE_DB_IMac_Co');
$tableName_IMac_interviews = getenv('PostGRE_DB_IMac_intr');

// CodeStrike:
$tablename_JS_2018 = getenv('PostGRE_DB_JavascriptWorkshop_2018');
$tablename_Hacking_2018 = getenv('PostGRE_DB_HackingWorkshop_2018');

$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
if (!$dbconn){
	echo ('Could not connect: ' . pg_last_error().'<br>');
	echo pg_result_error($dbconn);
}

?>
