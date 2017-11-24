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
            <tr>
                <form>
                <td><input id = Rent2 type="text"></td>
                <td><input id = DueDate2 type="text"></td>
                <td><input id = Name2 type="text"></td>
                <td><input id = Cost2 type="number" ></td>
                </form>
            </tr>
            <tr>
                <form>
                <td><input id = Rent3 type="text"></td>
                <td><input id = DueDate3 type="text"></td>
                <td><input id = Name3 type="text"></td>
                <td><input id = Cost3 type="number" ></td>
                </form>
            </tr>
            <tr>
                <form>
                <td><input id = Rent4 type="text"></td>
                <td><input id = DueDate4 type="text"></td>
                <td><input id = Name4 type="text"></td>
                <td><input id = Cost4 type="number" ></td>
                </form>
            </tr>
            <tr>
                <td><button id="savebutton">Save!</a></button></td>
            </tr>
    </table>
    </div>
    <?php include "footer.php"; ?>  
</body>
</html>