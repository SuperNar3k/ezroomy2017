<?php
session_start();
include "database.php";
if(isset($_POST["Address"])){
    $homeAddress = $_POST["Address"];

    $sql = "INSERT INTO `home`(`id`, `address`) VALUES (NULL, :address)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["address" => $homeAddress]);

    $sql = "SELECT * FROM home WHERE address=:myHouseAddress";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myHouseAddress" => $homeAddress]); //order of arrays corresponds order of ?
    $home = $stmt->fetch(PDO::FETCH_OBJ);
    $houseID = $home->id;

    $sql = "UPDATE `user` SET homeid=:houseid WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $_SESSION["Username"],"houseid" => $houseID]); //order of arrays corresponds order of ?
}
if(isset($_POST["Name"])||isset($_POST["Cost"])||isset($_POST["Duedate"])||isset($_POST["Bill"])){
    $billcost = $_POST["Cost"];

    $billduedate = $_POST["DueDate"];

    $billusers = $_POST["Name"];

    $billname = $_POST["Bill"];

    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`,`rp`) VALUES (:name, :cost, :duedate,:rp)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate, "rp" => $billusers]);

    $sql = "SELECT * FROM user WHERE username=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    $dbuserhouseid = $user->homeid;

    $sql = "SELECT * FROM bill WHERE name=:myBill";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myBill" => $billname]); //order of arrays corresponds order of ?
    $bill = $stmt->fetch(PDO::FETCH_OBJ);
    $dbbillid = $bill->id;

    $sql = "INSERT INTO `homebill`(`homeid`, `billid`) VALUES (:homeid, :billid)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["homeid"=> $dbuserhouseid, "billid"=> $dbbillid]);
}
header("location: homebuilder.php");
?>