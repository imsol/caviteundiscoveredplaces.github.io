<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>
	 <?php include("Admin-Nav.php") ?>
	 <div class="container">
	 	<div class="map col-lg-7">
	 		<h1>Manage travel guide</h1>
	 		<?php include("../map.php"); ?>
	 	</div>
	 	<div class="slocdes col-lg-4">
	 		<form action=""  method="POST" >
	 			<label>Current Location</label>
	 			<input type="text" name="c-des" placeholder="You Current Location" />
	 			<label>Destination</label>
	 			<input type="text" name="c-des" placeholder="Your Destination" /><br>
	 			<label class="control-label" for="search-field"><i class="glyphicon glyphicon-search">search</i></label>
               	<input class="form-control search-field" type="search" name="search" id="search-field">
	 		</form>
	 	</div>

	 </div>
     <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>