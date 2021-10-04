<?php
if(isset($_POST['data']))
{
	$data = $_POST['data'];
	$param = $_POST['param'];
	$connect = mysqli_connect("localhost","root","","faradars");

	$sql = "select * from user where $param = '$data'";

	$result = mysqli_query($connect,$sql);
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
	<div class="col-lg-12 mt-3">
		<form action="./show.php">
		<button class="btn btn-primary">show table</button>
		</form>
		<form class="form-inline" method="post" action="search.php">
			<div class="form-group">
				<label for="name">data:</label>
				<input class="form-control" type="text" name="data" id="data" required>
			</div>
			<div class="form-group ml-2 mt-3">
				<label for="param">parameter:</label>
				<select class="form-control" name="param">
					<option value="name">name</option>
					<option value="family">password</option>
					<option value="email">email</option>
					<option value="site">nationalcode</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary ml-2"> Send Data</button>
		</form>
		<table class="table table-hover table-striped table-bordered mt-4">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>password</th>
				<th>Email</th>
				<th>nationalcode</th>
				<th>Action</th>
			</tr>
			<?php
				if(isset($result)){
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$row["id"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["password"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["nationalcode"]."</td>";
						echo "<td>
							<a class='btn btn-primary' href='edit.php?id=".$row["id"]
							."'>Edit</a>
								 | 
							<a class='btn btn-danger' href='delete.php?id=".$row["id"]
							."'>Delete</a>
						</td>";
						echo "</tr>";
					}
				}
			?>
		</table>
	</div>
</body>
</html>