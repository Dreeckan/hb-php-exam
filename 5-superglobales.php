<?php
session_start();

$price = $_GET["price"];
if (!empty($price)) {
    $_SESSION['price'] = $price;
}

?>

<form action="" method="post">
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" id="gift" name="gift">
    </div>
    <div>
        <input type="submit">
    </div>

</form>

<?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 0;
        $emailValide = $email;
        echo ("l'adresse mail est bien valide !");
    } else {
        $error = 1;
        $emailValide = ".";
        echo ("L'adresse mail n'est pas une adresse mail valide !");
    }
}
if (isset($_POST['gift'])) {
    $don = $_POST['gift'];
    if ($don >= 1) {
        $donValide = $don;
        $error = 0;
        echo " merci pour votre don de $donValide € !";
    } else {
        $error = 1;
        $donValide = ".";
        echo "Pas très sympa de ne pas avoir fait de don";
    }
}
if ($error = 0) {
    $_SESSION['sum'] = $donValide + $price;
    $_SESSION['email'] = $emailValide;
}

var_dump($_SESSION['price'], $_SESSION['email'], $_SESSION['sum']);
