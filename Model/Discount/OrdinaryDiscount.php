<?php

class OrdinaryDiscount extends Reduceri{
    
    public function __construct() {
        
            $this->setStartDate("15.12.".date("Y"));
            $this->setFinishDate("15.12".date("Y"));
            $this->setIsVip(FALSE);
            $this->setOrder($this->getLastOrder() + 1);
            $this->setDiscountValue(-0.15);
        
    }
}

