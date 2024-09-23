<?php

namespace App\Farm;

use App\Farm\Animals\Animal;
use App\Farm\Animals\Product;
class Farm
{
    protected array $animals = [];
    protected array $products = [];

    public function addAnimals(Animal $animal, $quntity = 1)
    {
        for ($i = 0; $i < $quntity; $i++) {
            $this->animals[] = $animal;
        }
    }

    protected function countAnimals()
    {
        $countedAnimals = [];
        foreach ($this->animals as $animal) {
            if (!array_key_exists($animal->type, $countedAnimals)) {
                $countedAnimals += [
                    $animal->type => 0
                ];
            }
            $countedAnimals[$animal->type] ++;
        }
        return $countedAnimals;
    }

    public function animalsInfo(): string
    {
        $countedAnimals = $this->countAnimals();
        $infoText = 'Перечень живности'. PHP_EOL;
        foreach ($countedAnimals as $animal => $quntity) {
            $infoText .= $animal . " количество: " . $quntity . PHP_EOL;
        }
        return $infoText;
    }

    public function harvest($quntity = 1)
    {
        for ($i = 0; $i < $quntity; $i++) {
            foreach ($this->animals as $animal) {
                $this->products[] = $animal->growth();
            }
        }
    }
    protected function countProducts()
    {
        $countedProducts = [];
        foreach ($this->products as $product) {
            if (!array_key_exists($product->type, $countedProducts)) {
                $countedProducts += [
                    $product->type => [
                        'count' => 0,
                        'measureUnit' => $product->measureUnit
                    ]
                ];

            }
            $countedProducts[$product->type]['count'] += $product->harvest;
        }
        return $countedProducts;
    }

    public function productsInfo()
    {
        $countedProducts = $this->countProducts();
        $infoText = 'Список продуктов'. PHP_EOL;
        foreach ($countedProducts as $productType => $product) {
            $infoText .= $productType . " количество: "
                . $product['count'] . " " . $product['measureUnit'] . PHP_EOL;
        }
        return $infoText;
    }

}
