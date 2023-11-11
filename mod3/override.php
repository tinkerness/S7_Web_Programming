<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class car{
        public $brand;

        // constructor
        function __construct($b) {
            $this->brand = $b;
        }
        
        public function welcome() {
            echo "welcome " . $this->brand . " !";
        }
    }

    class toycar extends car {
        public function welcome() {
            echo "welcome toy car " . $this->brand . " !";
            echo "<br><br>method overriding ";
        }
    }

    $car1 = new toycar("toyota");
    // $car1->brand = "toyota";
    $car1->welcome();
    ?>
</body>
</html>