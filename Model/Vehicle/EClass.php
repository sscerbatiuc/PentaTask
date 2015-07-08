<?php

class EClass extends Automobile {

    const className     = "E-Class";
    const classPrice    = 40000;
    const airCondType   = "clima";
    const airBagNumber  = 8;

    public function __construct() {
        
        Helper::displayInfoMessage("E-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
         $eClassDefSpecs =  SpecStorage::getCommonSpecifications();
        array_push($eClassDefSpecs, SpecStorage::getSpecification(self::airCondType));
        array_push($eClassDefSpecs, SpecStorage::getSpecification("airbag",  self::airBagNumber));
        array_push($eClassDefSpecs, SpecStorage::getSpecification("cruise"));
        array_push($eClassDefSpecs, SpecStorage::getSpecification("parktronic"));
        array_push($eClassDefSpecs, SpecStorage::getSpecification("senzor-ploaie"));
        $this->assignDefaultSpecs($eClassDefSpecs);
    }

}
