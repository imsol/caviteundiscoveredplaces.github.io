<?php
	require('db.php');
	include("auth.php");
	$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard - Secured Page</title>
	<style type="text/css">
		 .a{
            text-decoration: none;
            color: white;
           
        }
        button{
             padding: 10px;
            color:white;
            background-color: darkblue;
            border-radius: 20px;
            width: 200px;
             margin-right: 50px;
            margin-left: 50px;
            text-decoration: none;
        }
        body{
            background-image: url(images/BlackBerry_Blue-wallpaper-10424950.jpg);
        }
        h2{
        	color: white;
        }
         div{
        	 border: solid gray 1px;
            width: 50%;
            border-radius: 15px;
            margin: 100px auto;
            background-color:transparent;
            padding: 30px;
            color: lightblue;
            padding-bottom: 20px; 
        }
         .input2{
            
            padding: 10px;
            color:white;
            background-color: dodgerblue;
            border-radius: 30px;
            width: 80px;
            text-align: right;
           
            
        }
	</style>
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div>
	<h1 align="center">Informations</h1>
		<?php
            $id=$_GET['id'];
			$query = "SELECT * FROM admin WHERE id='$id'";
			$result = mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
		      
            echo"<img src='images/".$row['image']."' align='right' style='border:10px solid royalblue ;'>";
            echo '<h2 style="color:white">Users id</h2>';
            echo '<p>'.$row['id'].'</p>';
			echo '<h2 style="color:white">Firstname</h2>';
			echo '<p>'.$row['firstname'].'</p>';
			echo '<h2 style="color:white">Middlename</h2>';
			echo '<p>'.$row['middlename'].'</p>';
			echo '<h2 style="color:white">lastname</h2>';
			echo '<p>'.$row['lastname'].'</p>';
			echo '<h2 style="color:white">Middlename</h2>';
			echo '<p>'.$row['contact'].'</p>';
			echo '<h2 style="color:white">Address</h2>';
			echo '<p>'.$row['address'].'</p>';
			echo '<h2 style="color:white">Emails</h2>';
			echo '<p>'.$row['email'].'</p>';
			echo '<h2 style="color:white">Username</h2>';
			echo '<p>'.$row['username'].'</p>';
		

		
		?>
		<p align="right"><a href='index.php'  class="input2">Back</a></p>
	</div>
</body>
</html>