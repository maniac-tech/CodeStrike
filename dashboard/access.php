<?php
function access_ilab($av){
	if($av!=2 || $av!=12 || $av!=23 || $av=!123){

	  //if user is not authorized to access ilab but has access to imac then direct to imac page

	  if($av == 1 || $av == 13){
	    header('Location: imac.php');
	  }

	  //if user is not authorized to access ilab but has access to robotics then direct to robotics page

	  else if($av == 3){
	    header('Location: robotics.php');
	  }
	}
}

function access_imac($av){
	//if user is not authorized to access to imac
	if($av!=1 || $av!=12 || $av!=13 || $av=!123){
	   
	  //if user is not authorized to access imac but has access to ilab then direct to ilab page
	  if($av == 2 || $av == 23){
	    header('Location: ilab.php');
	  }

	  //if user is not authorized to access imac but has access to robotics then direct to robotics page
	  else if($av == 3){
	    header('Location: robotics.php');
	  }
	}
}

function access_robotics($av){
	//if user is not authorized to access to robotics
	if($av!=3 || $av!=13 || $av!=23 || $av=!123){
	    
	  //if user is not authorized to access robotics but has access to imac then direct to imac page
	  if($av == 1 || $av == 12){
	    header('Location: imac.php');
	  }
	    //if user is not authorized to access robotics but has access to ilab then direct to ilab page
	  else if($av == 2){
	    header('Location: ilab.php');
	  }
	}
}
?>
