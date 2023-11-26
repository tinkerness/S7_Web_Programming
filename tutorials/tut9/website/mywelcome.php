<?php
    include 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Web - www.anittasiby.com</title>
    <link href="mystyle.css" rel="stylesheet" />
</head>
<body>
    <?php
    include 'myheader.html';
    ?>

    <div class="content">
        <?php
        if (isset($_SESSION["uname"])) {
            $welcomeMessage = "Welcome, " . $_SESSION["uname"] . "!";
            echo "<h1>$welcomeMessage</h1>";
        } else {
            // If the session variable is not set, redirect to the login page
            //header("Location: testform1.php");
            echo "<h1>Welcome </h1>";
            exit();
        }
        ?>
        <h2>Welcome to My Website www.anittasiby.com</h2>
        <p><img src="images/sjc.jpg" width="500" /></p>
    </div>
</body>
</html>