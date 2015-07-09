<?php

require_once 'Helper/AutoLoader.php';

spl_autoload_register('AutoLoader::ClassLoader');

$factory = AutomobileFactory::getInstance();

//Time::checkIfBetween("15.06.2015", "15.07.2015");
//Time::checkIfBetween("15.12.2015", "15.01.2016");

$christmas = new OrdinaryDiscount("15.06.2015", "15.07.2016", 0.15, "Reducere cu ocazia sarbatorilor de iarna");
$vip = new VipDiscount();

Helper::displayBoldMessage("Creating A-Class Vehicle");

$newAClassCar = $factory->createVehicle("a");
$newAClassCar->viewAllSpecifications();

$newAClassCar->addDiscountOption($vip);
$newAClassCar->addDiscountOption($christmas);

$newAClassCar->viewDiscountOptions();
Helper::displayInfoMessage("Recalculated price: ".$newAClassCar->calculatePrice());

Helper::displayBoldMessage("Equipping optional specifications...");

$newAClassCar->equipOptionalSpec("xenon");
$newAClassCar->equipOptionalSpec("volan");
$newAClassCar->equipOptionalSpec("jante");
$newAClassCar->equipOptionalSpec("cruise");

$newAClassCar->viewOptionalSpecs();

Helper::displayInfoMessage("Recalculated price: ".$newAClassCar->calculatePrice());

$newAClassCar ->deleteSpec("xenon");
Helper::displayInfoMessage("Recalculated price: ".$newAClassCar->calculatePrice());

$newAClassCar ->deleteSpec("volan");
Helper::displayInfoMessage("Recalculated price: ".$newAClassCar->calculatePrice());

$newAClassCar ->deleteSpec("xenon");

Helper::displayInfoMessage("Recalculated price: ".$newAClassCar->calculatePrice());

//$newBClassCar = $factory->createVehicle("b");
//$newBClassCar->viewAllSpecifications();
//
//$newCClassCar = $factory->createVehicle("c");
//$newCClassCar->viewAllSpecifications();
//
//$newEClassCar = $factory->createVehicle("e");
//$newEClassCar->viewAllSpecifications();
//
//$newSClassCar = $factory->createVehicle("s");
//$newSClassCar->viewAllSpecifications();
