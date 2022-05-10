<?php

require_once __DIR__. '/CreditCard.php';

class User{
    protected $firstName;
    protected $lastName;
    protected $creditCard;
    protected $isRegistered;

    public function __construct(string $firstName, string $lastName, CreditCard $creditCard, bool $isRegistered){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->creditCards = $creditCard;
        $this->isRegistered = $isRegistered;
    }

    public function setFirstName(string $firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setCreditCard(CreditCard $creditCard){
        $this->creditCard = $creditCard;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

    public function setIsRegistered(bool $isRegistered){
        $this->isRegistered = $isRegistered;
    }

    public function getIsRegistered(){
        return $this->isRegistered;
    }
}