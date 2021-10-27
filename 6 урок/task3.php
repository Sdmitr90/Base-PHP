<?php

$link = mysqli_connect("localhost", "user", "user", "hw");

$title = "Отзывы";

if ($_POST['add']) {
    $name = substr((string)htmlspecialchars(strip_tags($_POST['name'])), 0, 64);
    $body = (string)htmlspecialchars(strip_tags($_POST['feedback']));
    $values = "feedback='$body'" . ($name ? ", name='$name'" : "");
    mysqli_query($link, "INSERT INTO feedback SET $values");
}

?>

<div>
    <?php
    $result = mysqli_query($link, "SELECT * FROM feedback");
    while ($feedback = mysqli_fetch_assoc($result)) {
        echo "<div class='feedback'><div><span>".$feedback['name'].": => </span><p style = 'padding-left: 40px'><i>".$feedback['feedback']."</i></p></div></div>\n";
    }
    ?>
</div>

<form action="" method="POST">
    <fieldset class="feedback-form">
        <legend>Оставить отзыв</legend>
        <div>
            <p><input name="name" type="text" placeholder="Введите ваше имя"></p>
            <p><textarea name="feedback" cols="60" rows="10" placeholder="Введите ваш отзыв" required></textarea></p>
            <p><input type="submit" name="add"></p>
        </div>
    </fieldset>
</form>
