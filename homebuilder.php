<!DOCTYPE html>
<?php
session_start();
include "database.php";
$sql = "SELECT * FROM user WHERE username=:myUser";
$stmt = $pdo->prepare($sql);
$stmt->execute(["myUser" => $_SESSION["Username"]]); //order of arrays corresponds order of ?
$user = $stmt->fetch(PDO::FETCH_OBJ);
$dbuserhouseid = $user->homeid;

$sql = "SELECT * FROM home WHERE id=:myHouseID";
$stmt = $pdo->prepare($sql);
$stmt->execute(["myHouseID" => $dbuserhouseid]); //order of arrays corresponds order of ?
$home = $stmt->fetch(PDO::FETCH_OBJ);
$rowCounthouseID = $stmt->rowCount();
//collecting user house id

$sql = "SELECT billid FROM homebill WHERE homeid=:myHouseID";
$stmt = $pdo->prepare($sql);
$stmt->execute(["myHouseID" => $dbuserhouseid]); //order of arrays corresponds order of ?
$rowCountBills = $stmt->rowCount();
$a=array();
array_push($a,$stmt->fetchALL(PDO::FETCH_COLUMN, 0));
//collecting home bills
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/homeprofile.css">
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
                            
                        <div id ="Homebar">Home Editor</div>
                        <div id="Residentsbar">
                        <a style="font-size:25px">Residents: <a id="userlist"><?php echo $_SESSION["Username"];?></a></a>
                        <form id="billadder" action="billcompiler.php" method="post">
                        <table border ="1">
                        <tr>
                            <th id="header1">Bill</th>
                            <th id="header1">Date Due</th>
                            <th id="header1">Name</th>
                            <th id="header1">Cost</th>
                        </tr>
                            <tr>
                            
                            <td><input name = Bill placeholder = "eg: Electricity" type="text"></td>
                            <td><input name = DueDate placeholder = "eg: 2007/12/17" type="text"></td>
                            <td><input name = Name placeholder = "eg: Hank Adams" type="text"></td>
                            <td><input name = Cost placeholder = "eg: $60129" type="number" ></td>
                            
                        </tr>
                    </table>
                    <input type="submit" class="submitbill" value="Submit">
                    </form>
                    <div id ="Homebar">Bills</div>
                    <table border ="1">
                        <tr>
                            <th id="header1">Bill</th>
                            <th id="header1">Date Due</th>
                            <th id="header1">Name</th>
                            <th id="header1">Cost</th>
                        </tr>
                        <?php 
                        for($i = 0; $i <$rowCountBills; $i++){
                            
                            $sql = "SELECT * FROM bill WHERE id=:myBill";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["myBill" => $a[0][$i]]); 
                            $data = array();
                            $data = $stmt->fetchAll();
                            //collecting bill information

                            echo '<tr>';
                            echo '<th>',$data[0][1],'</th>';
                            echo '<th>',$data[0][3],'</th>';
                            echo '<th>',$data[0][4],'</th>';
                            echo '<th>','$',$data[0][2],'</th>';
                            echo'</tr>';}
                        ?>
                    </table>
				    <?php else : ?>
                    <form id="login" class="form" action="billcompiler.php" method="post">
                    <h2 class="homebuilderTitle">Home Setup</h2>
                    <hr class="homebuilderTitlehr">

                        <label class="field">
                            <input type="text" placeholder="Address" name="Address" id="houseAddress" class="input">
                        </label>
                        <input type="submit" class="submithouse" value="Submit">
                        
                    </form>
							
					<?php endif; ?>
            </div>
        </div>
    </div>
        <?php include "footer.php"; ?>  
    </div>
</body>
</html>