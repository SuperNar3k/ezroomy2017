<!DOCTYPE html>
<?php session_start();
include "database.php";?>

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
			<img class=imageProfile src="images/userpage.png">
		 <p id="info">User Profile: <?php echo $_SESSION["Username"];?></p>
		 <?php
		     //collecting user house id
			 $sql = "SELECT * FROM user WHERE username=:myUser";
			 $stmt = $pdo->prepare($sql);
			 $stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
			 $user = $stmt->fetch(PDO::FETCH_OBJ);
			 $dbuserhouseid = $user->homeid;
			 ?>
		 <p id="info">House ID: <?php echo $dbuserhouseid?></p>
		 <p id="info">Housing Address: 1083 Chicago Street</p>
		 <?php include "footer.php";?>
		 
</body>
</html>