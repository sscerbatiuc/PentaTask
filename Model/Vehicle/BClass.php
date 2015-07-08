<?php

class BClass extends Automobile {

    const className     = "B-Class";
    const classPrice    = 25000;
    const airCondType   = "cond";
    const airBagNumber  = 6;

    public function __construct() {
        Helper::displayInfoMessage("B-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
        
        $specs =  SpecStorage::getCommonSpecifications();
        array_push($specs, SpecStorage::getSpecification(self::airCondType));
        array_push($specs, SpecStorage::getSpecification("airbag",  self::airBagNumber));
        $this->assignDefaultSpecs($specs);
    }

}
