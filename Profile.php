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
<<<<<<< HEAD
 		<div class="centerinfo"></div>
<<<<<<< HEAD
		
		 <p>User Profile: <?php echo $_SESSION["Username"];?></p>
		 <?php
		     //collecting user house id
			 $sql = "SELECT * FROM user WHERE username=:myUser";
			 $stmt = $pdo->prepare($sql);
			 $stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
			 $user = $stmt->fetch(PDO::FETCH_OBJ);
			 $dbuserhouseid = $user->homeid;
			 ?>
		 <p>House ID: <?php echo $dbuserhouseid?></p>
		 <p>Housing Address: 1083 Chicago Street</p>
		 <?php include "footer.php";?>
		 
</body>
=======
		<img class=imageProfile src="images/userpage.png">
=======
 		<div class="centerinfo">
			<img class=imageProfile src="images/userpage.png">
>>>>>>> 14472dbdfbbb909bf79c4f23c0b63e5cac17f1ec
			<p>User Profile: <?php echo $_SESSION["Username"];?></p>
			<p>House ID: 19D0IB6P3MO</p>
			<p>Housing Address: 1083 Chicago Street</p>
		</div>
		<?php include "footer.php";?> 
	</body>
>>>>>>> 8061eb5481b359b0afa51537f4b030b5fa0fbb27
</html>