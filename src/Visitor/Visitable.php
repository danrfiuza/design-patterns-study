<?php declare(strict_types=1);

namespace App\Visitor;

abstract class Visitable
{
    public function accept(Visitor $visitor) : float
    {
        $refthis = new \ReflectionClass(get_class($this));
        $method = 'visit'.$refthis->getShortName();
        return $visitor->$method($this);
    }
}