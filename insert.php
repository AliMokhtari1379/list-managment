<?php
if(isset($_POST['username']))
{
	$name = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$nationalcode = $_POST['nationalcode'];

	$connect = mysqli_connect("localhost","root","","faradars");

	$sql = "insert into user(name,password,email,nationalcode) values('$name','$password','$email','$nationalcode');";
	


	//$result = mysqli_query($connect,$sql);
	$result = mysqli_multi_query($connect,$sql);

	if($result){
		echo "Record Created <br />";
	}
	else
	{
		echo "Error in : " . $sql . "<br />" . mysqli_error($connect);
	}
	mysqli_close($connect);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
	<div class="col-lg-6 mt-3">
		<form action="./show.php">
			<button class="btn btn-primary mt-3">show table</button>
		</form>
		<form method="post" action="insert.php">
			<div class="form-group">
				<label for="name">User Name:</label>
				<input class="form-control" type="text" name="username" id="name" required>
			</div>
			<div class="form-group">
				<label for="password">password:</label>
				<input class="form-control" type="text" name="password" id="password" required>
			</div>
			<div class="form-group">
				<label for="name">User Email:</label>
				<input class="form-control" type="text" name="email" id="email" required>
			</div>
			<div class="form-group">
				<label for="nationalcode">nationalcode:</label>
				<input class="form-control" type="int" name="nationalcode" id="nationalcode">
			</div>
			<button type="submit" class="btn btn-primary"> Send Data</button>
		</form>
	</div>
</body>
</html>