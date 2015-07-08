<?php

class Helper{
    
    //  Display messages
    
    
    /**
     * Displays a simple message
     * @param String $message
     */
    public static function displayInfoMessage($message){
        
        echo '<p style="color:black">'.$message.'</p>';
    }
    
    /**
     * Displays an red colored message
     * @param String $message
     */
    public static function displayErrorMessage($message){
        
        echo '<p style="color:red">'.$message.'</p>';
    }
    
    /**
     * Displays green colored message
     * @param String $message
     */
    public static function displaySuccessMessage($message){
        
        echo '<p style="color:green">'.$message.'</p>';
    }
    
}
