<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Collection.php";
require_once __DIR__ . "/classes/User.php";

// Product
$new_product = new Product("Vanilla Cupcake", 29.90);
$new_product->setType("Giara grande");
$new_product->setPrice(29.90);
$new_product->setDescription("Una fragranza che evoca il ricco e cremoso profumo dei cupcake alla vaniglia e che richiama le note di limone e di un abbondante e soffice strato di glassa.");

// Collection
$new_collection = new Collection("Christmas cookie", 24.90, "Natalizia");
$new_collection->setType("Giara media");
$new_collection->setPrice(24.90);
$new_collection-> setDescription("I dolci delle feste ricchi di burro e profumati alla vaniglia.");
$new_collection->setCollection("Natalizia")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
</head>
<body>
    <h1>
        Nome prodotto: <?php echo $new_product->getName() ?>
    </h1>

    <h2>
        Tipo prodotto: <?php echo $new_product->getType() ?>
    </h2>

    <p>
        <?php echo $new_product->getDescription() ?>
    </p>

    <h3>
        Prezzo finale: <?php echo $new_product->getFinalPrice() ?>
    </h3>

    <h1>
        Nome prodotto: <?php echo $new_collection->getName() ?>
    </h1>

    <h2>
        Collezione: <?php echo $new_collection->getCollection() ?>
    </h2>

    <h2>
        Tipo prodotto: <?php echo $new_collection->getType() ?>
    </h2>

    <p>
        <?php echo $new_collection->getDescription() ?>
    </p>

    <h3>
        Prezzo finale: <?php echo $new_collection->getFinalPrice() ?>
    </h3>
</body>
</html>