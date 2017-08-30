<?php 
	session_start();
	if ($_POST["logout"]==1 AND $_SESSION['id']) { 
		session_destroy();
		$message="You've been log out! Have a nice day!";
	}
	include("connection.php");
	
	if ($_POST['submit']=="Sign Up") {
		if (!$_POST['email']) $error.="<br />Please enter your email";
			else if !(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email";
		if (!$_POST['password']) $error.="<br />Please enter your password";
			else {
				if (strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters.";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password.";
			}
		if ($error) $error = "There were errors. Errors: ".$error;
		else {
			$select = "select * from users where email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result = mysqli_query($link, $select);
			$results = mysqli_num_rows($result);
			
			if ($results) $error = "That email address is already registered. Do you want to log in?";
			else {
				$query="insert into `users` (`email`, `password`) values ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				$result = mysqli_query($link, $select);
				echo "You've been signed up!";
				$_SESSION['id']=mysqli_insert_id($link);
				// Redirect to logged in page
				header("Location:mainpage.php");
			}
		}
	}
	
	if ($_POST['submit']=="Log In") {
		$select = "select * from users where email='".mysqli_real_escape_string($link, $_POST['loginEmail'])."' and password='".md5(md5($_POST['loginEmail']).$_POST['loginPassword'])."'";
		$result = mysqli_query($link, $select);
		$row = mysqli_fetch_array($result);
		if ($row) {
			$_SESSION['id']=$row['id'];
			// Redirect to logged in page
			header("Location:mainpage.php");
		} else {
			$error = "We couldn't find a user with these credentials in our database";
		}
	}
?>