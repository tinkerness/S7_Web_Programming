<?php
$servername="localhost";
$username="root";
$password="";
$dbname="testdb";
// create
$conn = mysqli_connect($servername,$username,$password,$dbname);
// check
if($conn)
{
    echo "Connection to ".$dbname." established successfully";
}
else{
    die("Connection failed" .mysqli_connect_error());
}
?>