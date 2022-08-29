<?php

declare(strict_types=1);

namespace App;

use function array_merge;
use function array_push;
use function count;
use function reset;
use function uniqid;

class Cart
{
    private $cart;

    public $id;

    public function __construct()
    {
        $this->cart = [];
        $this->id   = uniqid();
    }

    public function add(CartItem $item) : void
    {
        array_push($this->cart, $item);
    }

    public function addItems(array $items) : void
    {
        $this->cart = array_merge($this->cart, $items);
    }

    public function getFirstItem() : CartItem
    {
        return reset($this->cart);
    }

    public function count() : int
    {
        return count($this->cart);
    }

    public function isEmpty() : bool
    {
        return empty($this->cart);
    }
}
