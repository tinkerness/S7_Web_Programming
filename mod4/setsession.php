<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $_SESSION["uname"] = "admin";
    $_SESSION["age"] = 25;
    echo "Session variables are set.";

    echo "<h2>welcome " . $_SESSION["uname"] . " !</h2>";

    // to destroy
    // session_unset();
    // session_destroy();
    // echo "Session cleared.";
?>
</body>
</html>