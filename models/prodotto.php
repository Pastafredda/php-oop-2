<?php

class Category{
    private $name;
    public function __construct($name){
        $this -> setName($name);
    }

    public function getName(){
        return $this -> name;
    }

    public function setName($name){
        $this -> name = $name;
    }

   
}
class Product{
    private $name;
    private $price;
    private $description;
    private $categories;

    public function __construct($name, $price, $description, Category ...$categories){
        $this -> setName($name);
        $this -> setPrice($price);
        $this -> setDescription($description);
        $this -> categories = $categories;
    }

    public function getName(){
        return $this -> name;
    }

    public function setName($name){
        $this -> name = $name;
    }

    public function getPrice(){
        return $this -> price;
    }

    public function setPrice($price){
        $this -> price = $price;
    }

    public function getDescription(){
        return $this-> description;
    }

    public function setDescription($description){
        $this -> description = $description;
    }

}