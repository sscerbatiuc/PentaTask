<?php

class Helper{
    
    //  Display messages
    
    public static function displayInfoMessage($message){
        
        echo '<p style="color:black">'.$message.'</p>';
    }
    
    public static function displayErrorMessage($message){
        
        echo '<p style="color:red">'.$message.'</p>';
    }
    
    public static function displaySuccessMessage($message){
        
        echo '<p style="color:green">'.$message.'</p>';
    }
    
}
