<?php

namespace App\Farm\Animals;

use App\Farm\Products\Milk;
use App\Farm\Products\Product;
class Cow extends Animal
{

    public $type = "Корова";
    public const GROWTH_MIN = 8;
    public const GROWTH_MAX = 12;

    public function __construct()
    {
        $this->product = new Milk(self::GROWTH_MIN, self::GROWTH_MAX);
    }

}
