<? include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <title>MySQL exercise</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="page.css">
 </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="cntainer">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Secret Diary</a>
		
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#home">Home</a></li>
				</ul>
				
				<form class="navbar-form navbar-right" method="post"> 
					<div class="form-group">
						<input type="email" class="form-control" name="loginEmail" placeholder="Email" id="loginEmail" value="<?php echo addslashes($_POST['loginEmail']); ?>" />
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" name="loginPassword" value="<?php echo addslashes($_POST['loginPassword']); ?>" />
					</div>
					<div class="form-group">
						<input type="submit" value="Log In" class="btn btn-success" name="login" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="home" class="container contentContainer" >
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1>Secret Diary</h1>
				<p class="lead">Kotki Kotki Kotki</p>
				<p>Soft kitty, warm kitty, little ball of fur...</p>
				<p class="bold marginTop">Interested? Join our mailing list!</p>
				<form class="marginTop" method="post">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo addslashes($_POST['email']); ?>" />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
					</div>
					
					<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
				</form>
			</div>
			
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
	jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(".contentContainer").css("min-height",$(window).height());
	</script>
</body>
</html>
