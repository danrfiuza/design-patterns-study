<?php

declare(strict_types=1);

namespace App\Command;

use App\Command\Contracts\Command;

class DeviceButton
{
    private $command;

    public function __construct(Command $newCommand)
    {
        $this->command = $newCommand;
    }

    public function press()
    {
        $this->command->execute();
    }
}