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
        <h2>Update students in www.anittasiby.com</h2>

        <form action="myupdate.php" method="post">
            <p>
            <label>Student Id</label>&nbsp;
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
            <input type="submit" name="submit" value="Fetch Record" />
        </form>   
                
        <br />

        <form action="myupstudent.php" method="post">
            <?php
                // Retrieve selected ID data and populate form fields
                if (isset($_POST['selectedId'])) {
                    $selectedId = $_POST['selectedId'];
                    $query = "SELECT * FROM student WHERE stdid = $selectedId";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $studentData = mysqli_fetch_assoc($result);
                    ?>
                        <input type="hidden" name="myid" 
                        value="<?php echo $selectedId; ?>"/>
                        <label>Student Name</label>&nbsp;&nbsp;
                        <input type="text" name="myName" size="30" 
                        value="<?php echo $studentData['stdname']; ?>" /><br />
                        <label>Branch</label>&nbsp;&nbsp;
                        <input type="text" name="mybranch" size="30"
                        value="<?php echo $studentData['branch']; ?>" /><br />
                        <label>Batch</label>&nbsp;&nbsp;
                        <input type="text" name="mybatch" size="30" 
                        value="<?php echo $studentData['batch']; ?>" /><br />
                        <label>Age</label>&nbsp;&nbsp;
                        <input type="text" name="myage" size="30" value="<?php echo $studentData['age']; ?>" /><br /><br/>
                        <input type="submit" name="submit" value="Update Record" />
                    <?php
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>