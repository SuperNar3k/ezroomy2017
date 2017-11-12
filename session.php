<?php 
if(isset($_POST["usernameLogIn"])) {
    $cookie_name = $_POST["usernameLogIn"];
} else if(isset($_POST["passwordLogIn"])) {
    $cookie_value = $_POST["passwordLogIn"];
}

//Setting up a cookie
setcookie($cookie_name, $cookie_value);
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
