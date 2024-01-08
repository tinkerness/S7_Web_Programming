<?php
    print("1. Example for explode(): <br/><br/>");
    $str = "Apple, Banana, Orange, Grape";
    print("$str </br>");
    $arr = explode(", ", $str);
    print_r($arr);

    print("<br/><br/>");

    print("2. Example for implode(): <br/><br/>");
    // foreach ($str as  $product => $price) {
    //     echo "$product: $price <br/>";
    // }
    // $arr = array("Apple", "Banana", "Orange", "Grape");
    // print("$arr </br>");
    $str = implode(", ", $arr);
    echo $str;

?>