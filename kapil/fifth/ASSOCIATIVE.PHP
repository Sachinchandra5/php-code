<?php 
	//associative array
	$a1 = ["kapil" , 73 , "php"];
	$arr = array("name"=>"kapil" , "rollno"=>73,"course"=>"php");
	var_dump($arr);
	echo "<br/>";
	var_dump($a1);
	echo "<br/>";
	echo $arr["name"];
	echo $arr["rollno"];

	echo "<br/>";
	$second = [44,4,544,3];
	var_dump($second);
	echo "<br/>";
	$third = ["name"=>"kapil" , "age"=>19 , "rollno"=>73];
	var_dump($third);
	echo "<br/>";
	echo $third["name"] = "arun";
		echo "<br/>";
	var_dump($third);
?>