<?php
session_start();
/**
 * @var array
 */
$errors = [];

if (!empty($_GET['price'])) {
    $_SESSION['price'] = $_GET['price'];
}


if (isset($_POST['email'])) {
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            $errors[] = 'Veuillez entrer un email valide !';
        }
    } else {
        $errors[] = 'Veuillez entrer votre adresse mail !';
    }

}


if (isset($_POST['gift'])) {
    if (empty($_POST['gift'])) {
        $errors[] = 'Veuillez entrer le montant de votre don !';
    }
}

if (isset($_POST['gift']) && isset($_POST['email']) && !empty($errors)) {
    $_SESSION['sum'] = $_GET['price'] + $_POST['gift'];
    $_SESSION['emai'] = $_POST['email'];
}

foreach ($errors as $error) {
    echo $error . '<br/>';
}


?>

<form action="" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input name='gift' type="number" id="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input name='email' type="email" id="email">
    </div>

    <button type='submit'>Envoyer</button>
</form>
