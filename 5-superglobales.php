<?php
session_start();

$errorMessages = [];

$error = false;


if (isset($_GET['price'])) {
    if (!empty($_GET['price'])) {
        $_SESSION['price'] = $_GET['price'];
    }
}

if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = 'Veuillez entrer un email valide';
        $error = true;
    }
}


if (isset($_POST['gift'])) {
    if (empty($_POST['gift'])) {
        $errorMessages[] = 'Radiiiin!!! Tu as fais aucun don !';
        $error = true;
    }
}

if (isset($_POST['gift']) && isset($_POST['mail']) && !$error) {
    $_SESSION['sum'] = $_POST['gift'] + $_GET['price'];
    $_SESSION['email'] = $_POST['mail'];
}



foreach ($errorMessages as $message) {
    echo '<p>'.$message.'</p>';
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