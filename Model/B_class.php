<?php

class B_class extends Automobile {

    public function __construct() {
        parent::__construct("B-Class", 25000);
        Helper::displayInfoMessage("B-Class construct");
       
    }

}
