<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function writemsg($fname) {
        $newname = strtoupper($fname);
        $greet = "Hello $newname";
        echo "<h3>$greet</h3>";
    }

    $myname = "Anitta";
    writemsg($myname);
?>
</body>
</html>