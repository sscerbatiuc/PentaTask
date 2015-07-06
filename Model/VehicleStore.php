<?php
    
require_once 'Helper/AutoLoader.php';
spl_autoload_register('AutoLoader::ClassLoader');

class VehicleStore{
    
    private static $instance;
    private $availableCars = array();
    private $soldCars = array();//TODO use this array in the buyCar method


    public static function getInstance(){
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
    
    public static function addVehicle(Automobile $auto){
        //TODO implement add vehicle function
        /*Error: $this not in the context of an object
          Find a way to add vehicles to the array */
        array_push($this->availableCars, $auto);
    }
    
    public function buyVehicle(Automobile $auto){
        //TODO how to buy automobiles
        /*
         * 1. Provide automobile object
         * Where to include a discount object
         * 2. Calculate the price
         * 3. Add the vehicle to the sold vehicles array
         */
    }
}

