<!DOCTYPE html>
<?php session_start();?>
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
 		<div class="centerinfo"></div>
		 <p>User Profile: <?php echo $_SESSION["Username"];?></p>
		 <p>House ID: 19D0IB6P3MO</p>
		 <p>Housing Address: 1083 Chicago Street</p>
		 <?php include "footer.php";?>
		 
</body>
</html>