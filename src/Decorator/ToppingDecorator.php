<?php
declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\Contracts\Pizza;

abstract class ToppingDecorator implements Pizza
{
    protected $tempPizza;

    public function __construct(Pizza $newPizza)
    {
        $this->tempPizza = $newPizza;
    }
    public function getDescription(): string
    {
        return $this->tempPizza->getDescription();
    }

    public function getCost(): float
    {
        return $this->tempPizza->getCost();
    }
}