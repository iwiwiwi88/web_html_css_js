<?php
	$link = mysql_connect("localhost","user", "pass", "cats");
	if (mysqli_connect_error()) {
		die("Could not connect to database. Error: ".mysqli_connect_error());
	}
	echo "working!"; // if connection is down, you will not be able to see this
	
	// @@@@@@@@@@@@@@@@@@@ SELECT @@@@@@@@@@@@@@@@@@
	$query = "select * from users";
	if (mysqli_query($link, $query)) {
		echo "It worked!";
		$row = mysql_fetch_array($result);
		print_r($row);
	} else {
		echo "It failed!";
	}
	
	// @@@@@@@@@@@@@@@@@@@ INSERT, UPDATE @@@@@@@@@@@@@@@@@@
	$insert = "insert into `users` (`name`, `surname`) values ('Iwi','Sas')";
	$update = "update `users` set `name` = 'Iwiwiwi' where `name` like 'Iwi'";	
	mysqli_query($link, $insert);	
	mysqli_query($link, $update);
	
	// @@@@@@@@@@@@@@@@@@@ LOOPING @@@@@@@@@@@@@@@@@@
	$queryRows = "select * from users";
	$name1 = "Ian O'Neil";
	$escape = "select * from users where name='".mysqli_real_escape_string($link, $name1)."'";
	if (mysqli_query($link, $queryRows)) {
		echo "It worked!";
		echo mysqli_num_rows($result)."<br />";
		while ($row = mysql_fetch_array($result)) {
			print_r($row);
		}
	} else {
		echo "It failed!";
	}
?>