<?php
include 'config.php';
if (isset($_POST["submit"])) {
    // Assuming you have already established a database connection
    // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

    $stdid = $_POST['stdid'];
    $stdname = $_POST['stdname'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];
    $age = $_POST['age'];

    $sql = "INSERT INTO student (stdid, stdname, branch, batch, age) VALUES ('$stdid', '$stdname', '$branch', '$batch', '$age')";
//echo $sql;
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '<script>alert("Data Inserted successfully!");</script>';
    } else {
        die("Error: " . mysqli_error($conn));
    }

    mysqli_close($conn);
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
        <h2>Add student to www.anittasiby.com</h2>
        <form method="post" action="add_student.php">
            Student Id: <input type="text" name="stdid" required/><br>
            Name: <input type="text" name="stdname" required/><br>
            Branch: <input type="text" name="branch" required/><br>
            Age: <input type="number" name="age" required/><br>
            Batch: <input type="text" name="batch" required/><br>
            <br/>
            <input type="submit" name="submit" value="Add Student"/>
        </form>
        <h1>
        </h1>
    </div>
</body>
</html>