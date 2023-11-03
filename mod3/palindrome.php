<?php
if(isset($_POST['submit']))
{
    // number_format($num), (int)$num, intval($num)
    $num = intval($_POST['mynum']);
    $x =0;
    $n = $num;
    while (floor($num)) 
    {
        $mod = $num%10;
        $x = $x * 10 + $mod;
        $num = $num/10;
    }
    if($n == $x)
    {
        echo "$n is a Palindrome number.";
    }
    else
    {
        echo "$n is not a Palindrome number.";
    }     
}
else
{?>
<!-- html part -->
    <html>
        <head><title>Palindrome</title></head>
        <body>
            <form action="palindrome.php" method="post">
                Enter Num : <input type="text" name="mynum" />
                <br/><br/>
                <input type="submit" name="submit" value="Get Result" />
            </form>
        </body>
    </html>
<!-- php part -->
<?php
}
?>
