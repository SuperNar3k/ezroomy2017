<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>Log In</title>
</head>
<body>

    <?php include "nav.php"; ?>

    <form id="login" class="form" action="userprofile.php" method="post">
            <h2 class="logTitle">Log In</h2>
            <hr class="loghr">

        <label class="field">
            <input type="text" placeholder="Username" name="username" id="usernameLogIn" class="input">
        </label>
        <label class="field">
     
            <input type="password" placeholder="Password" name="password" id="passwordLogIn" class="input">
        </label>

        <a href="signup.php" id="newAccount">Don't have an account?</a>

        <input type="submit" class="logButton" value="Log In">
        
</form>
		 <?php include "footer.php";?>
</body>
</html>