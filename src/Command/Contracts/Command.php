<?php

declare(strict_types=1);

namespace App\Command\Contracts;

interface Command
{
    public function execute();
}