<?php 

	if(!isset($_SESSION)){
		session_start();
	}


	if(!isset($_SESSION['senha'])){
		$_SESSION['alert'] = 1;
		header("Location: login.php");
	}
			
	
?>