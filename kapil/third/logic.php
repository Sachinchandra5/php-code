<?php 
	$a = 10;
	$b = 4;
	$c = 11;
	// var_dump($a>$b);

	echo "and operator";
	echo "<br/>";
	echo "<br/>";
	var_dump(($a>$b)and($a>$c));
	echo "<br/>";
	echo "or operator";
	echo "<br/>";
	var_dump(($a>$b)or($a>$c));
	echo "<br/>";
	echo "not operator";
	echo "<br/>";
	var_dump(!(($a>$b)or($a>$c)));
	var_dump(!(($a>$b)and($a>$c)));
?>