<?php
    $dbname="testdb";
    $conn = mysqli_connect("localhost","root","","testdb");
    if(!$conn) {
        die("Connection failed : " .mysqli_connect_error());
    }

    $name = $email = $username = $password = $course = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["inpname"]);
        $email = test_input($_POST["inpemail"]);
        $username = test_input($_POST["inpusername"]);
        $password = password_hash(test_input($_POST["inppassword"]), PASSWORD_DEFAULT);
        $course = test_input($_POST["inpcourse"]);

        $sql = "INSERT INTO studentreg (name, email, username, password, course) VALUES ('$name', '$email', '$username', '$password', '$course')";

        $res = mysqli_query($conn,$sql);
        if($res=== TRUE) {
            echo "<br/>Registration successful ! ";
        }
        else {
            echo "Error : ".mysqli_error($conn);
        }
    }

    mysqli_close($conn);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }    
?>