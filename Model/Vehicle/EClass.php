<?php

class EClass extends Automobile {

    const className = "E-Class";
    const classPrice = 40000;

    public function __construct() {
        
        Helper::displayInfoMessage("E-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
        $clima = new Spec("Climate-Control");
        $cruiseControl = new Spec("Cruise-Control");
        $xenon = new Spec("Xenon");
        $rainSens = new Spec("Senzori de ploaie");
        $airBag = new Spec("Airbag", 0, 8);
        $parctronics = new Spec("Parctronics");

        $eClassDefSpecs = array($clima, $cruiseControl, $xenon, $rainSens, $airBag, $parctronics);
        $this->assignDefaultSpecs($eClassDefSpecs);
    }

}
