<?php
if(isset($_POST["Rent"])) {
        $billname = $_POST["Rent"];
       
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
if(isset($_POST["Rent2"])) {
    $billname2 = $_POST["Rent2"];
   
} 
if(isset($_POST["DueDate2"])) {

    $billduedate2 = $_POST["DueDate2"];

}
if(isset($_POST["Name2"])) {
$billusers2 = $_POST["Name2"];

} 
if(isset($_POST["Cost2"])) {

$billcost2 = $_POST["Cost2"];

}
if(isset($_POST["Rent3"])) {
    $billname3 = $_POST["Rent3"];
   
} 
if(isset($_POST["DueDate3"])) {

    $billduedate3 = $_POST["DueDate3"];

}
if(isset($_POST["Name3"])) {
$billusers3 = $_POST["Name3"];

} 
if(isset($_POST["Cost3"])) {

$billcost3 = $_POST["Cost3"];

}
if(isset($_POST["Rent4"])) {
    $billname4 = $_POST["Rent4"];
   
} 
if(isset($_POST["DueDate4"])) {

    $billduedate4 = $_POST["DueDate4"];

}
if(isset($_POST["Name4"])) {
$billusers4 = $_POST["Name4"];

} 
if(isset($_POST["Cost4"])) {

$billcost4 = $_POST["Cost4"];

}
    if(isset($_POST["Rent1"])||isset($_POST["DueDate1"])||isset($_POST["Name1"])||isset($_POST["Cost1"])){
        if(isset($_POST["Rent2"])||isset($_POST["DueDate2"])||isset($_POST["Name2"])||isset($_POST["Cost2"])){
            if(isset($_POST["Rent3"])||isset($_POST["DueDate3"])||isset($_POST["Name3"])||isset($_POST["Cost3"])){
                if(isset($_POST["Rent4"])||isset($_POST["DueDate4"])||isset($_POST["Name4"])||isset($_POST["Cost4"])){
                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);
    
                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname2, "cost" => $billcost2, "duedate" => $billduedate2]);

                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname3, "cost" => $billcost3, "duedate" => $billduedate3]);

                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname4, "cost" => $billcost4, "duedate" => $billduedate4]);
                } 
                else{
                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);
    
                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname2, "cost" => $billcost2, "duedate" => $billduedate2]);

                    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["name" => $billname3, "cost" => $billcost3, "duedate" => $billduedate3]);
                }
            }
            else{
                $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);

                $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(["name" => $billname2, "cost" => $billcost2, "duedate" => $billduedate2]);
            }
        } 
        else{
            $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);
        }
    } 
    else{echo "No data entered!";}
    
}


?>