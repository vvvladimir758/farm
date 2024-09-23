<?php

namespace App\Farm\Animals;

use App\Farm\Products\Milk;
use App\Farm\Products\Product;
class Cow extends Animal
{

    public $type = "Корова";
    protected const GROWTH_MIN = 8;
    protected const GROWTH_MAX = 12;

    public function __construct()
    {
        $this->product = new Milk(self::GROWTH_MIN, self::GROWTH_MAX);
    }

}
