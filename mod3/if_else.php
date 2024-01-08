<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>If Else</h1>
    <?php
        $num = 1;
        print "<h3>number = $num</h3>";
        if ($num < 5) {
            $clr = "red";
        }
        elseif ($num = 5) {
            $clr = "yellow";
        }  
        else {
            $clr = "green";
        }
        print "<h3>colour = $clr</h3>";
    ?>        
</body>
</html>