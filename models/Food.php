<?php
class Food extends Product {
    private $expiration;
 
    public function __construct($name, $price, $description, $categories,  $expiration){
       
       parent :: __construct($name, $price, $description, $categories);
          
       $this -> setExpiration($expiration);
    }
 
    public function getExpiration(){
       return $this -> expiration;
    }
 
    public function setExpiration($expiration){
       $this -> expiration = $expiration;
    }
}