<?php
    $cookie_name = "user";
    $cookie_val = "admin123";
    setcookie($cookie_name, $cookie_val, time()+5, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
    <title>Cookies</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named " .$cookie_name . " is not set!";
        }
        else {
            echo "Cookie named " .$cookie_name . " is set!<br/>";
            echo "Value is " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>