<?php

include("functions.php");

//Submit a task
if ($_GET['action'] == "submit") {

	$error = "";

<<<<<<< HEAD
	if (!$_POST['course']) {
		$error = "Course is required.<br>";
	}
	if (!$_POST['info']) {
		$error .= "Info is required.<br>";
	}
	if (!$_POST['date']) {
		$error .= "Valid date is required";
	}

	if ($error != "") {
		echo $error;
		exit();
	}
=======
		$error = "";

	    if (!$_POST['course']) {
	      $error = "Course is required.<br>";
	    }
	    if (!$_POST['info']) {
	        $error .= "Info is required.<br>";
	    }
	    if (!$_POST['date']) {
	        $error .= "Valid date is required";
	    }

	    if ($error != "") {
	      echo $error;
	      exit();
	    }
>>>>>>> b4da1364211a05190bcf43a8f0fed63671cf7e6d

	$query = "INSERT INTO `tasks` (`course`,`info`,`date`,`expired`) VALUES ('".mysqli_real_escape_string($link,$_POST['course'])."','".mysqli_real_escape_string($link,$_POST['info'])."',
	'".mysqli_real_escape_string($link,$_POST['date'])."','0')";

<<<<<<< HEAD
	if (mysqli_query($link,$query)) {
		echo 1;
	}
	else {
		$error = "There was an error ... Please try again later";
	}

}
=======
          if (mysqli_query($link,$query)) {
            echo 1;
          } 
					else {

            $error = "There was an error ... Please try again later";
          }
    }


	//delete a task

	if ($_GET['action'] == 'delete') {

    $query = "SELECT * FROM `tasks` WHERE id=".$_POST['taskId']." LIMIT 1";
    $result = mysqli_query($link,$query);

    if (mysqli_num_rows($result) > 0 ) {
      $row = mysqli_fetch_assoc($result);
      mysqli_query($link,"DELETE FROM `tasks` WHERE id = ".mysqli_real_escape_string($link,$row['id'])." LIMIT 1");
      echo "0";
    } 
		else {
      echo "1";
    }
>>>>>>> b4da1364211a05190bcf43a8f0fed63671cf7e6d


//delete a task
if ($_GET['action'] == 'delete') {

<<<<<<< HEAD
	$query = "SELECT * FROM `tasks` WHERE id=".$_POST['taskId']." LIMIT 1";
	$result = mysqli_query($link,$query);

	if (mysqli_num_rows($result) > 0 ) {
		$row = mysqli_fetch_assoc($result);
		mysqli_query($link,"DELETE FROM `tasks` WHERE id = ".mysqli_real_escape_string($link,$row['id'])." LIMIT 1");
		echo "0";
	}
	else {
		echo "1";
	}

}

// set a task into expired
if ($_GET['action'] == 'expired') {

	$query = "UPDATE `tasks` SET expired = '1' WHERE id = ".$_POST['id']." ";
	if (mysqli_query($link,$query)) {
		echo 1;
=======
	if ($_GET['action'] == 'expired') {
		$query = "UPDATE `tasks` SET expired = '1' WHERE id = ".$_POST['id']." ";
		if (mysqli_query($link,$query)) {
			echo 1;
		}
>>>>>>> b4da1364211a05190bcf43a8f0fed63671cf7e6d
	}

}
?>
