<?php
	
?>

<!doctype html>
<html>
   <head>
		<title>POGODA PHP</title>   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script
		src="//code.jquery.com/ui/1.11.4/jquery-ui.js"
		integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
		crossorigin="anonymous"></script>
		<style>
			html, body {
				height:100%;
			}
			.container {
				background-image:url("background.jpg");
				width:100%;
				height:100%;
				background-size:cover;
				background-position:center;
				padding-top:100px;
			}
			.center {
				text-align:center;
			}
			.white {
				color:white;
			}
			p {
				padding-top:15px;
				padding-bottom:15px;
			}
			button {
				margin-top:20px;
				margin-bottom:20px;
			}
			.alert {
				margin-top:20px;
				display:none;
			}
		</style>
	</head>
	<body> 
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="center white">POGODA</h1>
					<p class="lead center white">Podaj miasto</p>
					<form class="center">
						<div class="form-group">
							<input type="text" class="form-control" name="city" id="city" placeholder="Np.: London, Berlin, Paris..." />
						</div>
						<button id="weather" class="btn btn-success btn-lg">Sprawdź prognozy</button>
					</form>
					<div id="success" class="alert alert-success">Success!</div>
					<div id="noCity" class="alert alert-success">Please enter a city name!</div>
					<div id="fail" class="alert alert-danger">Could not find weather for this city. Check spelling and try again.</div>
				</div>
			</div>
		</div>
		<script>
			$("#weather").click(function(event) {
				$(".alert").fadeOut();
				event.preventDefault();
				if ($("#city").val()!="") {
					$.get("scraper.php?city=".$("#city").val(), function(data) {
						if (data=="") {
							$("#fail").fadeIn();
						} else {
							$("#success").html(data).fadeIn();
						}
					});
				} else {
					$("#noCity").fadeIn();
				}
			});
		</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	  
	</body>
</html>
