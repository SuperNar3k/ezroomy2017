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
if(isset($_POST["Rent4"])||isset($_POST["DueDate4"])||isset($_POST["Name4"])||isset($_POST["Cost4"])){
    $sql = "INSERT INTO `bill`(`name`, `value`, `due date`) VALUES (:name, :cost, :duedate)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["name" => $billname, "cost" => $billcost, "duedate" => $billduedate]);
} 
?>