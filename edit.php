<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$connect = mysqli_connect("localhost","root","","faradars");

	$sql = "select * from user where id = $id";

	$result = mysqli_query($connect,$sql);

	while ($row = mysqli_fetch_array($result)) {
		$name = $row["name"];
		$password = $row["password"];
		$email = $row["email"];
		$nationalcode = $row["nationalcode"];
	}
}
elseif(isset($_POST['id']))
{
	$id = $_POST['id'];

	$connect = mysqli_connect("localhost","root","","faradars");

	$name = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$nationalcode = $_POST["nationalcode"];

	$sql = "update user set name = '$name', password ='$password', email='$email', nationalcode='$nationalcode' where id=$id";

	$result = mysqli_query($connect,$sql);

	header("Location: show.php");
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
		<form method="post" action="edit.php">
			<div class="form-group">
				<label for="name">User Name:</label>
				<input class="form-control" type="text" name="username" id="name" required value="<?php echo $name; ?>">
			</div>
			<div class="form-group">
				<label for="password">password:</label>
				<input class="form-control" type="text" name="password" id="password" required value="<?php echo $password; ?>">
			</div>
			<div class="form-group">
				<label for="name">User Email:</label>
				<input class="form-control" type="text" name="email" id="email" required value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label for="nationalcode">nationalcode:</label>
				<input class="form-control" type="text" name="nationalcode" id="nationalcode"  value="<?php echo $nationalcode; ?>">
			</div>
			<input type="hidden" name="id"  value="<?php echo $id; ?>">
			<button type="submit" class="btn btn-primary"> Update Data</button>
		</form>
	</div>
</body>
</html>