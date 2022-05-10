<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{
    protected $taste;
    protected $brand;
    protected $weight;

    public function __construct(string $taste, string $brand, float $weight, string $name, float $price, string $description){
        parent::__construct($name, $price, $description);
        $this->taste = $taste;
        $this->brand = $brand;
        $this->weight = $weight;
    }

    public function setTaste(string $taste){
        $this->taste = $taste;
    }

    public function getTaste(){
        return $this->taste;
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setWeight(float $weight){
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
}