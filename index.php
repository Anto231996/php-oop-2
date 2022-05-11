<?php
include_once __DIR__ .  './classes/User.php';
include_once __DIR__ .  './classes/CreditCard.php';
include_once __DIR__ .  './classes/Food.php';
include_once __DIR__ .  './classes/Product.php';

$croccantini = new Food ('Manzo e verdure','Monge',6.0,'Croccantini',9.99,'Favolosi croccantini per cani');
$cuccia = new Product ('Cuccia', 39.99, 'Stupenda cuccia per cani');
$creditCard = new CreditCard ('5000 4000 3000 2000', 2022);
$user = new User ('Salvo', 'Errori', $creditCard, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Nome:</h3>
    <?php echo $user->getFirstName(); ?>
    <h3>Cognome:</h3>
    <?php echo $user->getLastName(); ?>
    <h3>Numero carta di credito:</h3>
    <?php echo $creditCard->getNumber(); ?>
    <h3>Scadenza carta di credito:</h3>
    <?php echo $creditCard->getExpirty(); ?>
    <h3>Prodotto:</h3>
    <?php echo $cuccia->getName(); ?>
    <h3>Prezzo:</h3>
    <?php echo $cuccia->getPrice().' '.'€'; ?>
    <h3>Descrizione:</h3>
    <?php echo $cuccia->getDescription(); ?>
    <h3>Prodotto:</h3>
    <?php echo $croccantini->getName(); ?>
    <h3>Brand:</h3>
    <?php echo $croccantini->getBrand(); ?>
    <h3>Peso:</h3>
    <?php echo $croccantini->getWeight().' '.'kg'; ?>
    <h3>Al gusto:</h3>
    <?php echo $croccantini->getTaste(); ?>
    <h3>Descrizione:</h3>
    <?php echo $croccantini->getDescription(); ?>
    <h3>Prezzo:</h3>
    <?php echo $croccantini->getPrice().' '.'€'; ?>
</body>
</html>