<?php
	if ($_POST["submitB"]) {
		
		if (!$_POST['name']) {
			$error="<br />Please enter your name";
		}
		if (!$_POST['email']) {
			$error="<br />Please enter your email";
		}
		// FILTER VALIDATIONS CAN BE FOUND
		if ($_POST['email']!="" AND !filter_var($_POST['email']), FILTER_VALIDATE_EMAIL) {			
			$error.="<br />Please enter a valid email address";
		}
		if (!$_POST['comment']) {
			$error.="<br />Please enter a comment";
		}
		
		if ($error) {
			$result='<div class="alert alert-danger"><strong>There were error(s) in form: '.$error.'</strong></div>';
		} else {
			if (mail("test@greenhost.org.uk", "Comment from web!", "Name: ".$_POST['name']."
			Email: ".$_POST['email']."
			Comment: ".$_POST['comment'])) {
				$result='<div class="alert alert-success">Form submitted. Thank you!</div>'
			} else {
				$result='<div class="alert alert-danger"><strong>There were some issues with sending your email. Please try later.</strong></div>';
			}
		}
	}
?>

<!doctype html>
<html>
   <head>
		<title>PHP mini project</title>   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<style>
			.emailform {
				border: 1px solid grey;
				border-radius:10px;
				margin-top:20px;
			}
			textarea {
				height:120px;
			}
			form {
				padding-bottom:20px;
			}
		</style>
	</head>
	<body> 
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 emailform">
					<h1>Contact Me</h1>
					<?php echo $result; ?>
					<p class="lead">Please, get in touch - I'll get back to you as soon as possible.</p>
					<form method="post">
						<div class="form-group">
							<label for="name">Your Name:</label>
							<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
						</div>
						<div class="form-group">
							<label for="email">Your Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
						</div>
						<div class="form-group">
							<label for="email">Your Comment:</label>
							<textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
						</div>
						<input type="submit" name="submitB" class="btn btn-success btn-lg" value="Submit" />
					</form>
				</div>
			</div>
		</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	  
	</body>
</html>
