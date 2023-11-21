<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uptestpro.php" method="post">
        <p><label> enter the id to update : </label><br/>
            <?php
            $conn = mysqli_connect("localhost","root","","testdb");
            if($conn) {
                $sql ="SELECT * FROM msgtable";
                $res = mysqli_query($conn,$sql);

                if (mysqli_num_rows($res) > 0) {
                    // select tag in html
                    // <select name="selectId" ></select>
                    echo '<select name="selectedId" >';
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row["id"];
                        echo '<option value="' . $id . '">' . $id . '</option>';
                    }
                    echo '</select>';
                }
                else {
                    echo "0 results";
                }
            }
            else{
                die("Connection failed" .mysqli_connect_error());
            }
            ?> 
            <br/><br/>
            <label> enter the text to update : </label><br/>
            <input type="text" name="newtext" size="30" /><br/><br/>
            <input type="submit" name="submit" value="update record" /><br/><br/>
        </p>
    </form>
</body>
</html>