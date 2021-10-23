<?php
require_once 'db.php';

$id = $_GET['image_id'] ?? null;
if ($id && is_numeric($id)) {
  mysqli_query($link, 'update gallery set likes = likes + 1 where id =' . $id);
  $result = mysqli_query($link, 'select * from gallery where id=' . $id);
  $image = mysqli_fetch_assoc($result);
    if($image){
      echo '<img src="' . $image['path'] . $image['name'] . ' "></a>';
      echo '<p> Количество кликов: ' . $image['likes']. '</p>';
    }
    else {
      die("нет изображения" . $id);
    }
}
?>