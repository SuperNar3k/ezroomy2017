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
        <div id="hometitle">Home</div>
        <table>
            <tr>
                <th>Bill</th>
                <th>Date Due</th>
                <th>Name</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td>
                <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="#home">Electricity</a>
                    <a href="#about">Water</a>
                    <a href="#contact">Rent</a>
                  </div>
                </div>
                
                <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
                </td>
                <td>xx/xx/xx</td>
                <td>Bob</td>
                <td>$666</td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>xx/xx/xx</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>xx/xx/xx</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>xx/xx/xx</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
    </table>
    </div>
    <?php include "footer.php"; ?> 
</body>
</html>