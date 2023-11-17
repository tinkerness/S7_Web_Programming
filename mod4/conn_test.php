<?php
$servername="localhost";
$username="root";
$password="";
$dbname="testdb";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection to ".$dbname." established successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
?>