<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch Case</h1>
    <?php
        $num = 1;
        print "<h3>number = $num</h3>";
        
        switch($num) {
            case 1: 
                $clr = "red";
                break;
            case 2: 
                $clr = "yellow";
                break;
            case 3: 
                $clr = "green";
                break;
            default: 
                echo "invalid number !";
                break;
        }
        
        print "<h3>colour = $clr</h3>";
    ?>        
</body>
</html>