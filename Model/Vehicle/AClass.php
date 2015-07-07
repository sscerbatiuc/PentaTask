<?php

spl_autoload("Spec");
spl_autoload("Helper");

class AClass extends Automobile {
    
    const className  = "A-Class";
    const classPrice = 16000;

    public function __construct() {
        Helper::displayInfoMessage("A-Class constructor");
        parent::__construct(self::className, self::classPrice);
        self::equipCar();
    }

    public function equipCar() {
        $aerConditionat = new Spec("Aer conditionat");
        $airBag = new Spec("Airbag", 0, 6);
        $defaultSpecs = array($aerConditionat, $airBag);
        $this->assignDefaultSpecs($defaultSpecs);
    }

}
