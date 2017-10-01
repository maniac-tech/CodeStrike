<?php 
	session_start();
	if (isset($_SESSION['userId'])){
		unset($_SESSION['userId']);
		header('Location:admin.php');
	}
 ?>