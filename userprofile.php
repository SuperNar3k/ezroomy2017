<?php
//----------
//username needs to come from session
//----------
    if(isset($_POST["usernameLogIn"])) {
        $username = $_POST["usernameLogIn"];
    } else if(isset($_POST["passwordLogIn"])) {
        $password = $_POST["passwordLogIn"];
    }
   
    echo $username . " THIS IS FROM FORM";

    include "database.php";

    $sql = "SELECT * FROM user WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

     foreach($rows as $row) { 
        ?>
            <p><?=$row->username?> tel: <?=$row->password?></p>

        <?php } ?>

