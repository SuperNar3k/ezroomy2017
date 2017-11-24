<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
	<head>
   		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<title></title>
	</head>
	<body>
		<?php include "nav.php";?>
		<div class="center">
			<img class=imageIndex src="images/indexBar.jpg" alt="Split the Bill!">
			<div id="startinfo">Split the Bills with Your Roomies!</div>
			<button id="startbutton"><a href="login.php" id="startbuttontext">Start Now!</a></button>
		</div>
		<?php include "footer.php";?>
	</body>
</html>