<?php
require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Toy.php");
require_once("./models/Food.php");

$cat = new Category("gatto", "icon cat");
$dog = new Category("cane", "icon dog");

$products = [
    $prod1 = new Product("guinzaglio", 14, "guinzaglio per cani", $dog),
    $food1= new Food("cibo per gatti", 13, "cibo per gatti europei", $cat, "10/02/2024"),
    $toy1 = new Toy("osso", 9, "osso giocattolo", $dog, "1-3", "plastica")
];
