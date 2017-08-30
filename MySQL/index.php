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
	
	// @@@@@@@@@@@@@@@@@@@ SESSION VARIABLES @@@@@@@@@@@@@@@@@@
	$temp = "Hello"; // if after run it is commented out, saved and site is refreshed, it won't exist
	echo $temp;
	
	session_start();
	$_SESSION['loginid']=1; // it can be commented after one run, and site will still show it
	echo $_SESSION['loginid'];
	print_r($_SESSION);
	
	// @@@@@@@@@@@@@@@@@@@ COOKIES @@@@@@@@@@@@@@@@@@
	setcookie("id","1234",time()+60*60*24);
	echo $_COOKIE['id'];
	setcookie("id","",time()-3600);
	
	// @@@@@@@@@@@@@@@@@@@ PASSWORDS @@@@@@@@@@@@@@@@@@
	/* PASSWORDS WAYS
	1) plain text in DB - very bad idea
	2) hashed passwords - easierones will be decrypted quickly
			echo md5("password");
	3) hashed passwords with salt - having few hashed passwords, we can compare these and find $salt
			$salt = "jeje8378473*&*fdsfJKFJIS";
			echo md5($salt."password");
	4) hashed(hashed(rowId)+password) - everytime different pass, hard to compare these 
			echo md5(md5($row['id'])."password");
	*/
?>