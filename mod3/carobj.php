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
        public $model;
        // public function start($brand){
        //     echo $brand . " car engine started!";
        // }
        public function start(){
            echo $this->brand . " car engine started!";
        }
    }

    $car1 = new car();
    $car1->brand = "toyota";
    $car1->model = "camry";
    $car1->start();
    // $car1->start($car1->brand);
    ?>
</body>
</html>