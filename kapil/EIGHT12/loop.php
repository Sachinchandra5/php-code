<?php 
	$a = [1,2,3,32,2,2];

	for ($i=0; $i<10; $i++) { 
		if ($i>4) {
			break;
		}
		echo $i;
		echo "<br/>";
	}
	echo "php loop";

	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	for ($i=0; $i<10; $i++) { 
		if ($i==7 || $i == 4) {
			continue;
		}
		echo $i;
		echo "hello world";
		echo "<br/>";
	}

?>