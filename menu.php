<?php

require_once 'MenuClass.php';
require_once 'MenuFactory.php';

$menus = MenuFactory::makeMenus();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>メニュー</title>
</head>
<body>
<h1>メニュー</h1>
<form method="post" action="confirmMenu.php">
    <div>
        <div>
            <div>
                <p>➀<?php echo $menus["chicken_nanban"]->name ?> <?php echo $menus["chicken_nanban"]->price ?>円 個数：<input type="number" name="chicken_nanban" value="0" min="0"></p>
                <p>➁<?php echo $menus["curry"]->name ?> <?php echo $menus["curry"]->price ?>円 個数：<input type="number" name="curry" value="0" min="0"></p>
                <p>③<?php echo $menus["karaage"]->name ?> <?php echo $menus["karaage"]->price ?>円 個数：<input type="number" name="karaage" value="0" min="0"></p>
                <p>オプション（唐揚げ定食のみ）</p>
                <p>・<?php echo $menus["chili_sauce"]->name ?> <?php echo $menus["chili_sauce"]->price ?>円 個数：<input type="number" name="chili_sauce" value="0" min="0"></p>
                <p>・<?php echo $menus["daikon_oroshi_sauce"]->name ?> <?php echo $menus["daikon_oroshi_sauce"]->price ?>円 個数：<input type="number" name="daikon_oroshi_sauce" value="0" min="0"></p>
                <p>・<?php echo $menus["wasabi_shoyu"]->name ?> <?php echo $menus["wasabi_shoyu"]->price ?>円 個数：<input type="number" name="wasabi_shoyu" value="0" min="0"></p>
            </div>
        </div>
    </div>　
    <button type="submit">確認画面へ</button>
</form>

</body>
</html>