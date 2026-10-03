<?php

class MenuFactory {
    public static function makeMenus(): array
    {
        $menus = [
            "karaage" => new menu("唐揚げ定食",900),
            "chicken_nanban" => new menu("チキン南蛮定食",1000),
            "curry" => new menu("カレー",750),
            "chili_sauce" => new menu("チリソース",50),
            "daikon_oroshi_sauce" => new menu("大根おろしソース",100),
            "wasabi_shoyu" => new menu("わさび醤油",50)
        ];

        return $menus;
    }
}