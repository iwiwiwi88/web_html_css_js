<?php
	session_start();
	include("connection.php");
	$query="update users set diary='".mysqli_real_escape_string($link, $_POST['diary'])."' where id='".$SESSION['id']."' limit 1";
	mysqli_query($link, $query);
	
?>