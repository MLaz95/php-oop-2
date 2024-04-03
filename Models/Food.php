<?php

class Food extends Product{
    static $type = 'Food' ;
    public $foodType;
    
    /**
     * __construct
     *
     * @param  string $_FoodType
     */

    function __construct($_productName, $_productImg, $_cost, Category $_category, $_foodType)
    {
        parent::__construct($_productName, $_productImg, $_cost, $_category);
        $this->foodType = $_foodType;
    }
}