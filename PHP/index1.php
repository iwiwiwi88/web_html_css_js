<html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   <body> 
		<?php
			$emailTo="test@greenhost.org.uk";
			$subject="Testing";
			$body="Soft kitty, warm kitty...";
			$headers="From: iwiwiwi@iwiwiwi.pl";
			if (mail($emailTo,$subject, body, $headers)) {
				echo "Mail sent successfully!";
			} else {
				echo "Sending failed!";
			}
			
			// @@@@@@@@@@@@@@@@@ GET @@@@@@@@@@@@@@@
			// http:xxxxxxxxxxx.php?name=iwi&animal=cat
			print_r($_GET); // it can be used in html page
			if ($_GET["submit"]) {
				if ($_GET["name"]) {
					echo "Your name is ".$_GET['name'];
				} else {
					echo "Please, enter your name";
				}
			}
			
			// @@@@@@@@@@@@@@@@@ POST @@@@@@@@@@@@@@@
			// <form method="post">
			$names=array("Justyna","Mariola","Kinga");
			if ($_POST["submit"]) {
				if ($_POST["name"]) {
					foreach ($names as $name) {
						if ($_POST["name"]==$name) {
							echo "I know you! Your name is".$name;
							$knowYou=1;
						}
					}
					if (!$knowYou) echo "I don't know you, ".$_POST['name'];
				} else {
					echo "Please, enter your name";
				}
			}
		?>
	</body>
</html>
