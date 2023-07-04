<?php
require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Toy.php");
require_once("./models/Food.php");


$cat = new Category("cat", "icon cat");
$dog = new Category("dog", "icon dog");
$prod1 = new Product("pippi", 14, "qualcosa", $dog);
$food1= new Food("cibo cane", 13, "qualcosa di cibo", $cat, "10/02/2024");
$toy1 = new Toy("osso", 9, "osso giocattolo", $dog, "+6", "plastica");

