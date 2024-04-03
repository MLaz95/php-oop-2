<?php

class Cart{
    protected $items;
    protected $total;
    protected $user;
    
    function __construct(Guest $_customer)
    {
        $this->user = $_customer;
        $this->items = [];
        $this->total = 0;
    }

    public function addItem($product){


        $item = [];
        $item['name'] = $product->productName;
        $item['price'] = $product->getPrice();

        $this->items[] = $item;
        $this->total += $product->getPrice();
    }

}