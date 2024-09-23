<?php

namespace App\Farm\Products;

abstract class Product
{
    public $type;
    public $measureUnit;
    protected $growthMin;
    protected $growthMax;

    public $harvest;


}
