<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery_single_page</title>
    <style>
    body {
        margin: 50px auto;
        width: 800px;
    }

    img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        margin: 10px;
    }
    </style>
</head>

<body>

<?php
require_once 'db.php';

$result = mysqli_query($link, "select * from gallery where 1 order by likes desc");

while ($row = mysqli_fetch_assoc($result)){
    echo '<a href="/show_images.php?image_id=' . $row['id'] . '">';
    echo '<img src="' . $row['path'] . $row['name'] . ' "></a>';
}

?>
</body>

</html>