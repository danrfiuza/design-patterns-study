<?php
declare(strict_types=1);

namespace App\Decorator;

use App\Decorator\Contracts\Pizza;
use App\Decorator\ToppingDecorator;

class TomatoSauce extends ToppingDecorator
{
    public function __construct(Pizza $newPizza)
    {
        parent::__construct($newPizza);
        // echo 'Adding Sauce'.PHP_EOL;
    }
    
    public function getDescription(): string
    {
        return $this->tempPizza->getDescription().", Tomato Sauce";
    }

    public function getCost(): float
    {
        return $this->tempPizza->getCost()+4.00;
    }
}