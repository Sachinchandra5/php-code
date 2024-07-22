<?php 
	// $a = 1;
	// while($a<=99){
	// 	if ($a%2!=0) {
	// 		echo $a;
	// 		echo "<br/>";
	// 	}
	// 	$a++;
	// }
	// $a = 0;
	// while($a<1000){
	// 	echo $a;
	// 	echo "<br/>";
	// 	$a+=2;
	// }
	$arr = [62,34,6,8,6];
	$max_num = $arr[0];
	$a = 1;
	while ($a<5) {
		if ($arr[$a]>$max_num) {
			$max_num = $arr[$a];
		}
		$a++;
	}
	echo "maximum no is ".$max_num;



?>
