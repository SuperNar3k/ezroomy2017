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
                <td>Rent</td>
                <td>xx/xx/xx</td>
                <td>Bob</td>
                <td>$666</td>
            </tr>
            <tr>
                <td>Electricity</td>
                <td>xx/xx/xx</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Water</td>
                <td>xx/xx/xx</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Internet</td>
                <td>xx/xx/xx</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
    </table>
    </div>
    <?php include "footer.php"; ?>  
</body>
</html>