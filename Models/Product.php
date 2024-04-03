<?php

class Product{
    public $productName;
    public $productImg;
    protected $cost;
    public $category;
    public $type;

    
    /**
     * __construct
     *
     * @param  string $_productName
     * @param  string $_productImg
     * @param  float $_cost
     * @param  string $_category
     * @param  string $_type
     * @return void
     */
    function __construct($_productName, $_productImg, $_cost, Category $_category, $_type)
    {
        $this->productName = $_productName;
        $this->productImg = $_productImg;
        $this->cost = $_cost;
        $this->category = $_category;
        $this->type = $_type;
    }

    function getPrice(){
        return $this->cost;
    }

}