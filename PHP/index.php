<html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   <body> 
		<?php
			/*
			block comment
			*/
			// one line comment
			# one line comment
			echo "<h1>Hello, PHP!</h1>";
			$test="Variable1";
			$test2="Variable2";
			$num=10;
			echo $test.$test2;
			echo $num/5;
			$name="Iwiwiwi";
			echo "My name is $name";
			$a="name";
			echo $$a;
			
			// @@@@@@@@@@@@@@@ ARRAYS @@@@@@@@@@@@@
			$myArray=array("Kot","Cat","Kitty");
			print_r(myArray);
			echo $myArray[1]; // no outOfBoundException thing
			echo "<br /><br />";
			$anotherArray[0]="pizza";
			$anotherArray[1]="milk";
			$anotherArray[]="salad"; // will get [2]
			print_r(anotherArray);
			$countries=array(
				"France" => "French", // [France] => French
				"Poland" => "Polish",
				"Germany" => "German"
			);
			print_r(countries);
			unset($countries["Poland"]);
			print_r(countries);
			$abc="kot";
			unset($abc);
			echo $abc; // will show nothing
			
			// @@@@@@@@@@@@@@@ IF @@@@@@@@@@@@@
			$num1=1;
			if ($number==3) {echo "True";} else {echo "False";} // (!($number==3))
			$num2=3;
			if ($number!=$num2) {echo "True";} else {echo "False";}
			// you can use AND, OR, etc.
			
			// @@@@@@@@@@@@@@@ FOR and FOREACH @@@@@@@@@@@@@
			for ($1=1; $i<=10; $i++) {
				echo $i."<br />";
			}
			$animals=array("cat","frog","dog");
			foreach ($array as $key => $value) {
				echo "Key: $key Value: $value <br />";
			}
			
			// @@@@@@@@@@@@@@@ WHILE @@@@@@@@@@@@@
			$b=1;
			while ($b<20) {
				echo $b." ";
				$b++;
			}
			$names=array("Justyna","Mariola","Kinga");
			$x=1;
			while (array[$x]) {
				echo $names[$x]." ";
				$x++;
			}
		?>
	</body>
</html>
