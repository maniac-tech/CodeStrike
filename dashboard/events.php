<?php
require 'login_connect.php';
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="interface">
	<button title="jsWorkshop" onclick="loadContent(this.title)">JavaScript Workshop</button>
	<button title="hackingWorkshop" onclick="loadContent(this.title)">Hacking Workshop</button>
</div>
<div id="content">
	<div id="content_table">
		<p >Welcome to CodeStrike's Dashboard.</p>	
		<p id="intro">This Tab is dedicated to <b>CodeStrike</b> of Atharva college of Engineering. All the lab related tasks, which involve the <b>student data interaction</b> can be managed from this particular Dashboard.
			<br>
			This tab has been designed for the <b>Co-ordinators</b> to manage the process of <b>monitoring the registraions, assigning batches, maintaing records </b>of the registered students.
		</p>	
		<p>Functionality available:
			<ol>
				<li>Event Registration</li>
				<li>Event Teams</li>
			</ol>
		</p>
		<p>
			Other Important Information:
			<ul>
				<li><b>Registration link:</b>(case sensitive) http://www.codestrike.in/Events/jsworkshop</li>
				<li>In case of any query/update, drop an E-Mail at <u><b>codestrikehq@gmail.com</b></u></li>
			</l>
		</p>
		<p>

		</p>
	</div>
</div>