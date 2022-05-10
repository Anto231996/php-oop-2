<?php

class CreditCard{
    protected $number;
    protected $expiry;

    public function __construct(string $number, int $expiry){
        $this->number = $number;
        $this->expiry = $expiry;
    }

    public function setNumber(string $number){
        $this->number = $number;
    }

    public function getNumber(){
        return $this->number;
    }

    public function setExpiry(int $number){
        $this->expiry = $expiry;
    }

    public function getExpirty(){
        return $this->expiry;
    }
}