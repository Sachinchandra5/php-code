<?php 
	$a = 5;
	$b = 4;
	$c = "a";
	function add ($r,$s){
		echo $r+$s;

	}
	function sub ($l,$u){
		echo $l-$u;

	}
	function multi ($x,$q){
		echo $x*$q;
	}
	function devision ($n,$p){
		echo $n/$p;
	}
	switch ($c) {
		case '+':
			add($a,$b);
			break;
		case '-':
			sub($a,$b);
			break;
		case '/':
			devision($a,$b);
			break;
		case '*':
			multi($a,$b);
			break;
		default:
			echo "invalid";
	}







?>