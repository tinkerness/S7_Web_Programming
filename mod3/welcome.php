<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- <h1>Welcome !</h1> -->
    <?php
    session_start();
    if (isset($_SESSION["username"])){
        $welcomemsg = "Welcome " . $_SESSION["username"] . " !";
        echo "<h1> $welcomemsg </h1><br/>";
    }
    else {
        // header("Location: testlogin.php");
        echo "<h1> Session not set!</h1><br/>";
        exit();
    }
    ?>
</body>
</html>