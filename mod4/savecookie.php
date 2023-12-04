<?php
if (isset($_POST["submit"])) {
    setcookie("name",$_POST["uname"],time()+500);
    setcookie("colour",$_POST["clr"],time()+500);
    $name = $_COOKIE["name"];
    $colour = $_COOKIE["colour"];
    echo "Cookies set :<br/>";
    echo "Name : $name <br/> Colour : $colour <br/> ";
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="savecookie.php" method="post">
        Enter Name :
        <input type="text" name="uname" />
        <br/><br/>
        Enter Colour :
        <input type="text" name="clr" />
        <br/><br/>
        <input type="submit" name="submit" value="Set Cookie" />
    </form>
</body>
</html>
<?php
}
?>