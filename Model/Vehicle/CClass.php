<?php

class CClass extends Automobile {

    public function __construct() {
        parent::__construct("C-Class", 28000);
        Helper::displayInfoMessage("C-Class construct");
        $this->equipCar();
    }

    public function equipCar() {
        
        $clima = new Spec("Climate-Control");
        $airBag = new Spec("Airbag", 0, 6);
        $cruiseControl = new Spec("Cruise-Control");
        
        $cClassDefSpecs = array($clima,$airBag,$cruiseControl);
        $this->assignDefaultSpecs($cClassDefSpecs);
    }

}
