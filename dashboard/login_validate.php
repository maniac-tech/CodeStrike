<?php
	//include database config file 
include('login_connect.php');
//require_once('interview2017Connect.php');

session_start();

$id="0";
$console='';
$session_id='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$id=$_POST["loginID"];
	$password=$_POST["loginPassword"];

	// Checking the received data for correct expressions:
	if (!preg_match("/^[a-zA-Z]*$/",$id)){
		echo "Enter only characters";
	}else{

	//create query
		// $query="SELECT * FROM $tableName WHERE username='$id'";
		// $result = mysqli_query($conn,$query);

		$result = pg_query_params($dbconn, "SELECT * FROM $tableName WHERE userID=$1", array($id));
		// $result = pg_query($dbconn, "SELECT * FROM $tableName  ");
		$count = 0;

		echo "<table><tr>";
		while ($count < pg_num_fields($result)){
			echo "<td>".pg_field_name($result, $count)."</td>";
			$count = $count+1;
		}
		echo "</tr>";

		$count = 0;
		while ($row = pg_fetch_row($result)){
			echo "<tr>";
			$count = count($row);
			$y = 0;
			while ($y < $count)
			{
				$c_row = current($row);
				echo '<td>' . $c_row . '</td>';
				next($row);
				$y = $y + 1;
			}
			echo '</tr>';
			$i = $i + 1;
		}
		echo "</table>";
		echo "result done";
		//check the query in the database
		/*
		if ($result){
			$row=mysqli_fetch_assoc($result);
			$hash=$row["password"];
			if (password_verify($password,$hash)){
				$_SESSION['userId']=$row['Unique ID'];
				$_SESSION['username']=$row['username'];
				header('Location:index.php');
			}else{
				header('Location:login.php');
			}
		}
		*/

		echo "<br> Result:". pg_result_status($result) ." <br>";
	}
}
?>