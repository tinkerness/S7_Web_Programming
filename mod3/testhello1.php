<?php
if(isset($_POST['submit']))
{
    // $_POST['textbox_name']
    $myText = $_POST['myname'];
    echo "<br/>Hello " .$myText. " Welcome to PHP World ";
}
?>