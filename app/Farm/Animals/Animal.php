<?php

namespace App\Farm\Animals;

use App\Farm\Products\Product;

abstract class Animal
{

    public $type;
    public Product $product;

    abstract public function growth();
}
