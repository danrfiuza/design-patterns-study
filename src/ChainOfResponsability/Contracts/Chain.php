<?php

declare(strict_types=1);

namespace App\ChainOfResponsability\Contracts;

use App\ChainOfResponsability\Numbers;

interface Chain
{
    public function setNextChain(Chain $nextChain): void;
    public function calculate(Numbers $request): void;
}