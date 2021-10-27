<?php

$x = $_GET['x'];

$y = $_GET['y'];

$sign = $_GET['sign'];
if ($x === "" || $y === "") {
    $z = "Введите корректные данные";
} else {
    switch ($sign) {
    case 'plus':
        $z = $x + $y;
        break;
    case 'minus':
        $z = $x - $y;
        break;
    case 'pow':
        $z = $x * $y;
        break;
    case 'dev':
       if ($y != 0) {
           $z = $x / $y;
       } else {
           $z = 'бесконечность';
       }
    default:
    $z = "Что-то пошло не так";
    break;   
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form method="get">
    <input name="x" type="number" style="width: 50px" value="<?= $x ?>">
    <select name="sign" style="width: 40px">
        <option <? if ($sign == 'plus') echo 'selected'; ?> value="plus">+</option>
        <option <? if ($sign == 'minus') echo 'selected'; ?> value="minus">-</option>
        <option <? if ($sign == 'pow') echo 'selected'; ?> value="pow">*</option>
        <option <? if ($sign == 'dev') echo 'selected'; ?> value="dev">/</option>
    </select>
    <input name="y" type="number" style="width: 50px" value="<?= $y ?>">
    <input type="submit" value="=" style="width: 30px">
    <b><? if (isset($z)) echo "$z" ?></b>
</form>
</body>
</html>