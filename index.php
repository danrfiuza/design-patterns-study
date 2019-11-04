<?php
require __DIR__ . '/vendor/autoload.php';

use App\Visitor\TaxVisitor;
use App\Visitor\Tobacco;

$tax = new TaxVisitor();

$tobacco = new Tobacco(3.50);

echo $tobacco->accept($tax);