<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    $name = "Anitta";
    $txt = "Web Programming using PHP";
    echo "<center><b>I love $txt!</b></center>";
    // echo "<center><b>I love <br> $txt!</b></center>";
    print("<h1><center>Welcome to PHP, $name!</center></h1>");
    ?>
    <section>
        <h2><br>Files</h2>
        <div>
            <ul>
                <!-- basics -->
                <li><a href="index.php">PHP HomePage</a></li>
                <li><a href="helloworld.php">PHP Hello</a></li>
                <li><a href="equal_op_rectangle.php">Equal Operator</a></li>
                <li><a href="datatypes.php">Datatypes</a></li>
                <li><a href="operators.php">Operators</a></li>
                <li><a href="predefined_functions.php">Predefined Functions</a></li>
                <li><a href="randomNum.php">Random Number</a></li>
                <li><a href="constants.php">Constants</a></li>
                <li><a href="dateValue.php">Date</a></li>
            </ul>
            <ul>
                <!-- flow control -->
                <li><a href="if_else.php">If - Else Loop</a></li>
                <li><a href="switchcase.php">Switch Case</a></li>
                <li><a href="powers_table.php">Powers Table</a></li>
                <li><a href="for_each.php">For Each Loop</a></li>
                <li><a href="palindrome.php">Palindrome</a></li>
            </ul>
            <ul>
                <!-- array -->
                <li><a href="array.php">Array</a></li>
                <li><a href="assoc_arr.php">Associative Array</a></li>
                <li><a href="explode_fn.php">Explode Function</a></li>
                <li><a href="explode_implode_fn.php">explode_implode</a></li>
                <li><a href="array_foreach.php">Array processing using For Each</a></li>
                <li><a href="array_sorting.php">Array sorting</a></li>
            </ul>
            <ul>
                <!-- functions -->
                <li><a href="fn_upper.php">Simple Function</a></li>
            </ul>
            <ul>
                <!-- objects -->
                <li><a href="carobj.php">Class & Objects</a></li>
                <li><a href="obj_hello.php">C&O - Hello function</a></li>
            </ul>
            <ul>   
                <!-- string -->
                <li><a href="PatternMatch.php">Pattern-Match</a></li>
                <li><a href="override.php">Method Overriding</a></li>
                <li><a href="strcmp.php">String Compare</a></li>
                <li><a href="regex.php">Regular Expressions</a></li>
            </ul>
        </div>
    </section>
</body>

</html>