<!DOCTYPE html>
<?php
session_start();
include "database.php";
if(isset($_POST["Address"])) {
        $homeAddress = $_POST["Address"];
       
} 
if(isset($_POST["DueDate"])) {

        $billduedate = $_POST["DueDate"];
 
}
if(isset($_POST["Name"])) {
    $billusers = $_POST["Name"];
   
} 
if(isset($_POST["Cost"])) {

    $billcost = $_POST["Cost"];

}
$sql = "SELECT * FROM user WHERE username=:myUser";
$stmt = $pdo->prepare($sql);
$stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
$user = $stmt->fetch(PDO::FETCH_OBJ);
$dbuserhouseid = $user->homeid;
$dbuserphonenumber=$user->phonenumber;
$dbuseremail=$user->email;

$sql = "SELECT * FROM home WHERE id=:myHouseID";
$stmt = $pdo->prepare($sql);
$stmt->execute(["myHouseID" => $dbuserhouseid]); //order of arrays corresponds order of ?
$user = $stmt->fetch(PDO::FETCH_OBJ);
$rowCounthouseID = $stmt->rowCount();
$rowCountaddress = $home->address->rowCount();

if(isset($_POST["Address"])){
    $sql = "INSERT INTO `home`(`address`) VALUES (:address)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["address" => $homeAddress]);
}
if(isset($_POST["Name"])||isset($_POST["Cost"])||isset($_POST["Duedate"])){
    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);
}
//collecting user house id
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/homebuilder.css">

    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    
</head>
<body>
    <div id="container">
        <?php include "nav.php"; ?>
        <div class="body" style="min-height:700px;">
            <div class = "content" style="height=100%;width=100%">
                    <?php if($rowCounthouseID==1) : ?>
                            
                        <div id ="Homebar">Home</div>
                        <div id="Residentsbar">
                        <a style="font-size:25px">Residents: <a id="userlist"><?php echo $_SESSION["Username"];?></a></a>

                        <table>
                            <tr>
                                <th id="header1">Bill</th>
                                <th id="header1">Date Due</th>
                                <th id="header1">Name</th>
                                <th id="header1">Cost</th>
                            </tr>
                            <tr>
                                <form action= "homebuilder.php">
                                <td><input id = Rent type="text"></td>
                                <td><input id = DueDate type="text"></td>
                                <td><input id = Name type="text"></td>
                                <td><input id = Cost type="number" ></td>
                                </form>
                            </tr>
                        </table>

				    <?php else : ?>
                    <form id="login" class="form" action="homebuilder.php" method="post">
                    <h2 class="homebuilderTitle">Home Setup</h2>
                    <hr class="homebuilderTitlehr">

                        <label class="field">
                            <input type="text" placeholder="Address" name="username" id="houseAddress" class="input">
                        </label>
                        <input type="submit" class="submithouse" value="Submit">
                        
                    </form>
							
					<?php endif; ?>
            </div>
        </div>
        <?php include "footer.php"; ?>  
    </div>
</body>
</html>