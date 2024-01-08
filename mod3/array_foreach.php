<html>
    <head><title>For each</title></head>
    <body>
        <h3>For Each Loop</h3>
        <?php

            echo "1. foreach (array as scalar_variable)";
            echo "<br/>";
            
            $name = array("anu","bob","cad");
            foreach ($name as $temp) {
                echo $temp . "<br/>";
            }

            echo "<br/>";

            echo "2. foreach (array as key => value)";
            echo "<br/>";
            $items = array('Bread' => 30, 'Butter' => 20, 'Jam' => 35);
            foreach ($items as  $product => $price) {
                echo "$product: $price <br/>";
            }
        ?>
    </body>
</html>