<?php 
require('imacConnect.php');
if (!empty($_POST['checkbox'])){
	$toInsert = $_POST['batchAllotedInput'];
	foreach($_POST['checkbox'] as $check) {
		$sql = "UPDATE $tableName SET Batch='$toInsert' WHERE Mobile=$check";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			echo "<p>QUERY COMPLETE</p>";
		}else{
			echo "<p>QUERY FAILED</p>";
			echo mysqli_error($conn);
		}
		echo $check;
	}
	echo "<p>".$_POST['batchAllotedInput']."</p>";
}else{
	echo "<p>POST NOT FOUND</p>";
}
?>
