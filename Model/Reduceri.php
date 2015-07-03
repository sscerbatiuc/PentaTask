<?php

abstract class Reduceri {
    
    private $periodStart;
    private $periodFinish;
    
    public function isActive(){
        
        $today = date("d/m/Y");
        $start = strtotime($this->periodStart);
        $end = strtotime($this->periodFinish);
        if (($today < $end) && ($today>$start)) {
            return true;
        }else{
            return false;
        }
    }
    
}

