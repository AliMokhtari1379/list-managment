<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost","root","","faradars");

$sql = "delete from user where id = ".$id;

$result = mysqli_query($connect,$sql);

mysqli_close($connect);
header("Location: show.php");
?>