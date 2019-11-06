<?php
/**
 * 
 */
declare(strict_types=1);

namespace App\Command;

use App\Command\Contracts\Command;

/**
 * 
 */
class TurnItAllOff implements Command
{
    private $eletronicDevices = [];

    public function __construct($newDevices)
    {
        $this->eletronicDevices = $newDevices;
    }

    public function execute()
    {
        foreach($this->eletronicDevices as $device) {
            $device->off();
        }
    }

}
