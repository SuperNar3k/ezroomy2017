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

    <form id="signup" class="form" action="userprofile.php" method="post">
            <h2 class="logTitle">Log In</h2>
            <hr class="loghr">

        <label class="field">
            <input type="text" placeholder="Username" name="usernameSignUp" id="usernameSignUp" class="input">
        </label>
 
        <label class="field">
            <input type="text" placeholder="Email" name="emailSignUp" id="emailSignUp" class="input">
        </label>        

        <label class="field">
            <input type="text" placeholder="Phone Number" name="phoneSignUp" id="phoneSignUp" class="input">
        </label>  

        <label class="field">     
            <input type="password" placeholder="Password" name="passwordSignUp" id="passwordSignUp" class="input">
        </label>

        <label class="field">
            
            <input type="password" placeholder="Confirm Password" name="passwordConfirmSignUp" id="passwordConfirmLogIn" class="input">
        </label>

        <a href="login.php" id="newAccount">have an account?</a>

        <input type="submit" class="logButton">
        
</form>
</body>
</html>