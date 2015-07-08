<?php

require_once 'Helper/AutoLoader.php';

spl_autoload_register('AutoLoader::ClassLoader');

//echo Time::getCurrentDate();
//echo Time::getFirstDayOfYear();
//echo Time::getLastDayOfYear();


$vehicleStore = VehicleStore::getInstance();

$vehicleStore->viewDiscountOptions();

//$vehicleStore->addVehicle("a");
//$vehicleStore->addVehicle("b");
//$vehicleStore->addVehicle("c");
//$vehicleStore->addVehicle("e");
//$vehicleStore->addVehicle("s");
//
//$aClass = $vehicleStore->getVehicle("a");
//$bClass = $vehicleStore->getVehicle("b");
//$cClass = $vehicleStore->getVehicle("c");
//$eClass = $vehicleStore->getVehicle("e");
//$sClass = $vehicleStore->getVehicle("s");

//$newAClassCar = $factory->createVehicle("a");
//$newAClassCar->viewAllSpecifications();
//
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
