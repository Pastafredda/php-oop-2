<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once("./data/db.php");
    ?>
</head>
<body>
    <?php 
        foreach ($products as $product){
            ?>                            
                <h1>
                    <div>[<?php echo $product -> getCategories() -> getIcon() ?>] </div>
                    <?php echo $product -> getName()?> 
                </h1>
                <div>prezzo: <?php echo $product -> getPrice()?></div>
                <div>descrizione: <?php echo $product -> getDescription()?></div>
                <div>per il tuo: <?php echo $product -> getCategories() -> getName() ?> </div>
            <?php
        }
    ?>

    <?php 
        foreach ($foods as $food){
            ?>                            
                <h1>
                    <div>[<?php echo $product -> getCategories() -> getIcon(); ?>] </div>
                    <?php echo $food -> getName()?> 
                </h1>
                <div>prezzo: <?php echo $food -> getPrice()?></div>
                <div>descrizione: <?php echo $food -> getDescription()?></div>
                <div>per il tuo: <?php echo $food -> getCategories() -> getName() ?> </div>
                <div>scadenza: <?php echo $food -> getExpiration() ?> </div>
                <div>commestibilità: <?php echo $food -> getEdible() ? "commestibile" : "non commestibile"  ?> </div>

            <?php
        }
    ?>

    <?php 
        foreach ($toys as $toy){
            ?>                            
                <h1>
                    <div>[<?php echo $product -> getCategories() -> getIcon(); ?>] </div>
                    <?php echo $toy -> getName()?> 
                </h1>
                <div>prezzo: <?php echo $toy -> getPrice()?></div>
                <div>descrizione: <?php echo $toy -> getDescription()?></div>
                <div>per il tuo: <?php echo $toy -> getCategories() -> getName() ?> </div>
                <div>a partire da anni: <?php echo $toy -> getMinAge()?></div>
                <div>tipo di materiale: <?php echo $toy -> getMaterial()?></div>
                <div>commestibilità: <?php echo $toy -> getEdible() ? "commestibile" : "non commestibile" ?> </div>
            <?php
        }
    ?>
   

</body>
</html>