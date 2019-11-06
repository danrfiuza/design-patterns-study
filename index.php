<?php
require __DIR__ . '/vendor/autoload.php';


/**
 * Visitor test
 */
// use App\Visitor\Liquor;
// use App\Visitor\Necessity;
// use App\Visitor\TaxVisitor;
// use App\Visitor\Tobacco;

// $tax = new TaxVisitor();

// $tobacco = new Tobacco(3.50);
// $liquor = new Liquor(2.00);
// $necessity = new Necessity(2.50);

// echo $tobacco->accept($tax);
// echo $liquor->accept($tax);
// echo $necessity->accept($tax);


/**
 * Command test
 */

use App\Command\Commands\TurnTVOff;
use App\Command\Commands\TurnTVOn;
use App\Command\Commands\TurnTVVolumeDown;
use App\Command\Commands\TurnTVVolumeUp;
use App\Command\DeviceButton;
use App\Command\Radio;
use App\Command\Television;
use App\Command\TurnItAllOff;
use App\Command\TVRemote;

$newDevice = (new TVRemote())->getDevice();

$onCommand = new TurnTVOff($newDevice);
$onPressed = new DeviceButton($onCommand);
$onPressed->press();

$onCommand = new TurnTVOn($newDevice);
$onPressed = new DeviceButton($onCommand);
$onPressed->press();


$onCommand = new TurnTVVolumeDown($newDevice);
$onPressed = new DeviceButton($onCommand);
$onPressed->press();

$onCommand = new TurnTVVolumeUp($newDevice);
$onPressed = new DeviceButton($onCommand);
$onPressed->press();
$onPressed->press();
$onPressed->press();
$onPressed->press();


$onCommand = new TurnTVVolumeDown($newDevice);
$onPressed = new DeviceButton($onCommand);
$onPressed->press();
$onPressed->press();


$radio = new Radio();
$tv    = new Television();
$devices = [$radio,$tv];

$turnItAllOff = new TurnItAllOff($devices);
$turnThemOff = new DeviceButton($turnItAllOff);
$turnThemOff->press();


