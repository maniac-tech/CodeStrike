document.getElementById("Register-button").addEventListener("click",loadRegisterTable);
document.getElementById("Pending-button").addEventListener("click",loadPendingTable);
document.getElementById("Completed-button").addEventListener("click",loadCompletedTable);

var tableRegister = document.getElementById("myTableRegister");
	var tablePending = document.getElementById("myTablePending");
	var tableCompleted = document.getElementById("myTableCompleted");

function loadRegisterTable(){
	alert("Register Pressed");	
	
	tableRegister.style.display="block";
	tablePending.style.display="none";
	tableCompleted.style.display="none";
}

function loadPendingTable(){
	alert("Pending Pressed");	
	
	tableRegister.style.display="none";
	tablePending.style.display="block";
	tableCompleted.style.display="none";
}

function loadCompletedTable(){
	alert("Completed Pressed");	
	
	tableRegister.style.display="none";
	tablePending.style.display="none";
	tableCompleted.style.display="block";
}