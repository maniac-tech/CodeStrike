<?php 
require('imacConnect.php');
if (!empty($_POST['checkbox'])){
	$toInsert = $_POST['batchAllotedInput'];
	foreach($_POST['checkbox'] as $check) {
		$query="INSERT INTO $tableName (Batch) VALUES ('$toInsert') WHERE Mobile=$check";
		$result=$conn->query($query);
		if ($result) {
			echo "<p>QUERY COMPLETE</p>";
		}else{
			echo "<p>QUERY FAILED</p>";
		}
		echo $check;
	}
	echo "<p>".$_POST['batchAllotedInput']."</p>";
}else{
	echo "<p>POST NOT FOUND</p>";
}
?>
