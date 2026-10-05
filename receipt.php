<?php

require_once 'MenuClass.php';
require_once 'MenuFactory.php';

$order_quantities = $_POST;
$menus = MenuFactory::makeMenus();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>領収書</title>
</head>
<body>
<h1>ありがとうございました</h1>
<table>
    <caption>領収書</caption>
    <tr>
        <th style="padding:10px;">料理名</th>
        <th style="padding:10px;">数</th>
        <th style="padding:10px;">金額(円)</th>
    </tr>

    <?php
    $total = 0;
    foreach ($order_quantities as $key => $quantity) {

        $sub_total = $menus[$key]->subTotal((int)$quantity);
        echo "<tr>";

        echo "<td>{$menus[$key]->name}</td>";
        echo "<td>{$quantity}</td>";
        echo "<td>{$sub_total}</td>";
        echo "</tr>";
        $total += $sub_total * 1.1;
    }
    ?>
</table>

<p><?php echo "合計金額(税込): " . $total. "円" ?></p>
<a href="menu.php">最初の画面へ</a>

</body>
</html>
