<?php

declare(strict_types=1);

namespace App\Command\Commands;

use App\Command\Contracts\Command;
use App\Command\Contracts\EletronicDevice;

class TurnTVOn implements Command
{
    private $theDevice;

    public function __construct(EletronicDevice $newDevice)
    {
        $this->theDevice = $newDevice;
    }

    public function execute()
    {
        $this->theDevice->on();
    }
}