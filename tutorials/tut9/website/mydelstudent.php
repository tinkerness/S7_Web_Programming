<?php
    include 'config.php';

    if (isset($_POST["submit"])) {
        $selectedId = $_POST['myid'];

        $sql = "DELETE FROM student WHERE stdid = $selectedId";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Data DELETED successfully!");</script>';
        } 
        else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Web - www.anittasiby.com</title>
    <link href="mystyle.css" rel="stylesheet"/>
</head>

<body>
    <?php
        include 'myheader.html';
        ?>
        <div class="content">
            <h2>View current students in www.anittasiby.com</h2>
            <?php
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    echo "<table align='center' border='border' width='600' cellpadding='10'>
                        <caption><b>List of Students </b></caption><br/> 
                        <tr><th>Student Id</th>
                        <th width='250'>Student Name</th> 
                        <th width='250'>Batch</th>
                        <th width='50'>Branch</th>
                        <th width='50'>Age</th>
                        </tr>" ;
                        // while($row = mysql_fetch_row( $result )) --Deprecated use fetch_assoc{
                        while($row = mysqli_fetch_assoc($result)) {
                            echo  "<tr><td>".$row["stdid"]. "</td><td>" . $row["stdname"].
                            "</td><td>" . $row["batch"]. "</td><td>" 
                            . $row["branch"]."</td><td>".$row["age"]."</td></tr>";
                        }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
            ?>
        </div>
</body>
</html>