<?php 
    include 'config.php';

    if (isset($_GET['cancel'])) {
        // Redirect the browser 
        header("Location: index.php");
        exit(); // Add this to stop further execution
    }

    $failure = false;

    // Check to see if we have some GET data, if we do process it
    if (isset($_GET['who']) && isset($_GET['pass'])) {
        $studentId = $_GET['who'];
        $password = $_GET['pass'];

        // Validate and sanitize input
        //$studentId = mysqli_real_escape_string($conn, $studentId);
        //$password = mysqli_real_escape_string($conn, $password);

        // Check if the student ID and password match in the database
        $sql = "SELECT * FROM student WHERE stdid = '$studentId'";
        echo $sql;
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Redirect to welcome page with the student's name
            if($password==="student"){
                session_start(); 
                $_SESSION["uname"]=$row['stdname'];
        
                header("Location: mywelcome.php?name=" . urlencode($row['stdname']));
                exit(); // Add this to stop further execution
            }
            else {
                $failure = "Incorrect  password";  
            }
        }
        else {
            $failure = "Incorrect student ID ";
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
    <?php include 'myheader.html'; ?>

    <div class="content">
        <h2>Login as Student in www.anittasiby.com with ID and PASSWORD -student</h2>

        <?php
        if ($failure !== false) {
            echo('<p style="color: red;">' . htmlentities($failure) . "</p>\n");
        }
        ?>

        <form method="GET" action="mylogin.php">
            <label>Student Id</label>
            <input type="text" name="who" id="nam">
            <br/><br/>
            <label>Password</label>
            <input type="password" name="pass" id="id_1723">
            <br/><br/>
            <input type="submit" value="Log In">
            <input type="submit" name="cancel" value="Cancel">
        </form>
    </div>
</body>
</html>