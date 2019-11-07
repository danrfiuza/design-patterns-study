<?php
declare(strict_types=1);

namespace App\Decorator\Contracts;

interface Pizza
{
    public function getDescription(): string;
    public function getCost(): float;
}