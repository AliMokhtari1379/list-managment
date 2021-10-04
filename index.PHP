<!DOCTYPE html>
<html>
<head>
	<title>Connect Database</title>
</head>
<body>
	<?php
		$dbname = "";
		$connection = mysqli_connect("localhost","root","",$dbname);
		if($connection)
		{
			echo "Connection Successfull" . "<br />";
		}
		else
		{
			die("Connection Failed: " . mysqli_connect_error() . "<br />");
		}
		$sql="CREATE DATABASE IF NOT EXISTS faradars";
		$result = mysqli_query($connection,$sql);
		if($result)
		{
			echo "Database Created Successfull <br />";
		}
		else
		{
			echo "cannot create database <br />";
		}
		$dbname = "faradars";

	?>
</body>
</html>