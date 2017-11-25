<?php
session_start();
//----------
//username needs to come from session
//----------
    if(isset($_POST["usernameSignUp"])) {
        $username = $_POST["usernameSignUp"];
       
    } 
    else{setcookie("ERROR","Username is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["emailSignUp"])) {

        $useremail = $_POST["emailSignUp"];
 
    }
    else{setcookie("ERROR","Email is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["phoneSignUp"])) {
        
        $userphone = $_POST["phoneSignUp"];
         
    }
    else{setcookie("ERROR","Phone number is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["passwordSignUp"])) {
        
        $userpassword = $_POST["passwordSignUp"];
         
    }
    else{setcookie("ERROR","Password is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["passwordConfirmSignUp"])) {
        
        $userpasswordConfirm = $_POST["passwordConfirmSignUp"];
         
    }
    else{setcookie("ERROR","Password confirm is blank.", time() + (86400 * 30), "/");header("location: error.php");}
            
   
    

    include "database.php";

    // $sql = "SELECT * FROM user WHERE username=:myUser";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    // $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    //collecting rows of user with same username
    $sql = "SELECT * FROM user WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCountuser = $stmt->rowCount();

    //collecting rows of emails with same email
    $sql = "SELECT * FROM user WHERE email=:myEmail";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myEmail" => $useremail]); //order of arrays corresponds order of ?
    $email = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCountemail = $stmt->rowCount();

    //collecting rows of phonenumber with same phone
    $sql = "SELECT * FROM user WHERE phone=:myPhone";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myPhone" => $userphone]); //order of arrays corresponds order of ?
    $phone = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCountphone = $stmt->rowCount();

    //welcome to the hack
    if ($rowCountuser == 1) { 

        setcookie("ERROR","That username is already taken.", time() + (86400 * 30), "/");
        header("location: error.php");

    }else if ($rowCountemail == 1) { 
        
        setcookie("ERROR","That email is already taken.", time() + (86400 * 30), "/");
        header("location: error.php");

    }else if ($rowCountphone == 1) { 
        
        setcookie("ERROR","That Phone number is already taken.", time() + (86400 * 30), "/");
        header("location: error.php");

    }else if ($userpassword != $userpasswordConfirm) { 
        
        setcookie("ERROR","Your password does not match the other.", time() + (86400 * 30), "/");
        header("location: error.php");
        
    }else{ //if only data is unique
        //create new user
        $sql = "INSERT INTO `user`(`username`, `email`, `phonenumber`, `password`) VALUES (:name, :email,:phone, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["name" => $username, "email" => $useremail, "phone" => $userphone, "pass" => $userpassword]);
        header("location: login.php");
    }
    ?>