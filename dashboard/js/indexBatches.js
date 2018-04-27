document.getElementById("Operations-button").addEventListener("click",loadOperationsTable);
document.getElementById("AllotBatch-button").addEventListener("click",loadAllotBatchTable);
document.getElementById("BatchInfo-button").addEventListener("click",loadBatchInfoTable);

var tableAllotBatch = document.getElementById("myTableAllotBatch");
var tableOperations = document.getElementById("myTableOperations");
var tableBatchInfo = document.getElementById("myTableBatchInfo");

function loadOperationsTable(){
	alert("Operations Pressed");	
	
	tableOperations.style.display="block";
	tableAllotBatch.style.display="none";
	tableBatchInfo.style.display="none";
}

function loadAllotBatchTable(){
	alert("Allot Batch Pressed");	
	
	tableOperations.style.display="none";
	tableAllotBatch.style.display="block";
	tableBatchInfo.style.display="none";
}

function loadBatchInfoTable(){
	alert("Batch Info Pressed");	
	
	tableOperations.style.display="none";
	tableAllotBatch.style.display="none";
	tableBatchInfo.style.display="block";
}