<?php

$a = $_POST['x'];

$b = $_POST['y'];

if (isset($_POST['operation'])) {
    if ($a === "" || $b === "") {
        $result = "Введите корректные данные";
    } else {
        switch ($_POST['operation']) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    $result = "бесконечность";
                } else {
                    $result = $a / $b;
                }
                break;
            default:
                $result = "Что-то пошло не так";
                break;
        }
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
<form method="post">
    <input type="number" name="x" style="width: 50px" value="<?= $a ?>">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="number" name="y" style="width: 50px" value="<?= $b ?>">
    <div><b>Результат: <?= $result ?></b></div>
</form>
</body>
</html>