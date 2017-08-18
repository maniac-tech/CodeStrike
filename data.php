<?php
require 'imacConnect.php';
?>
<div id="interface">
	<button title="allStudents" onclick="loadContent(this.title)"> All Students</button>
	<button title="pendingStudents" onclick="loadContent(this.title)">Pending Students</button>
	<button title="completedStudents" onclick="loadContent(this.title)">Completed Students</button>
	<button title="allotBatch" onclick="loadContent(this.title)">Allot Batch</button>
	<button title="coordinators" onclick="loadContent(this.title)">Co-Ordinators</button>
	<button title="batchDetails" onclick="loadContent(this.title)">Batch Details</button>
	<button>Button 7</button>
</div>
<div id="content">
	<div id="content_table">
		<p>Some Introductory message</p>		
	</div>
</div>