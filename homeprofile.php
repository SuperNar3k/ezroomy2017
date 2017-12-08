<!DOCTYPE html>
<?php session_start();
include "database.php";
//collecting user house id
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

    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>
<body>
    <div id="container">
        <?php include "nav.php"; ?>
        <div class="body">
            <div class = "content" style="height=100%;width=100%">
                    <?php if($rowCounthouseID==1) : ?>
                            
                        <div id ="Homebar">Home<hr class="homeProfilehr"></hr></div>
                        <div id="Residentsbar">
                        <a style="font-size:25px">Residents: <a id="userlist"><?php echo $_SESSION["Username"];?></a></a>

                        <table border ="1">
                            <tr>
                                <th id="header1">Bill</th>
                                <th id="header1">Date Due</th>
                                <th id="header1">Name</th>
                                <th id="header1">Cost</th>
                            </tr>
                            <?php if($rowCountBills==0) : ?> 
                            <tr>
                                <td COLSPAN=4 ALIGN=CENTER>
                                You have no bills added
                                <button id="housebutton" style="margin-top:0%;font-size:30px"><a href="homebuilder.php" style="color:black">Add Bills!</a></button>
                            </td>
                            </tr>
                            
                                <?php else : ?>
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
                            	<?php endif; ?>
                        </table>

				    <?php else : ?>
                            <div style="font-size:30px;">
							I'm sorry! But it appears no house has been claimed!</div>
							<button id="housebutton"><a href="homebuilder.php" style="color:black">Claim a House!</a></button>
					<?php endif; ?>
            </div>
        </div>  
    </div>
    <?php include "footer.php"; ?> 
</div>
</body>
</html>