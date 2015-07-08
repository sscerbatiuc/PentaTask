<?php

class Time {
    
    /**
     * Returns the current date in the format ("DD.MM.YYYY")
     * @return date
     */
    public static function getCurrentDate(){
        return date("d.m.Y");
    }
    
    public static function convertFullDate($date){
        return $date.date("Y");
    }


    public static function getFirstDayOfYear() {
        
        $currentYear = date("Y");
        $firstDay = date("d.m.Y", strtotime("01.01.".$currentYear));
        return $firstDay;
    }

    public static function getLastDayOfYear() {
        
        $currentYear = date("Y");
        $lastDay = date("d.m.Y", strtotime("31.12.".$currentYear));
        return $lastDay;
    }

    public static function checkIfBetween($start, $end) {

        $today = self::getCurrentDate();
        $currentYear = date("Y");
        $startDate = strtotime($start);
        $endDate = strtotime($end);
        if (($today < $endDate) && ($today > $startDate)) {
            return true;
        } else {
            return false;
        }
    }

}
