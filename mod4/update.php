<?php
$dbname="testdb";
$conn = mysqli_connect("localhost","root","","testdb");
if(!$conn)
{
    die("Connection failed" .mysqli_connect_error());
}
// update db
 $sql ="UPDATE testtable SET testfield='I love India' WHERE id=2";
 $res = mysqli_query($conn,$sql);
 if($res)
 {
    echo "<br/>Data updated successfully";
 }
 else
 {
    echo "Error updating data :".mysqli_error($conn);
 }
 mysqli_close($conn);
?>