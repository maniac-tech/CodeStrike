 <?php
$servername=getenv('DATABASE_SERVER_NAME');
	$databaseName=getenv('DATABASE_NAME');
	$tableName=getenv('DATABASE_TABLE_MEMBERS');
	$username=getenv('DATABASE_USERNAME');
	$password=getenv('DATABASE_PASSWORD');


// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO sqlTest (test1,test2) VALUES (?, ?)");
$stmt->bind_param("ss", $firstname, $lastname);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";

$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";

$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?> 