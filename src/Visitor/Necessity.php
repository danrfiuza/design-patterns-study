<?php declare(strict_types=1);

namespace App\Visitor;

class Necessity extends Visitable
{
    private $price;

    public function __construct(float $item) : void
    {
        $this->price = $item;
    }

    public function getPrice() : float
    {
        return $this->price;
    }
}