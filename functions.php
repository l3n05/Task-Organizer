<?php

include("connect.php");

//display assignments based pn parameter given

function displayAssignments($type){

	global $link;

	if ($type == 'all') {

		$whereClause = "WHERE expired=0";

	} elseif ($type == 'expired') {

		$whereClause="WHERE expired=1";

	}	elseif ($type == 'search') {

			if ($_GET['q'] == "") {

				$whereClause = "";
				echo '<script> location.replace("index.php"); </script>';

			} else {

				$whereClause = "WHERE course LIKE '%".mysqli_real_escape_string($link,$_GET['q'])."%'";

			}

	}

	$query = "SELECT * FROM `tasks` ".$whereClause." ORDER BY `date` ASC LIMIT 10";
	$result= mysqli_query($link,$query);

	if (mysqli_num_rows($result) == 0) {

	    echo '<p>No assignments left :)<p>';

	} else {

		while ($row = mysqli_fetch_assoc($result)) {
			    echo "<p><span style='color:black;font-weight:bold;'>Course : </span>".$row['course']."</p>";
			    echo "<p><span style='color:black;font-weight:bold;'>Info : </span>".$row['info']."</p>";


					if ($type !== 'expired' && $row['expired'] !== '1') {
						echo "<div id='".'time'.$row['id']."' date='".$row['date']."'></div>";
						echo "<script type='text/javascript'>
								var dt=$('".'#'.'time'.$row['id']."').attr('date');
								var id='#'+$('".'#'.'time'.$row['id']."').attr('id');
								var id2 = '".$row['id']."';
								timeRemaining(dt,id,id2);
							</script>";
					}
					else {
						echo "<div id='".'time'.$row['id']."' date='".$row['date']."' style='color:black;font-weight:bold;'>TIme left: <span style='color:red'>EXPIRED</span></div>";
					}
					echo "<button class='btn btn-primary deleteButton' style='margin-top:5px;' taskId='".$row['id']."'>Delete</button>";
					echo "<hr>";
	  }

	}
}

//display search box

function displaySearch() {
	echo '<form class="form-inline search">
	<div>
      <input type="hidden" name="page" value="search">
      <input type="text" name="q" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Search">
      <button type="submit" class="btn btn-primary" id="searchButton" style="background-color: rgba(252, 19, 19, 0.918)!important;border:none;width:200px;">Search Assignment</button>
	</div>
	</form>';
}

//display error/success message

function displayErrorSuccess() {
    echo '<div id="success" class="alert alert-success">Assignment was posted successfuly.</div>
        <div id="fail" class="alert alert-danger"></div>';
}

?>
