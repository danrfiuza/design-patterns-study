<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

use App\ChainOfResponsability\Contracts\Chain;

class SubtractNumbers implements Chain
{
    private $nextChain;

    public function setNextChain(Chain $nextChain): void
    {
        $this->nextChain = $nextChain;
    }

    public function calculate(Numbers $request): void
    {
        if($request->getCalculationWanted() == 'sub') {
            echo "SUBTRACT: ".($request->getNumber1() - $request->getNumber2());
        }else {
            $this->nextChain->calculate($request);
        }
    }
}