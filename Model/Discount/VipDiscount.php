<?php

class VipDiscount extends Reduceri{
    
    public function __construct() {
       
            $this->setStartDate(Time::getFirstDayOfYear());
            $this->setFinishDate(Time::getLastDayOfYear());
            $this->setIsVip(TRUE);
            $this->setOrder(0);
            $this->setDiscountValue(-1000);
        
    }

}

