<?php
require_once 'Helper/Helper.php';
require_once 'Helper/AutoLoader.php';

spl_autoload_register('AutoLoader::ClassLoader');

Helper::displayInfoMessage("Helper class loaded successfully");

$factory = AutomobileFactory::getInstance();
$vehicleStore = VehicleStore::getInstance();

$newAClassCar = $factory->createVehicle("a");
$newBClassCar = $factory->createVehicle("b");
$newBClassCar = $factory->createVehicle("c");
$newBClassCar = $factory->createVehicle("e");
$newBClassCar = $factory->createVehicle("s");

$vehicleStore->viewAvailableCars();

//$newAClassCar->getGeneralInformation();
//$newBClassCar->getGeneralInformation();
//$newAClassCar->visualiseSpecifications();
//
//$xenon = new Specs("Xenon", 500);
//
//$newAClassCar->equipOptionalSpec($xenon);
//
//$newAClassCar->visualiseSpecifications();
//
//echo 'Recalculated price: '.$newAClassCar->calculatePrice().'&#8364';
//
//
//$newAClassCar->deleteSpec($xenon);
//
//$newAClassCar->visualiseSpecifications();
//
//echo 'Recalculated price: '.$newAClassCar->calculatePrice().'&#8364';
//
//
////phpinfo();