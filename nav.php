<div class="header">
<a class="name" href="index.php"><img class="icon" src="icon/hiresweb.png" alt="Icon">EZROOMY</a>
<a class="menus" href="homeprofile.php">Home Profile</a>
<?php if(isset($_SESSION["Username"])) : ?>
<a class="menus" href="Profile.php">User Profile</a>
<a class="menus" href="logout.php">Log-out</a>
<?php else : ?>
<a class="menus" href="login.php">Log-in</a>
<?php endif; ?>

</div>