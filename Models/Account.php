<?php

class Account extends Customer{
    protected $username;
    protected $email;
    protected $password;
    static $discount = 20;

    function __construct($_creditCard, $_address, $_username, $_email, $_password)
    {
        parent::__construct($_creditCard, $_address);
        $this->username = $_username;
        $this->email = $_email;
        $this->password = $_password;
    }
}