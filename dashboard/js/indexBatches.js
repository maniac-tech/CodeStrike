document.getElementById("BatchInfo-button").addEventListener("click",loadBatchInfoTable);
document.getElementById("AllotBatch-button").addEventListener("click",loadAllotBatchTable);
document.getElementById("Operations-button").addEventListener("click",loadOperationsTable);

var tableBatchInfo = document.getElementById("myTableBatchInfo");
var tableAllotBatch = document.getElementById("myTableAllotBatch");
var tableOperations = document.getElementById("myTableOperations");

function init(){
	// alert("Page loaded");
	loadBatchInfoTable();
}

function loadBatchInfoTable(){
	// alert("Batch Info Pressed");	
	
	document.getElementById("BatchInfo-button").style.backgroundColor = "grey";
	document.getElementById("AllotBatch-button").style.backgroundColor = "white";
	document.getElementById("Operations-button").style.backgroundColor = "white";

	tableOperations.style.display="none";
	tableAllotBatch.style.display="none";
	tableBatchInfo.style.display="block";
}

function loadAllotBatchTable(){
	// alert("Allot Batch Pressed");	
	
	document.getElementById("BatchInfo-button").style.backgroundColor = "white";
	document.getElementById("AllotBatch-button").style.backgroundColor = "grey";
	document.getElementById("Operations-button").style.backgroundColor = "white";

	tableOperations.style.display="none";
	tableAllotBatch.style.display="block";
	tableBatchInfo.style.display="none";
}

function loadOperationsTable(){
	// alert("Operations Pressed");	
	
	document.getElementById("BatchInfo-button").style.backgroundColor = "white";
	document.getElementById("AllotBatch-button").style.backgroundColor = "white";
	document.getElementById("Operations-button").style.backgroundColor = "grey";

	tableOperations.style.display="block";
	tableAllotBatch.style.display="none";
	tableBatchInfo.style.display="none";
}

init();