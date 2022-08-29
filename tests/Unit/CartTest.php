<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\CartItem;

class CartTest extends TestCase
{
    public function testItCreatesACart()
    {
        $item = new CartItem('Mouse', 20);
        $cart = new Cart();

        $this->assertEquals(0, $cart->count());

        $cart->add($item);

        $this->assertEquals(1, $cart->count());
    }

    public function testItAddMultiplesItems()
    {
        $items = [];
        $cart = new Cart();

        $this->assertEquals(0, $cart->count());

        for ($i = 1; $i <= 5; $i++) {
            array_push($items, new CartItem("Mouse", 20));
        }

        $cart->addItems($items);

        $this->assertEquals(count($items), $cart->count());
    }
}