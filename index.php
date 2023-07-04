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
                    <div>[<?php echo $product -> getCategories() -> getIcon(); ?>] </div>
                    <?php echo $product -> getName()?> 
                </h1>
                <div>prezzo: <?php echo $product -> getPrice()?></div>
                <div>descrizione: <?php echo $product -> getDescription()?></div>
                <div>per il tuo: <?php echo $product -> getCategories() -> getName(); ?> </div>
            <?php
        }
    ?>
   

</body>
</html>