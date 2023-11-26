<?php
    print("1. Example for explode(): <br/><br/>");
    $str = "Apple, Banana, Orange, Grape";
    $arr = explode(", ", $str);
    print_r($arr);

    print("<br/><br/>");

    print("2. Example for implode(): <br/><br/>");
    $arr = array("Apple", "Banana", "Orange", "Grape");
    $str = implode(", ", $arr);
    echo $str;

?>