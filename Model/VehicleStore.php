<?php

require_once 'Helper/AutoLoader.php';
spl_autoload_register('AutoLoader::ClassLoader');

class VehicleStore {

    private static $instance;
    private $automobileFactory;
    private $availableCars = array();
    private $discountOptions = array(); //TODO Store all the available discount options
    private $vipDiscount;

    /**
     * Returns a single instance of the VehicleStore clase
     * Singleton Pattern
     * @return VehicleStore
     */
    public static function getInstance() {
        static::$instance = NULL;
        if (NULL === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    //To add different vehicles to the VehicleStore, we create them using AutomobileFactory object
    protected function __construct() {
        $this->automobileFactory = AutomobileFactory::getInstance();
        $vipDiscount = new VipDiscount();
        $this->addDiscountOption($vipDiscount);
        $christmasDiscount = new OrdinaryDiscount();
        $this->addDiscountOption($christmasDiscount);
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

    /**
     * Adds a vehicle to the available vehicles array
     * The vehicle is created using automobileFactory object
     * @param Automobile $auto
     */
    public function addVehicle($vehicleClass) {
        $auto = $this->automobileFactory->createVehicle($vehicleClass);
        array_push($this->availableCars, $auto);
    }
    
    public function addDiscountOption(Reduceri $option){
        array_push($this->discountOptions, $option);
    }

    /**
     * Displays the general information about all the cars in the Store
     */
    public function viewAvailableCars() {
        Helper::displayInfoMessage("Available cars in the store");
        foreach ($this->availableCars as $car) {
            echo $car;
        }
    }
    /**
     * Displays the information about all the discount options available
     */
    public function viewDiscountOptions() {
        Helper::displayInfoMessage("Available DISCOUNT OPTIONS");
        foreach ($this->discountOptions as $option) {
            echo $option;
        }
    }

    /**
     * Gets the vehicle from the available vehicles array, based on user input
     * @param Class Name
     * @return Automobile
     */
    public function getVehicle($vehicleClass) {
        $success = FALSE;
        foreach ($this->availableCars as $car) {
            if ($car->getVehicleClass() == strtoupper($vehicleClass) . "-Class") {
                $success = TRUE;
                return $car;
            }
        }
        if (!$success) {
            Helper::displayErrorMessage("Sorry the car you've requested is not available: " .
                    strtoupper($vehicleClass) . "-Class");
        }
    }

    public function calcVehiclePriceWithDiscount(Automobile $car) {

        $finalPrice = $car->calculatePrice();
        foreach ($this->discountOptions as $option) {
            
        }
    }

}
