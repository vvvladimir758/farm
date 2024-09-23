<?php

namespace App\Farm\Products;

use App\Farm\Products\Product;
class Egg extends Product
{

    public function __construct($growthMin, $growthMax){
        $this->type = 'Яйца';
        $this->measureUnit = 'шт.';
        $this->growthMin = $growthMin;
        $this->growthMax = $growthMax;
    }

}
