<?php 
session_start();
	if ($_POST['submit']) {
		if (!$_POST['email']) $error.="<br />Please enter your email";
			else if !(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email";
		if (!$_POST['password']) $error.="<br />Please enter your password";
			else {
				if (strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters.";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password.";
			}
		if ($error) echo "There were errors. Errors: ".$error;
		else {
			$link = mysql_connect("localhost","user", "pass", "diary");
			$select = "select * from users where email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result = mysqli_query($link, $select);
			$results = mysqli_num_rows($result);
			
			if ($results) echo "That email address is already registered. Do you want to log in?";
			else {
				$query="insert into `users` (`email`, `password`) values ('".mysqli_real_escape_string($link, $_POST['email'])."', 'md5(md5($_POST['email']).$_POST['password'])')";
				$result = mysqli_query($link, $select);
				echo "You've been signed up!";
				$_SESSION['id']=mysqli_insert_id($link);
			}
		}
	}
?>

<form method="post">
	<input type="email" name="email" id="email" />
	<input type="password" name="password"  />
	<input type="submit" name="submit" value="Sign Up" />
</form>