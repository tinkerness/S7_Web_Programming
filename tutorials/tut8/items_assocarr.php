<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Array</title>
</head>
<body>
    <h1>Items Array</h1>
    <?php
    $items = array(
        'Bread' => 30,
        'Butter' => 30,
        'Jam' => 35,
        'Cheese' => 32
    );

    echo "<b>Items Array :</b><br/>";
    foreach ($items as  $product => $price) {
        echo "$product: $price <br/>";
    }
    echo "<br/>";

    asort($items);

    echo "<b>After Sorting (by values):</b><br/>";
    foreach ($items as $product => $price) {
        echo "$product: $price <br/>";
    }
    ?>
</body>
</html>