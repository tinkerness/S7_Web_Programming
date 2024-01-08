<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>powers table</title>
</head>
<body>
    <table border = "border">
        <caption><b>Powers Table</b></caption>
        <tr><th>Number</th><th>Root</th><th>Square</th><th>Cube</th><th>Quad</th></tr>
        <?php
            for ($num = 1; $num<=10; $num++) {
                $root = sqrt($num);
                $square = pow($num,2);
                $cube = pow($num,3);
                $quad = pow($num,4);

                // print("$num, $root, $square, $cube, $quad<br/>");
                print("<tr align='center'> <td>$num</td> <td>$root</td> <td>$square</td> <td>$cube</td> <td>$quad</td> </tr>");
            }
        ?>
    </table>
</body>
</html>