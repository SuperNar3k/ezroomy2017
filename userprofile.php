<?php
session_start();
//----------
//username needs to come from session
//----------
    if(isset($_POST["username"])) {
        $username = $_POST["username"];
       
    } 
    if(isset($_POST["password"])) {

        $userpassword = $_POST["password"];
 
    }
   
    

    include "database.php";

    // $sql = "SELECT * FROM user WHERE username=:myUser";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    // $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM user WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    $rowCount = $stmt->rowCount();
    //welcome to the hack
    if ($rowCount != 1) { 

        echo "invalid username or password";

    } else if($rowCount==1){ //if only 1 user returned
        //grab info from db
        $dbusername = $user->username;
        $dbpass = $user->password;

        if($username == $dbusername && $userpassword == $dbpass) { 
            $_SESSION["Username"] = $username;
            header('Location: Profile.php'); 
            echo ("You've reached the point you should move to a different website");
        } else{
             echo "invalid username or password";
        }
    }
     ?>
        

		<!-- <div class="header">
            <img class="icon" src="icon/hiresweb.png" alt="Icon">
			<a class="name">EZROOMY</a>
			<button class="homeprflbutton">Home Profile<i class="fa fa-caret-down"></i></button>
            <button class="userprflbutton">User Profile<i class="fa fa-caret-down"></i></button>
            <a class="menus" href="login.php"> Sign-up/Log-in </a>
		</div> -->