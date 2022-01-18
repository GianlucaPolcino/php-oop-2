<?php
require_once __DIR__ . "/classes/Product.php";

$new_product = new Product("Vanilla Cupcake", 29);
$new_product->setType("Giara grande");
$new_product->setPrice(29.90);
$new_product->$discount = 30;

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
    <h3>
        Prezzo: <?php echo $new_product->getPrice() ?>
    </h3>
    <h3>
        Sconto: <?php echo $new_product->$discount ?>
    </h3>
</body>
</html>