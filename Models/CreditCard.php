<?php

class CreditCard{
    protected $cardNumber;
    protected $cvv;
    protected $expirationDate;

    function __construct($_cardNumber, $_cvv, $_expirationDate)
    {
        $this->cardNumber = $_cardNumber;
        $this->cvv = $_cvv;
        $this->expirationDate = $_expirationDate;
    }

    function getNumber(){
        return $this->cardNumber;
    }

    function getCvv(){
        return $this->cvv;
    }
    
    function getExpirationDate(){
        return $this->expirationDate;
    }
}