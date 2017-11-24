<!DOCTYPE html>
<?php session_start();
include "database.php";?>
<?php
	//collecting user house id
	$sql = "SELECT * FROM user WHERE username=:myUser";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
	$user = $stmt->fetch(PDO::FETCH_OBJ);
	$dbuserhouseid = $user->homeid;
	$dbuserphonenumber=$user->phonenumber;
	$dbuseremail=$user->email;
	?>
<html lang="en">
<head>
   		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
		<link type="text/css" rel="stylesheet" href="css/profile.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<title></title>
	</head>
	<body>
 		<?php include 'nav.php';?>
 		<div class="centerinfo">
			<img class=imageProfile src="images/userpage.jpg">
			<div id="userinfo"><?php echo $_SESSION["Username"];?>'s Profile</div>
			<ul>
				<li id="info">Username: <?php echo $_SESSION["Username"];?></li>
				<li id="info">Email: <?php echo $dbuseremail;?></li>
				<li id="info">Phone number: <?php echo $dbuserphonenumber;?></li>
				<li id="info">House ID: <?php echo $dbuserhouseid?></li>
				<li id="info">Housing Address: 1083 Chicago Street</li>
			</ul>
		</div>
		<?php include "footer.php";?>
		 
	</body>
</html>