<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
</head>
<body>

    <?php
    if(isset($_GET["operator"]))
    {
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op = $_GET['operator'];
        $res = '';

        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($op) {
                case "Add":
                    $res = $n1 + $n2;
                    break;
                case "Sub":
                    $res = $n1 - $n2;
                    break;
                case "Mul":
                    $res = $n1 * $n2;
                    break;
                case "Div":
                    $res = $n1 / $n2;
                    break;
            }
            // echo "Result = " . $res;
        }
    }
    else{
        echo"Enter all values";
    }
    ?>

    <h1>Calculate</h1>
    <form method ="get">
        Number 1: <input type="number" name="num1" id="mum1" required value="<?php echo $n1; ?>"/>
        <br/><br/>
        Number 2: <input type="number" name="num2" id="mum2" required value="<?php echo $n2; ?>"/>
        <br/><br/>
        <input type="submit" name="operator" value="Add"/>
        <input type="submit" name="operator" value="Sub"/>
        <input type="submit" name="operator" value="Mul"/>
        <input type="submit" name="operator" value="Div"/>
        <br/><br/>
        Result : <?php echo $res; ?>
        <br/><br/>
    </form>
    
</body>
</html>