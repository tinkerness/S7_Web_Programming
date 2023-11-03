<?php
echo ("My List <br/>");
$mylist[0] = 1;
$mylist[1] = 5;
$mylist[21] = "hello";

foreach( $mylist as $myelement)
echo $myelement."<br/>";
echo "<br/>";

echo ("My Array <br/>");
$list = array(10,20,30,40,50);
foreach($list as $myval)
echo ($myval+2)."<br/>";
echo "<br/>";

// numeric array
echo ("My numeric array <br/>");
$list2[0] = 1;
$list2[1] = 2;
$list2[2] = 3;
foreach( $list2 as $myelt)
echo $myelt."<br/>";
echo "<br/>";

// string array
echo ("String array <br/>");
$list3 = array("Anu","Appu");
foreach( $list3 as $myelt3)
echo $myelt3."<br/>";
echo "<br/>";

// Associative Array
echo ("Associative Array <br/>");
$ages = array("Anu"=>21,"Appu"=>19);
echo "Anu is " . $ages['Anu'] . " years old.";
echo "<br/><br/>";

// Months using for each
echo ("Months using for each <br/>");
$mon = array("Jan" => "first","Feb" => "second","Mar" => "third");
foreach( $mon as $monname => $monvalue)
print( "<p>$monname is the $monvalue month </p> ");
echo "<br/>";
?>