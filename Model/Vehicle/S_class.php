<?php

class S_class extends Automobile {

    public function __construct() {
        parent::__construct("S-Class", 55000);
        Helper::displayInfoMessage("S-Class construct");
        $this->equipCar();
    }

    public function equipCar() {
        $clima = new Specs("Climate-Control (2 zones)");
        $xenon = new Specs("Xenon");
        $electricSeats = new Specs("Scaune reglate electric");
        $boardComputer = new Specs("Caclulator de bord");
        $lightSens = new Specs("Senzori de lumina");
        $airBag = new Specs("Airbag", 0, 10);
        $leather = new Specs("Salon de piele");
        $parctronic = new Specs("Parctronics");
        $cruiseControl = new Specs("Cruise-control");

        $sClassDefSpec = array($clima, $xenon, $electricSeats, $boardComputer, $lightSens, $airBag, $leather, $parctronic, $cruiseControl);
        $this->assignDefaultSpecs($sClassDefSpec);
    }

}
