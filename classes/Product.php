<?php

class Product{
    protected $name;
    protected $price;
    protected $description;

    public function __construct(string $name, float $price, string $description){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setPrice(float $price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setDescrtiption(string $description){
        $this->descrtiption = $description;
    }

    public function getDescription(){
        return $this->description;
    }
}