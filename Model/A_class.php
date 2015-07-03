<?php

spl_autoload("Spec");
spl_autoload("Helper");

class A_class extends Automobile {

    public function __construct() {
        Helper::displayInfoMessage("A-Class construct");
        parent::__construct("A-Class", 16000);
        self::equipVehicle();
    }

    public function equipVehicle() {
        Helper::displayInfoMessage("Equipping vehicle: ...OK");
        $aerConditionat = new Specs("Aer conditionat");
        $airBag = new Specs("Airbag", 0, 6);
        $defaultSpecs = array($aerConditionat, $airBag);
        $this->assignDefaultSpecs($defaultSpecs);
    }

}
