<?php
require "db.php";
$content = '';

session_start();
require "products.php";
require "cart.php";
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home work 7 lesson</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?=$content;?>
</body>
</html>
