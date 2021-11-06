<?php

$products = mysqli_query($link, "SELECT * FROM products");

while ($prod = mysqli_fetch_assoc($products)) {
    $content .= "<div class='product'>
<span>Цена: <b>" . $prod['price'] . "</b> руб.<p>
<form action='' method='POST'>
    <input type='hidden' name='buy' value='".$prod['id']."'>
    <input type='submit' value='Купить'>
</form>
</p></span>
<p>". $prod['name'] ."</p></div>";
}

if ($_POST['buy']) {
    $buy = intval($_POST['buy']);
    $result = mysqli_query($link, "SELECT price FROM products WHERE id=".$buy);
    if (mysqli_num_rows($result)) {
        $product = mysqli_fetch_assoc($result);
        $_SESSION['cart']['products'][$buy] += 1;
        $_SESSION['cart']['quantity'] += 1;
        $_SESSION['cart']['total'] += $product['price'];
    }
}
