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

// use App\Command\Commands\TurnTVOff;
// use App\Command\Commands\TurnTVOn;
// use App\Command\Commands\TurnTVVolumeDown;
// use App\Command\Commands\TurnTVVolumeUp;
// use App\Command\DeviceButton;
// use App\Command\Radio;
// use App\Command\Television;
// use App\Command\TurnItAllOff;
// use App\Command\TVRemote;

// $newDevice = (new TVRemote())->getDevice();

// $onCommand = new TurnTVOff($newDevice);
// $onPressed = new DeviceButton($onCommand);
// $onPressed->press();

// $onCommand = new TurnTVOn($newDevice);
// $onPressed = new DeviceButton($onCommand);
// $onPressed->press();


// $onCommand = new TurnTVVolumeDown($newDevice);
// $onPressed = new DeviceButton($onCommand);
// $onPressed->press();

// $onCommand = new TurnTVVolumeUp($newDevice);
// $onPressed = new DeviceButton($onCommand);
// $onPressed->press();
// $onPressed->press();
// $onPressed->press();
// $onPressed->press();


// $onCommand = new TurnTVVolumeDown($newDevice);
// $onPressed = new DeviceButton($onCommand);
// $onPressed->press();
// $onPressed->press();


// $radio = new Radio();
// $tv    = new Television();
// $devices = [$radio,$tv];

// $turnItAllOff = new TurnItAllOff($devices);
// $turnThemOff = new DeviceButton($turnItAllOff);
// $turnThemOff->press();


/**
 * Decorator test
 */
// use App\Decorator\Mozzarella;
// use App\Decorator\PlainPizza;
// use App\Decorator\TomatoSauce;
//  $pizza = new TomatoSauce(new Mozzarella(new PlainPizza));
//  echo $pizza->getDescription();
//  echo $pizza->getCost();

/**
 * Chain of Responsability test
 */
use App\ChainOfResponsability\AddNumbers;
use App\ChainOfResponsability\DivideNumbers;
use App\ChainOfResponsability\MultiplyNumbers;
use App\ChainOfResponsability\Numbers;
use App\ChainOfResponsability\SubtractNumbers;

$chainCalc1 = new AddNumbers();
$chainCalc2 = new SubtractNumbers();
$chainCalc3 = new MultiplyNumbers();
$chainCalc4 = new DivideNumbers();

$chainCalc1->setNextChain($chainCalc2);
$chainCalc2->setNextChain($chainCalc3);
$chainCalc3->setNextChain($chainCalc4);

$request = new Numbers(5,10,'sub');

$chainCalc1->calculate($request);