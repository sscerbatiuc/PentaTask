<?php

spl_autoload("Spec");
spl_autoload("Helper");

class AClass extends Automobile {
    
    const className     = "A-Class";
    const classPrice    = 16000;
    const airCondType   = "cond";
    const airBagNumber  = 6;
    

    public function __construct() {
        Helper::displayInfoMessage("A-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
        
        $specs = SpecStorage::getCommonSpecifications();
        array_push($specs, SpecStorage::getSpecification(self::airCondType));
        array_push($specs, SpecStorage::getSpecification("airbag", self::airBagNumber));
        $this->assignDefaultSpecs($specs);
        
    }

}
