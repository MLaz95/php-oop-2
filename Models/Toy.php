<?php

class Toy extends Product{
    static $type = 'Toy' ;
    public $batteryPowered;
    
    /**
     * __construct
     *
     * @param  boolean $_batteryPowered
     */
    
    function __construct($_productName, $_productImg, $_cost, Category $_category, $_batteryPowered)
    {
        parent::__construct($_productName, $_productImg, $_cost, $_category);
        $this->batteryPowered = $_batteryPowered;
    }
}