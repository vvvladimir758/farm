<?php

namespace App\Farm\Animals;

use App\Farm\Products\Egg;
use App\Farm\Products\Product;
class Chicken extends Animal
{

    public $type = "Курица (несушка)";
    protected const GROWTH_MIN = 0;
    protected const GROWTH_MAX = 1;

    public function __construct()
    {
        $this->product = new Egg(self::GROWTH_MIN, self::GROWTH_MAX);
    }

}
