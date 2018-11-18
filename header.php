<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Task Organizer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/menu.css" rel="stylesheet">

    <!-- Required scripts to load first -->
    <script src="js/countdown.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>

    <div id="wrapper">
        <!-- Menu -->
        <div id="menu-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#exampleModal" id="modalButton">New Task</a>
                </li>
                <li>
                    <a href="index.php">View All</a>
                </li>
                <li>
                    <a href="?page2=expired">View Expired</a>
                </li><br>

                  <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for a task ..." name="q">
                    <input type="hidden" name="page" value="search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                        <span class="fa fa-search"></span>
                      </button>
                    </span>
                  </div>
                  </form>

            </ul>
        </div>
        <!-- /#menu-wrapper -->

<!-------------------------------------- New Task Modal -------------------------------------------------------------------------->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert a new task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
  			<label for="course" class="col-2 col-form-label"><span id="adctext">Course</span></label>
  			<div class="col-10">
    			<input class="form-control" type="text" value="" id="course">
  			</div>
	  	</div>
	  	<div class="form-group row">
  			<label for="task" class="col-2 col-form-label"><span id="adctext">Info</span></label>
  			<div class="col-10">
    			<input class="form-control" type="text" value="" id="info">
  			</div>
	  	</div>
	  	<div class="form-group row">
  			<label for="date" class="col-2 col-form-label"><span id="adctext">Deadline</span></label>
  			<div class="col-10">
    			<input class="form-control" type="text" value="" id="date" placeholder="yyyy-mm-dd">
  			</div>
      </div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submit">Submit</button>
      </div>
      <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-9">
          <?php displayErrorSuccess(); ?>
        </div>
        <div class="col"></div>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
