<? 
	session_start();
	inculde("connection.php");
	$query="select diray from users where id='".$_SESSION['id']."' limit 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$diray = $row['diary'];
?>

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
			<div class="navbar-header pull-left">
				<a href="" class="navbar-brand">Secret Diary</a>
			</div>
			<div class="collapse navbar-collapse pull-right">
				<ul class="navbar nav">
					<li><a href="diary.php?logout=1">Log Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="home" class="container contentContainer" >
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<textarea class="form-control"><?php echo $diary; ?></textarea>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
	jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(".contentContainer").css("min-height",$(window).height());
		$(".textarea").css("height",$(window).height()-120);
		$("textarea").keyup(function() {
			// AJAX
			$.post("updateDiary.php", {diary:$("textarea").val()});
		});
	</script>
</body>
</html>
