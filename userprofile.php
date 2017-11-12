<?php
//----------
    include "session.php";

//----------
    // if(isset($_POST["usernameLogIn"])) {
    //     $username = $_POST["usernameLogIn"];
    // } else if(isset($_POST["passwordLogIn"])) {
    //     $password = $_POST["passwordLogIn"];
    // }
    $username = $_SESSION["username"];

    echo $username . " THIS IS FROM SESSION";

    include "database.php";

    //  $sql = "SELECT username FROM user where username=";
   

    //  $stmt = $pdo->prepare($sql);
    //  $stmt->execute(); //order of arrays corresponds order of ?
    //  $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM user WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    

     foreach($rows as $row) { 
        ?>
            <p><?=$row->username?> tel: <?=$row->password?></p>

        <?php } ?>

