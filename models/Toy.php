<?php
class Toy extends Product{
    private $minAge;
    private $material;

    public function __construct($name, $price, $description, $categories ,$minAge, $material){
        
        parent :: __construct($name, $price, $description, $categories);
        $this -> setMinAge($minAge);
        $this -> setMaterial($material);
        
    }

    public function getMinAge(){
        return $this-> minAge;
    }

    public function setMinAge($minAge){
        $this -> minAge = $minAge;
    }

     public function getMaterial(){
        return $this-> material;
    }

    public function setMaterial($material){
        $this -> material = $material;
    }

}