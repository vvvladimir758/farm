<?php

namespace App\Farm\Animals;

use App\Farm\Products\Product;

abstract class Animal
{

    public $type;
    public Product $product;

    public function growth(): Product
    {
        return $this->product->growth();
    }

}
