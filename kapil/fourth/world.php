<?php 
	$a = 108;
	if($a%2==0){
		if($a%4==0){
			if($a%8==0){
				echo "devided by all of than 2,4 and 8";
			}else{
			echo "devided by only 2 and 4";
			}
		}else{
			echo "devided by only 2";
		}
	}else{
		echo "not divided by 2,4 and 8";
	}

echo "<br/>";
$num = "true";
var_dump($num);

?>