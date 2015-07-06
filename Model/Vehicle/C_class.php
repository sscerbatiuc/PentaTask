<?php

class C_class extends Automobile {

    public function __construct() {
        parent::__construct("C-Class", 28000);
        Helper::displayInfoMessage("C-Class construct");
        $this->equipCar();
    }

    public function equipCar() {
        
        $clima = new Specs("Climate-Control");
        $airBag = new Specs("Airbag", 0, 6);
        $cruiseControl = new Specs("Cruise-Control");
        
        $cClassDefSpecs = array($clima,$airBag,$cruiseControl);
        $this->assignDefaultSpecs($cClassDefSpecs);
    }

}
