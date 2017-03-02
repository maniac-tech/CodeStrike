<?php

$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_MEMBERS');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD'
$mysqli = new mysqli($servername, $username, $password, 'sqlTest');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $mysqli->prepare("INSERT INTO sqlTest VALUES (?, ?)");
$stmt->bind_param('ss', $code, $language);

$code = 'DEU';
$language = 'Bavarian';


/* execute prepared statement */
$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

/* close statement and connection */
$stmt->close();