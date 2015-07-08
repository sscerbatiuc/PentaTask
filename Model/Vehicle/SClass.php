<?php

class SClass extends Automobile {

    const className = "S-Class";
    const classPrice = 55000;
    const airCondType = "climaZona";
    const airBagNumber = 10;

    public function __construct() {
        Helper::displayInfoMessage("S-Class constructor");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {
        $sClassDefSpecs = SpecStorage::getCommonSpecifications();

        array_push($sClassDefSpecs, SpecStorage::getSpecification(self::airCondType));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("airbag", self::airBagNumber));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("xenon"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("scaune"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("senzor-lumina"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("senzor-ploaie"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("piele"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("parktronic"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("calculator"));
        array_push($sClassDefSpecs, SpecStorage::getSpecification("cruise"));

        $this->assignDefaultSpecs($sClassDefSpecs);
    }

}
