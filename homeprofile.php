<!DOCTYPE html>
<?php session_start();?>
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
    
    <?php include "nav.php"; ?>
    <div class="homeinfo">
        <img class="homeimage" src="images/homeprofilebackground.jpg">
        <div id="hometitle">Home <a id="userlist">(<?php echo $_SESSION["Username"];?>)</a></div>
        <table id="myTable">
            <tr>
                <th id="header1">Bill</th>
                <th id="header1">Date Due</th>
                <th id="header1">Name</th>
                <th id="header1">Cost</th>
                <td><input type="button" class="button" value="+" onclick="addField();"></td>
            </tr>
            <tr>
                <td> <input id="Bill"></td>
            <td> <input id="DueDate"></td>
            <td> <input id="Name"></td>
            <td> <input id="Cost"></td>
            </tr>
            <tr>
            <td><input type="button" class="button" value="+" onclick="submit();"></td>
            </tr>
    </table>
<script>function addField (argument) {
        var myTable = document.getElementById("myTable");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(-1);

        var linksBox = document.createElement("input");
        linksBox.setAttribute("id", "Bill" + currentIndex);

        var keywordsBox = document.createElement("input");
        keywordsBox.setAttribute("id", "DueDate" + currentIndex);

        var violationsBox = document.createElement("input");
        violationsBox.setAttribute("id", "Name" + currentIndex);

        var addRowBox = document.createElement("input");
        addRowBox.setAttribute("id", "Cost" + currentIndex);

        var currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(linksBox);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(keywordsBox);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(violationsBox);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(addRowBox);}

        function addField (argument) {
        var myTable = document.getElementById("myTable");
        var currentIndexc = myTable.columns.length-1;
        for (i = 0; i < currentIndexc; i++) {
            text += "The number is " + i + "<br>";
        }
        document.getElementById("Bill").value = data;
    }</script>
    <?php //collecting rows of emails with same email
    $sql = "SELECT * FROM user WHERE email=:myEmail";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myEmail" => $useremail]); //order of arrays corresponds order of ?
    $email = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCountemail = $stmt->rowCount();
    ?>
    </div>
    <?php include "footer.php"; ?>  
</body>
</html>