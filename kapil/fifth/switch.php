<?php 

	$a = 3873;
	if ($a == 3873) {
		echo "right";
	}elseif ($a = 1) {
		echo "one";
	}

	echo "<br/>";
	switch($a){
		case 3873:
			echo "RIGHT";
			break;
		case 1:
			echo "one";
	}
?>