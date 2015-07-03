<?php

class AutoLoader{
    
    public static function ClassLoader(){
        
        require_once 'Model/Automobile.php';
        require_once 'Model/AutomobileFactory.php';
        require_once 'Model/A_class.php';
        require_once 'Model/Reduceri.php';
        require_once 'Model/Specs.php';
        require_once 'Model/VehicleStore.php';
    }
}
