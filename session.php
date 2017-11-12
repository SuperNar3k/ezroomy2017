<?php
	//checks if logged into system.
	//if not logged in, the system redirects you to login page.
	//This code will be at the top of every page that requires authentication.
	session_start();
	if(!isset($_SESSION["is_auth"])){
		header("location: index.php");
	}elseif(isset($_REQUEST["logout"]) && $_REQUEST["logout"] == true){
		unset($_SESSION["is_auth"]);
		session_destroy;
		print "logged out";
	}
?>