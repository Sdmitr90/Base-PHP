<?php
$link = mysqli_connect("localhost", "user", "user", "hw");

if (!$link) {
    die('SERVER CONNECTION FAILED...\n: ' . mysql_error());
};
?>