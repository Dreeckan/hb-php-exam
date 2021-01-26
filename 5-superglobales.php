<?php
session_start();

if (!empty($_GET['price'])) {
    $_SESSION['price'] = $_GET['price'];
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false) {
        echo "<div>Veuillez entrer un email valide !</div>";
    } else {
        $_SESSION['email'] = $_POST['email'];
    }
    //var_dump($_SESSION['email']);
}

if (isset($_POST['gift']) && !empty($_POST['gift'])) {
    $_SESSION['sum'] = $_SESSION['price'] + $_POST['gift'];
    //var_dump($_SESSION['price'], $_POST['gift'], $_SESSION['sum']);
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
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
