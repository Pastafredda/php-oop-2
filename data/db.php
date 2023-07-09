<?php
require_once("./traits/Edible.php");
require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Toy.php");
require_once("./models/Food.php");

$cat = new Category("gatto", "icon cat");
$dog = new Category("cane", "icon dog");


try{
    
    $products = [
        $prod1 = new Product("guinzaglio", 14, "guinzaglio per cani", $dog),
        $prod2 = new Product("lettiera", 40, "moderna lettiera per gatti", $cat),
    ];
    $foods=[
        $food1= new Food("cibo per gatti", 13, "cibo per gatti europei", $cat, "10/02/2024"),
        $food2= new Food("cibo per cani", 16, "cibo per cani di grossa taglia", $dog, "20/05/2024"),

    ];
    $toys=[
        $toy1 = new Toy("osso", 9, "osso giocattolo", $dog, "2+", "plastica", false),
        $toy2 = new Toy("pallina", 8, "pallina di piccole dimensoni", $dog, "1+", "plastica biodegradabile", true),
        $toy3 = new Toy("pupazzo", 12, "pupazzo raffigurante Jerry", $cat, "2+", "stoffa", false)
    ];
    
    
}catch(Exception $e){
    echo "error:" . " " . $e -> getMessage();
}
