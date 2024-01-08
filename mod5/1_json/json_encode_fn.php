<?php
    class book {
        public $title = "";
        public $author = "";
        public $yearofpublication = "";
    }

    $book = new Book();
    $book->title = "WWW";
    $book->author = "Ryn Gen";
    $book->yearofpublication = "2019";

    $result = json_encode($book);
    echo "JSON representation is " . $result;
?>