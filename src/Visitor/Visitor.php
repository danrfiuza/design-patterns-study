<?php declare(strict_types=1);

namespace App\Visitor;
use App\Visitor\Liquor;
use App\Visitor\Tobacco;
use App\Visitor\Necessity;

interface Visitor
{
    public function visitLiquor(Liquor $liquorItem) : float;
    public function visitTobacco(Tobacco $tobaccoItem) : float;
    public function visitNecessity(Necessity $necessityItem) : float;
}