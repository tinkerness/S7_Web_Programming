<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Student Names</title>
</head>
<body>
    <h1>Sorting Student Names</h1>
    <?php
    $studentNames = array("Alice", "David", "Charlie", "Bob", "Eve");
    echo "<b>Before Sorting:</b><br>";
    foreach ($studentNames as $name) {
        echo $name . "<br>";
    }
    echo "<br/>";

    sort($studentNames);

    echo "<b>After Sorting:</b><br>";
    foreach ($studentNames as $name) {
        echo $name . "<br>";
    }
    ?>
</body>
</html>