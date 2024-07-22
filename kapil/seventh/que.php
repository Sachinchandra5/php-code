<?php
	$arr = [64,43,4,3,2,5,3];
	$max_num = $arr[0];
	for ($i=1; $i<7; $i++) { 
		if ($arr[$i]>$max_num) {
			$max_num = $arr[$i];
		}
	}
	echo $max_num;
?>