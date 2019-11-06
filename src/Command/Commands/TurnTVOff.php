<?php

declare(strict_types=1);

namespace App\Command\Commands;

use App\Command\Contracts\Command;
use App\Command\Contracts\EletronicDevice;

class TurnTVOff implements Command
{
    private $device;

    public function __construct(EletronicDevice $newDevice)
    {
        $this->device = $newDevice;
    }

    public function execute()
    {
        $this->device->off();
    }
}