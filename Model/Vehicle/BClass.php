<?php

class BClass extends Automobile {

    const className = "B-Class";
    const classPrice = 25000;

    public function __construct() {
        Helper::displayInfoMessage("B-Class construct");
        parent::__construct(self::className, self::classPrice);
        $this->equipCar();
    }

    public function equipCar() {

        $clima = new Spec("Aer conditionat");
        $airBag = new Spec("Airbag", 0, 6);

        $specsArray = array($clima, $airBag);
        $this->assignDefaultSpecs($specsArray);
    }

}
