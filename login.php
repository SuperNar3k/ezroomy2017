<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>Log In</title>
</head>
<body>

    <nav id="navBar">

    </nav>

    <div id="login" class="form">
            <h2 class="logTitle">Log In</h2>
            <hr class="loghr">
        <label class="field">
            
            <input type="text" placeholder="Username" name="usernameLogIn" id="usernameLogIn" class="input">
        </label>
        <label class="field">
     
            <input type="password" placeholder="Password" name="passwordLogIn" id="passwordLogIn" class="input">
        </label>

        <label class="field visible">
            <input type="password" placeholder="Confirm Password" id="passwordLogInConfirm" class="input ">
        </label>

        <p id="newAccount">Don't have an account?</p>

        <button class="logButton">Log In</button>
        
    </div>
</body>
</html>