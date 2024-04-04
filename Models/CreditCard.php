<?php

class CreditCard{
    protected $cardNumber;
    protected $cvv;
    protected $expirationDate;
    
    /**
     * __construct
     *
     * @param  string $_cardNumber
     * @param  string $_cvv
     * @param  string $_expirationDate
     * @return void
     */
    function __construct($_cardNumber, $_cvv, $_expirationDate)
    {

        if(is_numeric($_cardNumber) && strlen($_cardNumber) >= 8  && strlen($_cardNumber) <= 19){
            $this->cardNumber = $_cardNumber;
        } else {
            throw new Exception('credit card number is incorrect');
        }
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