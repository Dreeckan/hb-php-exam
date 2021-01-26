<?php

$price = $_GET['price'];

if (!empty($price)) {
    $_SESSION['price'] = $price;
}
if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Veuillez entrer un email valide';
    }
}
if (isset($_POST['email']) && isset($_POST['gift'])) {
    $_SESSION['sum'] = $price + $_POST['gift'];
    $_SESSION['email'] = $_POST['email'];
    var_dump($_SESSION);
}
 

?>

<form action="" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" id="gift" name="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
    <button type="submit">Valider</button>
</form>

