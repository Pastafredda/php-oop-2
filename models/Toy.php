<?php
class Toy extends Product{

    use Edible;

    private $minAge;
    private $material;

    public function __construct($name, $price, $description, $categories ,$minAge, $material, $edible){
        
        parent :: __construct($name, $price, $description, $categories);
        $this -> setMinAge($minAge);
        $this -> setMaterial($material);
        $this -> setEdible($edible);
        
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