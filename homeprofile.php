<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/homeprofile.css">

    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script> $(".dropdown-content li a").click(function(){

             $(this).parents(".dropbtn").find('.dropdown').text($(this).text());
             $(this).parents(".dropbtn").find('.dropdown').val($(this).text());

             }); </script>
    <?php include "nav.php"; ?>
    <div>
        <table>
    <tr>
        <th>Bill</th>
        <th>Date Due</th>
        <th>Name</th>
        <th>Cost</th>
    </tr>
    <tr>
        <td>
            <div class="dropbtn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Option: <span class="dropdown">Option 1</span><span class="caret"></span>
            </button>
            <ul class="dropdown-content" role="menu">
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
            </ul>
            </div>
        </td>
        <td>Util2</td>
        <td>Util3</td>
    </tr>
    <tr>
        <td>Lois</td>
        <td>Griffin</td>
        <td>$150</td>
    </tr>
    <tr>
        <td>Joe</td>
        <td>Swanson</td>
        <td>$300</td>
    </tr>
    <tr>
        <td>Cleveland</td>
        <td>Brown</td>
        <td>$250</td>
    </tr>
    </table>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>