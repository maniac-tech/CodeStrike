document.getElementById("Register-button").addEventListener("click",loadRegisterTable);
document.getElementById("Pending-button").addEventListener("click",loadPendingTable);
document.getElementById("Completed-button").addEventListener("click",loadCompletedTable);

var tableRegister = document.getElementById("myTableRegister");
var tablePending = document.getElementById("myTablePending");
var tableCompleted = document.getElementById("myTableCompleted");

function init(){
	// alert("Page loaded");
	loadRegisterTable();
}

function loadRegisterTable(){
	// alert("Register Pressed");	
	
	document.getElementById("Register-button").style.backgroundColor = "grey";
	document.getElementById("Pending-button").style.backgroundColor = "white";
	document.getElementById("Completed-button").style.backgroundColor = "white";


	tableRegister.style.display="block";
	tablePending.style.display="none";
	tableCompleted.style.display="none";
}

function loadPendingTable(){
	// alert("Pending Pressed");	

	document.getElementById("Register-button").style.backgroundColor = "white";
	document.getElementById("Pending-button").style.backgroundColor = "grey";
	document.getElementById("Completed-button").style.backgroundColor = "white";

	tableRegister.style.display="none";
	tablePending.style.display="block";
	tableCompleted.style.display="none";
}

function loadCompletedTable(){
	// alert("Completed Pressed");	
	
	document.getElementById("Register-button").style.backgroundColor = "white";
	document.getElementById("Pending-button").style.backgroundColor = "white";
	document.getElementById("Completed-button").style.backgroundColor = "grey";

	tableRegister.style.display="none";
	tablePending.style.display="none";
	tableCompleted.style.display="block";
}

init();