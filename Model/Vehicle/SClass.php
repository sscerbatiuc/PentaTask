<?php

class SClass extends Automobile {

    const className = "S-Class";
    const classPrice = 55000;

    public function __construct() {
        Helper::displayInfoMessage("S-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
        $clima = new Spec("Climate-Control (2 zones)");
        $xenon = new Spec("Xenon");
        $electricSeats = new Spec("Scaune reglate electric");
        $boardComputer = new Spec("Caclulator de bord");
        $lightSens = new Spec("Senzori de lumina");
        $airBag = new Spec("Airbag", 0, 10);
        $leather = new Spec("Salon de piele");
        $parctronic = new Spec("Parctronics");
        $cruiseControl = new Spec("Cruise-control");

        $sClassDefSpec = array($clima, $xenon, $electricSeats, $boardComputer, $lightSens, $airBag, $leather, $parctronic, $cruiseControl);
        $this->assignDefaultSpecs($sClassDefSpec);
    }

}
