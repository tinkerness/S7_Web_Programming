<?php
if(isset($_POST['submit']))
{
        $num = $_POST['mynum'];
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
            echo " Pa;lindrome ";
        }



        
}
else
{?>
<!-- break php else block to render the html part -->
    <html>
        <head><title>Hello Name</title></head>
        <body>
            <form action="testhello.php" method="post">
                Enter Num : <input type="text" name="mynum" />
                <br/><br/>
                <input type="submit" name="submit" value="Get Result" />
            </form>
        </body>
    </html>
<!-- start php code again -->
<?php
}
?>