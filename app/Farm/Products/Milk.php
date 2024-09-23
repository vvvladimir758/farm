<?php

namespace App\Farm\Products;

use App\Farm\Products\Product;
class Milk extends Product
{

    public function __construct($growthMin, $growthMax)
    {
        $this->type = 'Молоко';
        $this->measureUnit = 'л.';
        $this->growthMin = $growthMin;
        $this->growthMax = $growthMax;
    }
}
