<?php
$dbname="testdb";
$conn = mysqli_connect("localhost","root","","testdb");
if($conn)
{
    echo "Connection to ".$dbname." established successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
// create query
 $sql ="INSERT INTO testtable(testfield) VALUES ('$_POST[testfield]')";
//  execute query
 $res = mysqli_query($conn,$sql);
 if($res=== TRUE)
 {
    echo "<br/>Data inserted successfully";
 }
 else
 {
    echo "Error".mysqli_error($conn);
 }
 mysqli_close($conn);
?>