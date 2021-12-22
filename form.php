<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page - Index</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name: <input type="text" name="fname"><br><br>
        Age:  <input type="text" name="age"><br><br>
        <input type="submit" name="Save">
    </form>

    <?php
        if(isset($_POST['Save'])) {
            echo $_POST['fname'] . "<br>";
            echo $_POST['age'] . "<br>";
        }
    ?>
</body>
</html>