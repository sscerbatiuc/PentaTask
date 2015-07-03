<?php

abstract class Automobile {

    private $vehicleMake = "Mercedes-Benz";
    private $vehicleClass;
    private $vehiclePrice;
    private $defaultSpecs;
    private $optionalSpecs;

    public function __construct($class, $price) {
        $this->vehiclePrice = $price;
        $this->vehicleClass = $class;
        $this->defaultSpecs = new SplObjectStorage();
        $this->optionalSpecs = new SplObjectStorage();
    }

    //GETTERS
    function getVehicleMake() {
        return $this->vehicleMake;
    }

    function getVehicleClass() {
        return $this->vehicleClass;
    }

    function getVehiclePrice() {
        return $this->vehiclePrice;
    }

    // SETTERS
    public function setVehicleClass($vehicleClass) {
        $this->vehicleClass = $vehicleClass;
    }

    public function setVehiclePrice($vehiclePrice) {
        $this->vehiclePrice = $vehiclePrice;
    }

    public function calculatePrice() {
        $recalculatedPrice = $this->getVehiclePrice();

        foreach ($this->optionalSpecs as $optionalSpec) {

            $recalculatedPrice += $optionalSpec->getPrice();
        }

        return $recalculatedPrice;
    }

    public function getGeneralInformation() {
        $generalInfo = '<strong> GENERAL INFORMATION: </strong><br>'
                . ' <strong>Make:</strong> ' . $this->vehicleMake
                . ' <strong>Class:</strong> ' . $this->vehicleClass
                . '  <strong>Initial price:</strong> ' . $this->vehiclePrice . '&#8364';
        Helper::displayInfoMessage($generalInfo);
    }

    //Task IV - view options for each car
    public function visualiseSpecifications() {

        $this->viewDefaultSpecs();
        $this->viewOptionalSpecs();
    }

    public function assignDefaultSpecs($specsArray) {
        $this->defaultSpecs = new SplObjectStorage();
        foreach ($specsArray as $defSpec) {
            $this->defaultSpecs->attach($defSpec);
        }
    }

    public function equipOptionalSpec($optionalSpec) {
        if ($this->optionalSpecs->contains($optionalSpec) == FALSE) {
            $this->optionalSpecs->attach($optionalSpec);
        } else {
            Helper::displayErrorMessage("The specification you are about to insert already exists");
        }
    }

    public function equipMultipleOptionalSpecs($optionalSpecsArray) {
        try {
            foreach ($optionalSpecsArray as $optionalSpec) {
                echo 'Attempting to add optional spec: ' . $optionalSpec->getName();
                $this->optionalSpecs->attach($optionalSpec);
            }
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function viewDefaultSpecs() {
        $defaultSpecList = "Default specifications:";
        foreach ($this->defaultSpecs as $spec) {
            $defaultSpecList .= ('<br>' . $spec->getNameSpec());
            if ($spec->getQuantity() > 1) {
                $defaultSpecList .= (': ' . $spec->getQuantity());
            }
        }
        Helper::displayInfoMessage($defaultSpecList);
    }

    public function viewOptionalSpecs() {
        $optionalSpecList = "Optional Specifications:";
        if ($this->optionalSpecs == NULL) {

            $this->optionalSpecs = new SplObjectStorage();
        }
        if ($this->optionalSpecs->count() == 0) {
            $optionalSpecList .= ('<br>' . "There are no optional specifications added for this vehicle");
        } else {
            foreach ($this->optionalSpecs as $optionalSpec) {
                $optionalSpecList .= ('<br>' . $optionalSpec->getNameSpec());
                $optionalSpecList .= (': ' . $optionalSpec->getPrice() . '&#8364');
            }
        }
        Helper::displayInfoMessage($optionalSpecList);
    }

    public function deleteSpec($spec) {
        
        Helper::displayInfoMessage("Deleting optional specifications");

        if ($this->optionalSpecs == NULL) {

            $this->optionalSpecs = new SplObjectStorage();
        }
        if ($this->optionalSpecs->contains($spec)) {

            Helper::displayInfoMessage("You are about to remove the specification:"
                    . $spec->getNameSpec() . " Price:" . $spec->getPrice() . "&#8364");
            $this->optionalSpecs->detach($spec);
        } else {
            Helper::displayErrorMessage("This car is not equipped with:" . $spec->getNameSpec());
        }
    }

}
