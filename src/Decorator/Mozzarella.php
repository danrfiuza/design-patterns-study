<?php
declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\Contracts\Pizza;
use App\Decorator\ToppingDecorator;

class Mozzarella extends ToppingDecorator
{
    public function __construct(Pizza $newPizza)
    {
        parent::__construct($newPizza);
    }
    
    public function getDescription(): string
    {
        return $this->tempPizza->getDescription().", Mozzarella";
    }

    public function getCost(): float
    {
        return $this->tempPizza->getCost()+5.00;
    }
}