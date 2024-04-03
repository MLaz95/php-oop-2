<?php

class Account extends Guest{
    protected $email;
    protected $password;
    static $discount = 20;

    function __construct($_fullName, CreditCard $_creditCard, $_address, $_email, $_password)
    {
        parent::__construct($_fullName, $_creditCard, $_address);
        $this->email = $_email;
        $this->password = $_password;
    }
}