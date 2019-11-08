<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

use App\ChainOfResponsability\Contracts\Chain;

class DivideNumbers implements Chain
{
    private $nextChain;

    public function setNextChain(Chain $nextChain): void
    {
        $this->nextChain = $nextChain;
    }

    public function calculate(Numbers $request): void
    {
        if($request->getCalculationWanted() == 'div') {
            echo "DIVIDE: ".(bcdiv((string)$request->getNumber1(),(string)$request->getNumber2(),2));
        }else {
            echo 'OPERATION NOT SUPPORTED!';
        }
    }
}