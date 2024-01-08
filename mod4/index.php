<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    $name = "Anitta";
    $txt = "Web Programming using PHP";
    echo "<center><b>I love $txt!</b></center>";
    print("<h1><center>Welcome to PHP, $name!</center></h1>");
    ?>
    <section>
        <h2><br>Files</h2>
        <div>
            <ul>
                <!-- Form Processing -->
                <li><a href="form1.php">Form</a></li>
                <li><a href="calculate.php">Calculator</a></li>
            </ul>
            <ul>
                <!-- Cookies & Sessions -->
                <li><a href="cookie.php">Cookies</a></li>
                <li><a href="savecookie.php">Write Cookies</a></li>
                <li><a href="setsession.php">Set session</a></li>
                <li><a href="testlogin.php">Session example</a></li>
            </ul>
            <ul>    
                <!-- MySQL -->
                <li><a href="conn_test.php">Connection</a></li>
                <li>Run <a href="testinsert.php">Insert into table</a> using <a href="testform1.html">HTML form 1</a></li>
                <li><a href="insert2.php">insert 2</a> using <a href="testform2.html">HTML form 2</a></li>
                <li><a href="tablecreate.php">create table</a></li>
                <li><a href="update.php">update</a></li>
                <li><a href="fetchdata.php">Display data in table</a></li>
                <li><a href="updaterec.php">update record</a> (using <a href="uptestpro.html">code</a>)</li>
            </ul>
        </div>
    </section>
</body>

</html>