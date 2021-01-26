<?php
session_start();

if (empty($_GET['price'])) {
    header('Location: 1-html.php');
}
    $price = $_GET['price'];
    $_SESSION['price'] = $price;

    $errors = [];

    if (isset($_POST['gift'])) {
        if (empty($_POST['gift'])) {
            $errors[] = "Veuillez saisir un don";
        }
    }

    if (isset($_POST['email'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Veuillez entrer un email valide";
        }
    }

    if (
        isset($_POST['email'])
        && isset($_POST['gift'])
        && empty($errors)
        ) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['sum'] = $_POST['gift'] + $price;
        var_dump($_SESSION);
    }

    foreach ($errors as $error) {
        echo $error.' <br />';
    }

?>

<form action="5-superglobales.php?price=<?= $price ?>" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" name="gift" id="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <input type="submit" value="Valider">
    </div>
</form>
