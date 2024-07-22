<?php 
	$a =[3,2,2,2,3,34];
	var_dump($a);

	//to add data in array
	echo "<br/>";
	//add in start
	array_unshift($a, 76238632);
	var_dump($a);
	//add in end
	echo "<br/>";
	array_push($a, 893883);
	var_dump($a);
	//ADD IN END
	echo "<br/>";
	$a[] = 49044;
	var_dump($a);
	echo "<br/>";


	//to deletye data in array
	//DELETEM FROM END
	array_pop($a);
	var_dump($a);
	echo "<br/>";
	//DELETE FROM START
	array_shift($a);
	var_dump($a);
	echo "<br/>";

	//delete from middle
	array_splice($a,2,3);
	var_dump($a);
?>