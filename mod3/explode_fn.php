<?php
echo '$str = "Welcome to PHP World"';
echo "<br/><br/>";

echo ("Explode Funtion<br/>");
$str = "Welcome to PHP World";
$words = explode(" ",$str);

foreach( $words as $myelement)
echo $myelement."<br/>";
echo "<br/>";

echo ("Implode Funtion<br/>");
$str2 = implode(" ",$words);
echo $str2;
?>