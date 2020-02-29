<?php 
	session_start();
	 //if($_GET["logout"]){
		session_destroy();
		header("location: index.php");
		exit;
	//		}
?>