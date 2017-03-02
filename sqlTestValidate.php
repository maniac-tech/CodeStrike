<?php

$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_MEMBERS');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD'

$link = mysqli_connect($servername, $username, $password, $databaseName);

/* check connection */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = mysqli_prepare($link, "INSERT INTO sqlTest VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, 'ss', $code, $language);

$code = 'DEU';
$language = 'Bavarian';


/* execute prepared statement */
mysqli_stmt_execute($stmt);

printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));

/* close statement and connection */
mysqli_stmt_close($stmt);

/* close connection */
mysqli_close($link);
?>