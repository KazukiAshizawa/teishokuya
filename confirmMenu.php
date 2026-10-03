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
    <title>メニュー</title>
</head>
<body>
<h1>確認画面</h1>
<form method="post" action="receipt.php">
    <?php
        $total_price = 0;
        foreach ($order_quantities as $key => $value) {
            if(!empty($value)) {
                echo $menus[$key]->name . " 個数:" . $value . " 値段:" . $value * $menus[$key]->price . "円" . "<br>";
                echo "<input type='hidden' name='{$key}' value= '{$value}'>";
            }
            $total_price += $value * $menus[$key]->price * 1.1;
        }
        echo "<p>合計金額(税込): " . $total_price . "円</p>";
    ?>

    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit">確定</button>
</form>

</body>
</html>