<?php

class Product{
    public $productName;
    public $productImg;
    protected $cost;
    public $category;

    
    /**
     * __construct
     *
     * @param  string $_productName
     * @param  string $_productImg
     * @param  float $_cost
     * @param  object $_category
     * @param  string $_type
     */

    function __construct($_productName, $_productImg, $_cost, Category $_category)
    {
        $this->productName = $_productName;
        $this->productImg = $_productImg;
        $this->cost = $_cost;
        $this->category = $_category;
    }

    function getPrice(){
        return $this->cost;
    }

}