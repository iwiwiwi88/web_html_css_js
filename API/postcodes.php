<?php
	
?>

<!doctype html>
<html>
   <head>
		<title>POSTCODE API</title>   
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
				background-image:url("city.jpg");
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
			.whiteBackground {
				background-color:white;
				padding:20px;
				border-radius:20px;
			}
		</style>
	</head>
	<body> 
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 whiteBackground">
					<h1 class="center">POSTCODE FINDER</h1>
					<p class="lead center">Enter any address to find the postcode.</p>
					<form class="center">
						<div class="form-group">
							<input type="text" class="form-control" name="address" id="address" placeholder="Address..." />
						</div>
						<button id="postcode" class="btn btn-success btn-lg">Find My Postcode</button>
					</form>
					<div id="success" class="alert alert-success">Success!</div>
					<div id="noCity" class="alert alert-success">Please enter an address!</div>
					<div id="fail" class="alert alert-danger">Could not find postcode for this address. Check spelling and try again.</div>
				</div>
			</div>
		</div>
		<script>
			$("#postcode").click(function(event) {
				$.ajax({
					type: "GET",
					url: "url to postcode api with KEY and other options",
					dataType: "xml",
					success: processXML
				});
		
				function processXML(xml) {
					
				}
			};
		</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	  
	</body>
</html>
