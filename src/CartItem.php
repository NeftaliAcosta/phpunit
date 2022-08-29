<?php

declare(strict_types=1);

namespace App;

use function uniqid;

class CartItem
{
    public $id;

    private $name;

    private $amount;

    public function __construct($name, $amount)
    {
        $this->id     = uniqid();
        $this->name   = $name;
        $this->amount = $amount;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getAmount() : string
    {
        return $this->amount;
    }
}
