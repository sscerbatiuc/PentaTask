<?php


class E_class extends Automobile{
    
    public function __construct() {
        parent::__construct("E-Class", 40000);
        Helper::displayInfoMessage("E-Class construct");
        $this->equipCar();
    }

    public function equipCar() {
        $clima = new Specs("Climate-Control");
        $cruiseControl = new Specs("Cruise-Control");
        $xenon = new Specs("Xenon");
        $rainSens = new Specs("Senzori de ploaie");
        $airBag = new Specs("Airbag", 0, 8);
        $parctronics = new Specs("Parctronics");
        
        $eClassDefSpecs = array($clima,$cruiseControl,$xenon, $rainSens, $airBag, $parctronics);
        $this->assignDefaultSpecs($eClassDefSpecs);
    }

}