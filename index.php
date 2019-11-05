<?php
require __DIR__ . '/vendor/autoload.php';

use App\Visitor\Liquor;
use App\Visitor\Necessity;
use App\Visitor\TaxVisitor;
use App\Visitor\Tobacco;

$tax = new TaxVisitor();

$tobacco = new Tobacco(3.50);
$liquor = new Liquor(2.00);
$necessity = new Necessity(2.50);

echo $tobacco->accept($tax);
echo $liquor->accept($tax);
echo $necessity->accept($tax);