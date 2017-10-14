<?php
require ('../imacConnect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
 ?>
<p>Overview</p>
<p>Total Number of Entries:</p>
<p>Total Number of Students who completed the Training:</p>
<p>Total Number of Students who are pending:</p>