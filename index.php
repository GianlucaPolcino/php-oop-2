<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Collection.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";

// Product
$new_product = new Product(01, "Vanilla Cupcake", 29.90);
$new_product->setType("Giara grande");
$new_product->setPrice(29.90);
$new_product->setDescription("Una fragranza che evoca il ricco e cremoso profumo dei cupcake alla vaniglia e che richiama le note di limone e di un abbondante e soffice strato di glassa.");

// Collection
$new_collection = new Collection(02, "Christmas cookie", 24.90, "Natalizia");
$new_collection->setType("Giara media");
$new_collection->setPrice(24.90);
$new_collection-> setDescription("I dolci delle feste ricchi di burro e profumati alla vaniglia.");
$new_collection->setCollection("Natalizia");

// Credit card
$buyer_card = new CreditCard(123456789, 123);
$buyer_card->setExpire("2024");
$buyer_card->setName("Marco Marini");

// User
$buyer = new User("pippo@pluto.com", "papaveri");
$buyer->setName("Marco");
$buyer->setSurname("Marini");
$buyer->setCreditCard($buyer_card);

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

    <!-- PRODOTTI -->

    <div>
        <h2>
            Nome prodotto: <?php echo $new_product->getName() ?>
        </h2>

        <h2>
            Tipo prodotto: <?php echo $new_product->getType() ?>
        </h2>

        <p>
            <?php echo $new_product->getDescription() ?>
        </p>

        <h3>
            Prezzo finale: <?php echo $new_product->getFinalPrice() ?>
        </h3>

        <h2>
            Nome prodotto: <?php echo $new_collection->getName() ?>
        </h2>

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
    </div>

    <!-- CARRELLO -->

    <div>

        <h2>
            CARRELLO:
        </h2>

        <h3>
            Nome utente: <?php echo $buyer->getName() ?> <?php echo $buyer->getSurname() ?>
        </h3>

        <h3>
            Carta numero: <?php echo $buyer_card->getNumber() ?>
        </h3>

        <h3>
            Intestata a: <?php echo $buyer_card->getName() ?>
        </h3>

        <h2>
            TOTALE: <?php echo $new_product->getPrice() + $new_collection->getPrice() ?>
        </h2>

    </div>
</body>
</html>