<?php
if(isset($_POST['submit']))
{
        $myText = $_POST['myname'];
        echo "<br/>Hello " .$myText. " Welcome to PHP World ";
}
else
{?>
<!-- break php else block to render the html part -->
    <html>
        <head><title>Hello Name</title></head>
        <body>
            <p>Enter your name in the from and hit submit button</p>
            <form action="testhello.php" method="post">
                Enter Name : <input type="text" name="myname" />
                <br/><br/>
                <input type="submit" name="submit" value="Greet Me" />
            </form>
        </body>
    </html>
<!-- start php code again -->
<?php
}
?>