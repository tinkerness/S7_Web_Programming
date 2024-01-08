<?php
    $jsonobj = '{
        "name":"John",
        "age":30,
        "email":"john@gmail.com"
    }';
    
    $obj = json_decode($jsonobj);
    echo "<br/>Name : ".$obj->name."<br/>Age : ".$obj->age."<br/>Email : ".$obj->email."<br/><br/>";

    // php function
    var_dump($obj);

?>