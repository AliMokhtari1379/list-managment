<!DOCTYPE html>
<html>
<head>
	<title>Create Table</title>
</head>
<body>
	<?php
		$connection = mysqli_connect("localhost","root","","faradars");

		$sql = "create table if not exists user (
			id int(6) unsigned primary key auto_increment,
			name varchar(30) not null,
			password varchar(50) not null,
			email varchar(40) ,
			nationalcode int(40) 
		)";
		$result = mysqli_query($connection,$sql);
		if($result)
		{
			echo "Table Created successfull <br />";
		}
		else
		{
			echo "cannot create table <br />";
		}
	?>
</body>
</html>