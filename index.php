<?php
	require_once('dbconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD JQuery</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>

<div class="container-fluid">
 	<div class="jumbotron">
    	<h1 class="text-center">CRUD Oprations Using JQuery AJAX</h1>
    	<div class="container" style="padding-top: 25px;">
  			<div class="row">
				<div class="col-md-12">
					<div class="pull-right">
						<button class="btn btn-success" id="show-add">Add New Record</button>
					</div>
					<div id="link-add" class="form-inline pull-right">
					<div class="form-group">
						<label for="first_name">Name</label>
						<input type="text" name="name" id="name" placeholder="Name" class="form-control" required />
					</div>
					<div class="form-group">
						<label for="last_name">Username</label>
						<input type="text" name="username" id="username" placeholder="Username" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="email">Password</label>
						<input type="text" id="password" name="password" placeholder="Password" class="form-control" required />
					</div>
					<button type="button" class="btn btn-primary" id="add" name="add">Add Record</button>
					<button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
				</div>
				</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div id="records_content"></div><br>
					<div id="table_content" class="col-md-offset-2 col-md-8">
					</div>
					</div>
				</div>
		</div> 
  	</div>
</div>
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>