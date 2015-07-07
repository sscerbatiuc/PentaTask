<?php

require_once 'Helper/AutoLoader.php';
spl_autoload_register('AutoLoader::ClassLoader');

class VehicleStore {

    private static $instance;
    private $availableCars = array();
    private $discountOptions = array(); //TODO Store all the available discount options
    
    /**
     * Singleton Pattern
     * @return VehicleStore
     */
    public static function getInstance() {
        if (NULL === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __construct() {
        
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }
    
    /**
     * Every time the AutomobileFactory creates a vehicle 
     * @param Automobile $auto
     */
    public function addVehicle(Automobile $auto) {
        array_push($this->availableCars, $auto);
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

}
