<?php
    include 'config.php';
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
        <h2>Delete students in www.anittasiby.com</h2>

        <form action="mydelete.php" method="post">
            <p>
            <label>Enter Student Id to Delete : </label>&nbsp;
            <?php
                $sql = "SELECT * FROM student";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    echo '<select name="selectedId">';
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['stdid'];
                        echo '<option value="' . $id . '">' . $id . '</option>';
                    }
                    echo '</select>';
                }
            ?>
            <input type="submit" name="submit" value="Go" />
        </form>   
                
        <br />

        <form action="mydelstudent.php" method="post">
            <?php
                // Retrieve selected ID data and populate form fields
                if (isset($_POST['selectedId'])) {
                    $selectedId = $_POST['selectedId'];
                    $query = "SELECT * FROM student WHERE stdid = $selectedId";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $studentData = mysqli_fetch_assoc($result);
                    ?>
                        <!-- // Retrieve the selected ID -->
                        <input type="hidden" name="myid" 
                        value="<?php echo $selectedId; ?>"/>
                                                
                        <?php 
                            echo "<table align ='center' border='border' width='600' cellpadding='10'>
                                <caption><b>Student Details </b></caption><br/> 
                                <tr>
                                    <th>Student Id</th>
                                    <th width='250'>Student Name</th> 
                                    <th width='250'>Batch</th>
                                    <th width='50'>Branch</th>
                                    <th width='50'>Age</th>
                                </tr>" ;
                                echo  "<tr><td>".$studentData["stdid"]. "</td><td>" . $studentData['stdname']. "</td><td>" . $studentData["batch"]. "</td><td>" . $studentData["branch"]."</td><td>".$studentData["age"]."</td></tr>";
                            echo "</table><br/>";
                        ?>
                        <input type="submit" name="submit" value="Confirm Delete?" />
                    <?php
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>