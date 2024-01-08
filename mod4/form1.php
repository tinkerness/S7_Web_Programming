<?php
    if (isset($_POST["cancel"])) {
        header("Location: index.php");
    }
    $errormsg = false;
    if (isset($_POST["submit"])) {
        if (($_POST["uname"] != "") || ($_POST["pswd"] != "")) {
            $input_name = $_POST["uname"];
            $input_pswd = $_POST["pswd"];

            if ($input_name == "admin" && $input_pswd == "admin123") {
                header("Location: welcome.php?name=".urlencode($_POST["uname"]));
                return;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Log In</h1>

<?php
if($errormsg !== false) {
    echo('<p style="color: red;">'.htmlentities($errormsg).'</p>');
}
?>

    <form method="POST" action="form1.php">
        Username : <input type="text" name="uname" /><br/>
        Password : <input type="password" name="pswd" /><br/>
        <input type="submit" name="submit" value="log in" /> 
        <input type="submit" name="cancel" value="cancel" /> 
    </form>
</body>
</html>