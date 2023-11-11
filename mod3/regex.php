<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $string = "redefine";
    // $pattern = "/def/";
    
    // if (preg_match($pattern,$string)) {
    //     echo "found";
    // }
    // else{
    //     echo "not found";
    // }

    // $fruitstr = "apple:orange:mango";
    // $fruits = preg_split("/:/",$fruitstr);
    // foreach ($fruits as $key => $value) {
    //     echo $value . "<br><br>";
    // }

    // $str = "Visit Microsoft";
    // // ignores case
    // $pattern = "/microsoft/i";
    // echo preg_match_all($pattern, $str) . "<br><br>";
    // echo preg_replace($pattern, "SJCET", $str);

    $str = "Apples and  Banana";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str) . "<br><br>";

    $str2 = "Visit Microsoft!";
    $pattern2 = "/\b([a-zA-Z])/i";
    echo preg_match($pattern2, $str2) . "<br><br>";
    ?>
</body>
</html>