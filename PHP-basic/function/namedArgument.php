<?php

// named args / parameter

function total(float $price, int $quantity, float $discount = 0): float{

    return ($price * $quantity) - $discount;
}

echo total(price: 10.12, discount: 2, quantity:2);