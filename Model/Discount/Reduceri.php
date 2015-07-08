<?php

class Reduceri implements OrderingInterface {

    private $discountValue;
    private $startDate;
    private $finishDate;
    private $isVip;
    private $order;
    private static $lastOrder = 0;
    
    //GETTERS
    function getStartDate() {
        return $this->startDate;
    }

    function getFinishDate() {
        return $this->finishDate;
    }

    function getDiscountValue() {
        return $this->discountValue;
    }

    function getIsVip() {
        return $this->isVip;
    }
    
    function getLastOrder(){
        return self::$lastOrder;
    }

    //SETTERS
    function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    function setFinishDate($finishDate) {
        $this->finishDate = $finishDate;
    }

    function setDiscountValue($discountValue) {
        $this->discountValue = $discountValue;
    }

    function setIsVip($isVip) {
        $this->isVip = $isVip;
    }

    function setOrder($order) {
        $this->order = $order;
    }

    /**
     * Checks whether a specific promotion is active at the moment
     * Veryfies if the current date is between the start 
     * @return boolean
     */
    public function isActive() {

        $result = Time::checkIfBetween($this->startDate, $this->finishDate);
        return $result;
    }

    public function getOrder() {
        return $this->order;
    }

    public function __toString() {
        return "Start date: " . $this->getStartDate()." End Date: ".$this->getFinishDate()." Discount: ".$this->discountValue." Order:".$this->getOrder();
    }

}
