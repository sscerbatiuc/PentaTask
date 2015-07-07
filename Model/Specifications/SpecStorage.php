<?php

class SpecStorage{
    
    private $instance;

    const airCondName       = "Air conditioning";
    const xenonName         = "Xenon";
    const steerWheelName    = "Multifunctional Steering Wheel";
    const parkName          = "Parktronics";
    const lightSensName     = "Light Sensor";
    const rainSensName      = "Rain Sensor";
    const theftAlarmName    = "Anti Theft Alarm";
    const rimsName          = "Light Rims";
    const heatedSeatsName   = "Heated Seats";
    const cruControlName    = "Cruise Control";
    const boardComputerName = "Board Computer";
    
    const xenonPrice            = 500;
    const stWheelPrice          = 600;
    const parkPrice             = 250;
    const lightSensPrice        = 150;
    const rainSensPrice         = 300;
    const theftAlarmPrice       = 300;
    const rimsPrice             = 1000;
    const heatSeatsPrice        = 500;
    const cruControlPrice       = 1000;
    const boardComputerPrice    = 1500;
    
    private $availableSpecifications = array(        
        "airbag"        => array("Name" => self::airCondName, "Price" => 0,"Quantity" => 6),
        "xenon"         => array("Name" => self::xenonName, "Price"=> self::xenonPrice, "Quantity" => 1),
        "volan"         => array("Name" => self::steerWheelName, "Price" => self::stWheelPrice, "Quantity" => 1),
        "parctronics"   => array("Name" => self::parkName, "Price" => self::parkPrice, "Quantity" => 1),
        "senzor-lumina" => array("Name" => self::lightSensName, "Price" => self::lightSensPrice, "Quantity" => 1),
        "senzor-ploaie" => array("Name" => self::rainSensName, "Price" => self::rainSensPrice, "Quantity" => 1),
        "alarma"        => array("Name" => self::theftAlarmName, "Price" => self::theftAlarmPrice, "Quantity" => 1),
        "jante"         => array("Name" => self::rimsName, "Price" => self::rimsPrice, "Quantity" => 4),
        "scaune"        => array("Name" => self::heatedSeatsName, "Price" => self::heatSeatsPrice, "Quantity" => 4),
        "cruise"        => array("Name" => self::cruControlName, "Price" => self::cruControlPrice, "Quantity" => 1),
        "calculator"   => array("Name" => self::boardComputerName, "Price" => self::boardComputerPrice, "Quantity" => 1)
    );
    
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
    
    public function getSpecification($nameSpec){
        
        if(isset($this->availableSpecifications[$nameSpec])){
            return new Spec($this->availableSpecifications[$nameSpec]["Name"],
                            $this->availableSpecifications[$nameSpec]["Price"],
                            $this->availableSpecifications[$nameSpec]["Quantity"]);
        }
        
    }
}