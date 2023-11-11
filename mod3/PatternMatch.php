<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        enter string: <input type="text" name="str1" id="str1"/>
        <br/><br/>
        enter pattern: <input type="text" name="pat1" id="pat1"/>
        <br/><br/>
        <input type="submit" name="submit" value="enter" />
    </form>
    <br/><br/>

    <?php
    if(isset($_POST['submit']))
    {
        $string = $_POST['str1'];
        $pattern = $_POST['pat1'];        
        if (preg_match($pattern,$string)) {
            echo "$pattern found in $string";
        }
        else {
            echo "$pattern not found in $string";
        }

        // // pattern anchors
        // $pattern = "/^PHP/";
        // if (preg_match($pattern,$string)) {
        //     echo "$pattern found in $string";
        // }
        // else {
        //     echo "$pattern not found in $string";
        // }
    }
    ?>
</body>
</html>