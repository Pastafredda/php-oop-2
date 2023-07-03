<?php

require_once("./models/prodotto.php");
$nameCat = new Category("Gatto");
$nameDog = new Category("Cane");
$prod1 = new Product("Guinzaglio", "14,99€", "Guinzaglio per cani di grossa taglia", $nameDog);
var_dump($prod1);