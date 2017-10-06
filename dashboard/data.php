<?php
require '../imacConnect.php';
?>
<div id="interface">
	<button title="allStudents" onclick="loadContent(this.title)">Student Detail</button>
	<button title="pendingStudents" onclick="loadContent(this.title)">Pending </button>
	<button title="completedStudents" onclick="loadContent(this.title)">Completed </button>
	<button title="allotBatch" onclick="loadContent(this.title)">Allot Batch</button>
	<button title="coordinators" onclick="loadContent(this.title)">Co-Ordinators</button>
	<button title="batchDetails" onclick="loadContent(this.title)">Batch Details</button>
	<button title="otherOptions" onclick="loadContent(this.title)">Other Options</button>
</div>
<div id="content">
	<div id="content_table">
		<p >Welcome to CodeStrike's Dashboard.</p>	
		<p id="intro">This Tab is dedicated to <b>iMac Lab</b> of Atharva college of Engineering. All the lab related tasks, which involve the <b>student data interaction</b> can be managed from this particular Dashboard.
			<br>
			This tab has been designed for the <b>Co-ordinators</b> to manage the process of <b>monitoring the registraions, assigning batches, maintaing records </b>of the registered students.
		</p>	
		<p>Functionality available:
			<ol>
				<li>Student Detail at a Glance</li>
				<li>List of Students whose Training is pending, and Completed.</li>
				<li>Allotment of Batched</li>
				<li>Changing the status of Students after completeion of Training.</li>
			</ol>
		</p>
		<p>
			Other Important Information:
			<ul>
				<li><b>Registration link:</b>(case sensitive) http://www.codestrike.in/imacreg.php</li>
				<li>In case of any query/update, drop an E-Mail at <u><b>codestrikehq@gmail.com</b></u></li>
			</l>
		</p>
		<p>

		</p>
	</div>
</div>