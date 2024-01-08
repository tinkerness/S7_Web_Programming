<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    class myclass{
        public $myname = "Anitta";

        public function setname($nickname) {
            $this->myname = $nickname;
        }

        public function sayHello() {
            echo "Hello ! My name is " . $this->myname ;
        }
    }

    $obj1 = new myclass();

    $obj1->setname("Anu");

    $obj1->sayHello();

?>
</body>
</html>