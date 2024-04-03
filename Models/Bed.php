<?php

class Bed extends Product{
    static $type = 'Bed' ;
    public $weight;
    
    /**
     * __construct
     *
     * @param  float $_weight
     */
    
    function __construct($_productName, $_productImg, $_cost, Category $_category, $_weight)
    {
        parent::__construct($_productName, $_productImg, $_cost, $_category);
        $this->weight = $_weight;
    }
}