<?php
$conn = mysqli_connect("localhost","root","","testdb");
if($conn)
{
    $mytext = $_POST["newtext"];
    $myid = $_POST["selectedId"];
    $sql = "UPDATE msgtable SET msg='$mytext' WHERE id=$myid";

    if (mysqli_query($conn, $sql)) {
        echo "record updated successfully";
    }
    else {
        echo "error updating record : " . mysqli_error($conn);
    }
}
else{
    die("Connection failed" .mysqli_connect_error());
}
mysqli_close($conn);
?>