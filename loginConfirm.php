<?php
	//checks to see if the username and password are the same as what the user entered
	//then starts session so other pages can be accessed as that user.
	
	$db = new PDO("mysql:dbname=ezroomy;host=localhost","root");
	$username = "";
	$password = "";
	$newUser = "";
	$newPass = "";
	if(isset($_POST['usernameLogIn']) && isset($_POST['passwordLogIn'])){ //form
		$username = $_POST['usernameLogIn'];
		$password = $_POST['passwordLogIn'];
		if($username != "" && $password != ""){

			//goes through database 
			$rows = $db -> prepare("SELECT username, password FROM `user` WHERE username = :username");
			$rows -> execute(['username' => $username]);

			foreach($rows as $row){ //if there are results, make new variables from db
				$newUser = $row["username"];
				$newPass = $row["password"];
			}
			if($username == $newUser && $password == $newPass){
				$_SESSION["is_auth"] = true;
				$_SESSION["username"] = $username;
				header("location: userprofile.php"); //redirects
			}else{
				print "Username or Password is incorrect";
			}
		}else{
			print "Not queried";
			
		}
	}
?>