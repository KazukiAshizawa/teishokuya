<?php

class menu {
    public string $name;
    public int $price;


    function __construct(string $name, int $price) {
        $this->name=$name;
        $this->price=$price;
    }
}