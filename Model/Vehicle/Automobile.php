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

    /**
     * 
     */
    abstract function equipCar();

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

    /**
     * Task 7 - pentru orice masina sa se poata vizualiza pretul
     * @return String
     */
    public function calculatePrice() {
        $recalculatedPrice = $this->getVehiclePrice();

        foreach ($this->optionalSpecs as $optionalSpec) {

            $recalculatedPrice += $optionalSpec->getPrice();
        }

        return $recalculatedPrice;
    }

    public function __toString() {
        $generalInfo = '<br><strong> GENERAL INFORMATION: </strong><br>'
                . ' <strong>Make:</strong> ' . $this->vehicleMake
                . ' <strong>Class:</strong> ' . $this->vehicleClass
                . '  <strong>Initial price:</strong> ' . $this->vehiclePrice . '&#8364';
        return $generalInfo;
    }

    /**
     * TASK IV - view options for each car
     */
    public function visualiseSpecifications() {

        $this->viewDefaultSpecs();
        $this->viewOptionalSpecs();
    }
    
    /**
     * Visualise the default specifications of the car
     */
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

    /**
     * Visualise the optional specifications of the car
     */
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

    /**
     * Assign the default specifications of a vehicle
     * @param Spec[] $specsArray
     */
    public function assignDefaultSpecs($specsArray) {
        $this->defaultSpecs = new SplObjectStorage();
        foreach ($specsArray as $defSpec) {
            $this->defaultSpecs->attach($defSpec);
        }
    }

    /**
     * Adds the optional specification to the Vehicle
     * @param Spec $optionalSpec
     */
    public function equipOptionalSpec($optionalSpec) {
        if ($this->optionalSpecs->contains($optionalSpec) == FALSE) {
            $this->optionalSpecs->attach($optionalSpec);
        } else {
            Helper::displayErrorMessage("The specification you are about to insert already exists");
        }
    }

    /**
     * Adds multiple optional specifications to the Vehicle
     * @param Spec[] $optionalSpecsArray
     */
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

    /**
     * Checks if a specification is assigned to the vehicle -> deletes it
     * @param type $specification
     */
    //TODO redefine the logic of deleting optional specifications
    /* Deleting specifications by name: check if a specification with specific SLUG exists */
    public function deleteSpec(Spec $specification) {

        Helper::displayInfoMessage("Deleting optional specifications");

        if ($this->optionalSpecs == NULL) {

            $this->optionalSpecs = new SplObjectStorage();
        }
        if ($this->optionalSpecs->contains($specification)) {

            Helper::displayInfoMessage("You are about to remove the specification:"
                    . $specification->getNameSpec() . " Price:" . $specification->getPrice() . "&#8364");
            $this->optionalSpecs->detach($specification);
        } else {
            Helper::displayErrorMessage("This car is not equipped with:" . $specification->getNameSpec());
        }
    }

}
