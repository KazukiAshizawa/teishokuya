<?php

class menu {
    public string $name;
    public int $price;


    function __construct(string $name, int $price) {
        $this->name=$name;
        $this->price=$price;
    }

    /**
     * 小計（税抜き）を求める。
     *
     * @param int $quantity
     * @return int
     */
    public function subTotal(int $quantity): int {
        return $this->price * $quantity;
    }
}