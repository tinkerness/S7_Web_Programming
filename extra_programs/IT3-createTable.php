<?php
/** @author Anitta Siby */
    $dbname = "anittasiby";
    $conn = mysqli_connect("localhost","root","",$dbname);
    if($conn) {
        $sql = "CREATE TABLE test(testField1 INT NOT NULL PRIMARY KEY AUTO_INCREMENT, testField2 VARCHAR (30))";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "Table named test created !";
        } else {
            printf("Table not created !\n", mysqli_error($conn));
        }
    }
    else {
        printf("COnnection failed !\n", mysqli_connect_error());
        exit();
    }
    mysqli_close($conn);
?>