<!DOCTYPE html>
<html>

<head>
	<title>show Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
	<form action="./insert.php">
	<button class="btn btn-primary mt-3">insert</button>
	</form>
	<form action="./search.php">
	<button class="btn btn-primary mt-3">search</button>
	</form>
	<div class="col-lg-8 mt-3">
		<table class="table table-hover table-striped table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>password</th>
				<th>Email</th>
				<th>nationalcode</th>
				<th>Action</th>
			</tr>
			<?php
			$connect = mysqli_connect("localhost", "root", "", "faradars");
			$sql = "select * from user";

			$result = mysqli_query($connect, $sql);
			
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["password"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["nationalcode"] . "</td>";
				echo "<td>
						<a class='btn btn-primary' href='edit.php?id=" . $row["id"]
					. "'>Edit</a>
							 | 
						<a class='btn btn-danger' href='delete.php?id=" . $row["id"]
					. "'>Delete</a>
					</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</body>

</html>