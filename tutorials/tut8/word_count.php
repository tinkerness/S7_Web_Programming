<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Words Count</title>
</head>
<body>
    <h1>Words Count</h1>

    <?php
    $text = "Round the decay
    Of that colossal Wreck, boundless and bare
    The lone and level sands stretch far away.";

    function countWords($text) {
        echo "Input Text : " . $text . "<br/><br/>";
        // Remove punctuation and convert to lowercase
        $text = strtolower(preg_replace("/[[:punct:]]/", "", $text));
        // Split into array of words
        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
       
        $wordCount = array();
        foreach ($words as $word) {
            if (isset($wordCount[$word])) {
                $wordCount[$word]++;
            } else {
                $wordCount[$word] = 1;
            }
        }
        
        return $wordCount;
    }

    $wordCount = countWords($text);
    echo "<b>Word counts in the text:</b><br>";
    foreach ($wordCount as $word => $count) {
        echo "$word: $count<br>";
    }
    ?>
</body>
</html>