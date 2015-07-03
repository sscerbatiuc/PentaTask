<?php

require_once 'Automobile.php';

class AutomobileFactory {

    public static function getInstance() {
        static $instance = null;

        if ($instance == null) {
            $instance = new static();
        }
        return $instance;
    }

    protected function __construct() {
        Helper::displaySuccessMessage("Automobile Factory Constructor has been called successfully.");
    }

    private function __clone() {
        
    }

    private function __wakeup() {
        
    }

    public function createVehicle($inputVehicleClass) {
        Helper::displayInfoMessage("Creating vehicle:".$inputVehicleClass);
        $vehicleClass = ucfirst($inputVehicleClass);
        echo 'Vehicle class:'.$vehicleClass;
        $vehicle = $vehicleClass . "_class";
        echo 'vehicle'.$vehicle;
        echo class_exists($vehicle);
        if (class_exists($vehicle)) {
            return new $vehicle($inputVehicleClass);
        } else {
            
            Helper::displayErrorMessage("The vehicle (".$inputVehicleClass." Class) couldn't be created.");
            return NULL;
        }
    }

}
