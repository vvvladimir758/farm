<?php

namespace App\Farm\Products;

abstract class Product
{
    public $type;
    public $measureUnit;
    protected $growthMin;
    protected $growthMax;

    public $harvest;
    public function growth(): Product
    {
        $this->harvest = rand($this->growthMin, $this->growthMax);
        return clone $this;
    }
}
