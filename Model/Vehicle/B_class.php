<?php

class B_class extends Automobile {

    public function __construct() {
        parent::__construct("B-Class", 25000);
        Helper::displayInfoMessage("B-Class construct");
        $this->equipCar();
    }

    public function equipCar() {
        
        $clima = new Specs("Aer conditionat");
        $airBag = new Specs("Airbag", 0, 6);
        
        $specsArray = array($clima,$airBag);
        $this->assignDefaultSpecs($specsArray);
    }

}
