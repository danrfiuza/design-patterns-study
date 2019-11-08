<?php

declare(strict_types=1);

namespace App\ChainOfResponsability;

class Numbers
{
    private $number1;
    private $number2;
    private $calculationWanted;
 
    public function __construct(int $newNumber1,int $newNumber2,string $calcWanted)
    {
        $this->number1 = $newNumber1;
        $this->number2 = $newNumber2;
        $this->calculationWanted = $calcWanted;
    }

    public function getNumber1() : int {return $this->number1;}
    public function getNumber2() : int {return $this->number2;}
    public function getCalculationWanted() : string {return $this->calculationWanted;}

    private function calculationWanted() : string
    {

    }
}