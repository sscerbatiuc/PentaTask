<?php

class Reduceri implements OrderingInterface{
    
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
    
    public function calculateDiscount($carPrice){
        //TODO define how to calculate the discount sum
    }

    public function getOrder() {
        
    }

}

