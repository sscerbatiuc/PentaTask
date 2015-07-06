<?php

class AutoLoader{
    
    public static function ClassLoader(){
        
        require_once 'Model/Vehicle/Automobile.php';
        require_once 'Model/AutomobileFactory.php';
        require_once 'Model/Vehicle/A_class.php';
        require_once 'Model/Vehicle/B_class.php';
        require_once 'Model/Vehicle/C_class.php';
        require_once 'Model/Vehicle/E_class.php';
        require_once 'Model/Vehicle/S_class.php';
        require_once 'Model/Discount/Reduceri.php';
        require_once 'Model/Specs.php';
        require_once 'Model/VehicleStore.php';
    }
}
