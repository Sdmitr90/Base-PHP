<?php

if ($_POST['minus']) {
    $minus = intval($_POST['minus']);
    $_SESSION['cart']['products'][$minus] -= 1;
    
}
if ($_POST['plus']) {
    $plus = intval($_POST['plus']);
    $_SESSION['cart']['products'][$plus] += 1;
}
if ($_POST['delete']) {
    $delete = intval($_POST['delete']);
    $_SESSION['cart']['products'][$delete] = 0;
}

$content .= "<table class='cart'>";

if ($_SESSION['cart']['quantity']>0) {
    $total = 0;
    $content .= "<table class='cart'>";

    foreach ($_SESSION['cart']['products'] as $prodId => $productQuant) {
        $result = mysqli_query($link, "SELECT * FROM products WHERE id=".$prodId);

        if (($prod = mysqli_fetch_assoc($result)) && $productQuant > 0) {
            $content .= "<tr>
                <td><b>".$prod['name']."</b></td>
                <td>".$prod['price']." руб.</td>
                <td>
                    <form action='' method='POST'>
                        <input type='hidden' name='minus' value='".$prodId."'>
                        <input type='submit' value='-'>
                    </form>
                    ".$productQuant." шт.
                    <form action='' method='POST'>
                        <input type='hidden' name='plus' value='".$prodId."'>
                        <input type='submit' value='+'>
                    </form>
                </td>
                <td><b>".$prod['price']*$productQuant." руб.</b></td>
                <td>
                    <form action='' method='POST'>
                        <input type='hidden' name='delete' value='".$prodId."'>
                        <input type='submit' value='Удалить'>
                    </form>
                </td>
            </tr>";
            $total += $prod['price']*$productQuant;
        }
        else {
            unset($_SESSION['cart']['products'][$prodId]);
        }
    }

    $content .= "<tr><td colspan='4'></td><td><b>".$total." руб.</b></td></tr></table>";
}
