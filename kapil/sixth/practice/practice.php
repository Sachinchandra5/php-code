<?php 
	echo "html";
	echo "<br/>";
	if ($_POST) {
		echo $_POST['user_name'];
		echo "<br/>";
		echo $_POST['user_password'];
	}else{
		echo $_GET['user_name'];
		echo "<br/>";
		echo $_GET['user_password'];
	}
?>