<?php 

	// INDEXED ARRAY

	// $a = array(99,56,76,54,67);
	// echo $a[4];
	// $str = array("kapil" , "arun" , "sachin" , "suraj" , "sahil");
	// echo $str[4];
	$kapil = array("kapil" , "dev" , 80,19);
	var_dump($kapil);
	echo $kapil[3];
	$kapil[2] = 85;
	echo "<br/>";
	echo $kapil[2];
	$kapil[0] = "arun";
	echo $kapil[0];

	array_push($kapil, 2787);
	echo "<br/>";
	echo $kapil[4];
	echo "<br/>";
	var_dump($kapil);
?>