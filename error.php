<!DOCTYPE html>
<?php session_start();
if(isset($_COOKIE['ERROR'])) {
	$Error = $_COOKIE['ERROR'];
   
}
else{$Error="Unidentified error!";} ?>
<html lang="en">
	<head>
   		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
		<link type="text/css" rel="stylesheet" href="css/error.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<title></title>
	</head>
	<body>
		<div id = "container">
			<?php include "nav.php";?>
				<div class="body">
					<div class="form">
						<h2 class="logTitle">ERROR</h2>
							<hr class="loghr">

						<label class="field">
							Error: <?php echo $Error;?>
						</label>
					</div>	
        		</div>
			<?php include "footer.php";?>
		</div>
	</body>
</html>