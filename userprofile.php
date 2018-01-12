
<!DOCTYPE html>
<?php session_start();
include "loginCheck.php";
include "database.php";?>
<?php
	//collecting user data and house id data 
	$sql = "SELECT * FROM user WHERE username=:myUser";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
	$user = $stmt->fetch(PDO::FETCH_OBJ);
	$dbuserhouseid = $user->homeid;
	$dbuserphonenumber=$user->phonenumber;
	$dbuseremail=$user->email;

	$sql = "SELECT * FROM home WHERE id=:myHouseID";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myHouseID" => $dbuserhouseid]); //order of arrays corresponds order of ?
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCounthouseID = $stmt->rowCount();
	?>
<html lang="en">
<head>
   		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
		<link type="text/css" rel="stylesheet" href="css/userprofile.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	</head>
	<body>
		<div id="container">
			<?php include 'nav.php';?>
				<div class="body" style="padding: 300px;">
					<div  class = "mainPlat" style="background-color:#FFFFFF;">
						<div class="userProfileTitle"><?php echo $_SESSION["Username"];?>'s Profile<hr class="userProfilehr"></hr></div>
						<ul>
							<li id="info">Username:     <?php echo $_SESSION["Username"];?></li>
							
							<li id="info">Email:     <?php echo $dbuseremail;?></li>
							
							<li id="info">Phone number:     <?php echo $dbuserphonenumber;?></li>
							<?php 

							if($rowCounthouseID==1) : ?>
							
							<li id="info">House ID:     <?php echo $dbuserhouseid?></li>
							
							<li id="info">Housing Address:     1083 Chicago Street</li>
							<?php else : ?>
							<li id="info">House ID:     No house has been claimed!</li>
							<li id="info"><button id="housebutton"><a href="homebuilder.php" style="color:black">Claim a house!</a></button></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			<?php include "footer.php";?>
		</div>
	</body>
</html>
