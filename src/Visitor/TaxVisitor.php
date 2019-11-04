<?php declare(strict_types=1);

namespace App\Visitor;

use App\Visitor\Visitor;
use App\Visitor\Liquor;
use App\Visitor\Tobacco;
use App\Visitor\Necessity;

class TaxVisitor implements Visitor
{
    public function visitLiquor(Liquor $liquorItem) : float
    {
        $tax = $liquorItem->getPrice() * 0.18;
        return $liquorItem->getPrice() + $tax;
    }

    public function visitTobacco(Tobacco $tobaccoItem) : float
    {
        $tax = $tobaccoItem->getPrice() * 0.32;
        return $tobaccoItem->getPrice() + $tax;
    }

    public function visitNecessity(Necessity $necessityItem) : float
    {
        $tax = $necessityItem->getPrice() * 0.0;
        return $necessityItem->getPrice() + $tax;
    }
}