<?php
/**
 * 
 */
declare(strict_types=1);

namespace App\Command;

use App\Command\Contracts\EletronicDevice;

/**
 * 
 */
class Television implements EletronicDevice
{
    private $volume = 0;
    public function on()
    {
        echo "TV is ON".PHP_EOL;
    }

    public function off()
    {
        echo "TV is OFF".PHP_EOL;
    }

    public function volumeUp()
    {
        $this->volume++;
        echo "Volume is at {$this->volume}".PHP_EOL;
    }

    public function volumeDown()
    {
        $this->volume--;
        echo "Volume is at {$this->volume}".PHP_EOL;
    }

}
