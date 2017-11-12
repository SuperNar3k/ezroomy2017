<?php

    if(isset($_POST["usernameLogIn"])) {
        
        $username = $_POST["usernameLogIn"];

    } else if(isset($_POST["passwordLogIn"])) {

        $password = $_POST["passwordLogIn"];

    }
    

?>

<h1> Hello <?= $username?> </h1>