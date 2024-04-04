<?php

require_once './Models/Traits/Weight.php';

class Food extends Product{
    use Weight;
    static $type = 'Food' ;
    public $foodType;
    
    /**
     * __construct
     *
     * @param  string $_FoodType
     */
    
    /**
     * __construct
     *
     * @param  string $_productName
     * @param  string $_productImg
     * @param  float $_cost
     * @param  float $_weight
     * @param  string Category $_category
     * @param  string $_foodType
     * @return void
     */
    function __construct($_productName, $_productImg, $_cost, $_weight, Category $_category, $_foodType)
    {
        parent::__construct($_productName, $_productImg, $_cost, $_category);
        $this->weight = $_weight;
        $this->foodType = $_foodType;
    }
}