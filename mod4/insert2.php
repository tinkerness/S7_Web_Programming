<?php
$dbname="testdb";
$conn = mysqli_connect("localhost","root","","testdb");
if($conn)
{
    echo "Connection to ".$dbname." establihed successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
 $sql ="INSERT INTO testtable(testfield) VALUES ('$_POST[testfield]')";
 $res = mysqli_query($conn,$sql);
 if($res=== TRUE)
 {
    // echo "<br/>Data inserted successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
 }
 else
 {
    echo "Error".mysqli_error($conn);
 }
 mysqli_close($conn);
?>