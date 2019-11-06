<?php

declare(strict_types=1);

namespace App\Command;

use App\Command\Contracts\EletronicDevice;
use App\Command\Television;

class TVRemote
{
    public static function getDevice() : EletronicDevice
    {
        return new Television();
    }
}