<?php declare(strict_types=1);

namespace App\Visitor;

class Tobacco extends Visitable
{
    private $price;

    public function __construct(float $item)
    {
        $this->price = $item;
    }

    public function getPrice() : float
    {
        return $this->price;
    }
}