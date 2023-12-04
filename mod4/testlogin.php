<?php
session_start();
    if (isset($_POST["submit"])) {
        if (($_POST["uname"] != "") || ($_POST["pswd"] != "")) {
            $input_name = $_POST["uname"];
            $input_pswd = $_POST["pswd"];

            if ($input_name == "admin" && $input_pswd == "admin123") {
                $_SESSION["username"] = $input_name;
                header("Location: welcome.php");
            }
            else {
                $errormsg = "Invalid username and password!";
            }
        }
        else {
            $errormsg = "Enter username and password!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<?php
if(isset($errormsg)) {
    echo "<p style='color: red;'>$errormsg</p>";
}
?>
    <form action="testlogin.php" method="post">
        Enter your login credentials: 
        <br/><br/>
        Enter Username :
        <input type="text" name="uname" />
        <br/><br/>
        Enter Password :
        <input type="password" name="pswd" />
        <br/><br/>
        <input type="submit" name="submit" value="Login" />
    </form>
</body>
</html>