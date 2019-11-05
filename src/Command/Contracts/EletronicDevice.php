<?php

declare(strict_types=1)

namespace App\Command\Contracts;

interface EletronicDevice
{
    public function on();
    public function off();
    public function volumeUp();
    public function volumeDown();
}
