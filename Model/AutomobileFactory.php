<?php

require_once 'Helper/AutoLoader.php';
spl_autoload_register('AutoLoader::ClassLoader');

class AutomobileFactory {
    
    private $vehicleStore;

    public static function getInstance() {
        static $instance = null;
        if ($instance == null) {
            $instance = new static();
            
        }
        return $instance;
    }

    protected function __construct() {
        Helper::displaySuccessMessage("Automobile Factory Constructor has been called successfully.");
        $this->vehicleStore = VehicleStore::getInstance();
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

    public function createVehicle($inputVehicleClass) {
        $vehicleClass = ucfirst($inputVehicleClass);
        $vehicle = $vehicleClass . "_class";
        if (class_exists($vehicle)) {
            VehicleStore::addVehicle(new $vehicle($inputVehicleClass));
            return new $vehicle($inputVehicleClass);
        } else {

            Helper::displayErrorMessage("The vehicle (".$vehicle.") couldn't be created.");
            return NULL;
        }
    }

}
