<?php
session_start();
//----------
//username needs to come from session
//----------
    if(isset($_POST["usernameSignUp"])) {
        $username = $_POST["usernameSignUp"];
       
    } 
    else{echo "No username";}
    if(isset($_POST["emailSignUp"])) {

        $useremail = $_POST["emailSignUp"];
 
    }
    else{echo "No email";}
    if(isset($_POST["phoneSignUp"])) {
        
        $userphone = $_POST["phoneSignUp"];
         
    }
    else{echo "No phone number";}
    if(isset($_POST["passwordSignUp"])) {
        
        $userpassword = $_POST["passwordSignUp"];
         
    }
    else{echo "No password";}
    if(isset($_POST["passwordConfirmSignUp"])) {
        
        $userpasswordConfirm = $_POST["passwordConfirmSignUp"];
         
    }
    else{echo "Confirm your password";}
            
   
    

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

        echo "That username is already taken";

    }else if ($rowCountemail == 1) { 
        
        echo "That email is already taken";
        
    }else if ($rowCountphone == 1) { 
        
        echo "That phone is already taken";
        
    }else if ($userpassword != $userpasswordConfirm) { 
        
        echo "Your password does not match the other";
        
    }else{ //if only data is unique
        //create new user
        $sql = "INSERT INTO `user`(`username`, `email`, `phonenumber`, `password`) VALUES (:name, :email,:phone, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["name" => $username, "email" => $useremail, "phone" => $userphone, "pass" => $userpassword]);
        header("location: login.php");
    }
    ?>