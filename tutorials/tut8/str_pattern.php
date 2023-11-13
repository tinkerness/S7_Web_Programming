<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Pattern</title>
</head>
<body>
    <h1>String Pattern</h1>
    
    <form action="str_pattern.php" method="post">
        Enter string: <input type="text" name="str1" id="str1"/>
        <br/><br/>
        Enter pattern: <input type="text" name="pat1" id="pat1"/>
        <br/><br/>
        <input type="submit" name="submit" value="Check" />
    </form>
    <br/><br/>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['str1']) && isset($_POST['pat1']))
        {
            $string = $_POST['str1'];
            $inputpattern = $_POST['pat1'];        

            $pattern = "/" . preg_quote($inputpattern, '/') . "/i";
            if (preg_match($pattern,$string)) {
                echo "The string pattern \"$pattern\" is found in \"$string\".";
            }
            else {
                echo "The string pattern \"$pattern\" is not found in \"$string\".";
            }
        }
    }
    ?>
</body>
</html>