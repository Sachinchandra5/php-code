<?php 
	// MAKE A FUNCTION OF ADD SUB MULT DIV AND CALL THEM ON CONDITIONS 
		$a = 2;
		$b = 3;
		$c = "/";
		function add ($c,$n){
			echo $c+$n;
		}
		// add(4,4);
		function sub ($f,$m){
			echo $f-$m;
		}
		function devision ($z,$o){
			echo $z/$o;
		}
		function multiplication ($g,$k){
			echo $g*$k;
		}
		if ($c== "+") {
			add($a,$b);
			
		} elseif ($c=="-") {
			sub($a,$b);	
		}elseif ($c=="/") {
			devision($a,$b);
		}elseif ($c=="*") {
			multiplication($a,$b);
	
		}else{
			echo "invalid";
		}
		

?>