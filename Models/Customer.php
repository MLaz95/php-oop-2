<?php

class Customer{
    protected $creditCard;
    protected $address;
    
    /**
     * __construct
     *
     * @param  string $_creditCard
     * @param  string $_address

     */
    function __construct($_creditCard, $_address)
    {
        $this->creditCard = $_creditCard;
        $this->address = $_address;
    }

    function getCreditCard(){
        return $this->creditCard;
    }

    function getAddress(){
        return $this->address;
    }
}