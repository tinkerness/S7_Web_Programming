<?php
$dbname = "testdb";
$conn = mysqli_connect("localhost","root","",$dbname);
if($conn)
{
    // echo "Connection to ".$dbname." established successfully <br/>";
    
    $sql ="SELECT * FROM msgtable";
    $res = mysqli_query($conn,$sql);

    if (mysqli_num_rows($res) > 0) {
        echo "<table border='border' width='300'><tr><th>id</th><th>message</th></tr>";
        while ($row = mysqli_fetch_assoc($res)) {
            // echo "<br/>" . $row["id"] . " , " . $row["msg"] . "<br/>";
            echo "<tr><td>".$row["id"]."</td><td>".$row["msg"]."</td><br/>";
        }
        echo "</table>";
    }
    else {
        echo "0 results";
    }
}
else{
    die("Connection failed" .mysqli_connect_error());
}
?>