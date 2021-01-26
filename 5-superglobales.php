<?php
session_start();
$errorMessages = [];
$error = false;
/*
    Recuperation du prix passé en url + ajout a la session
*/

if (isset($_GET['price'])) {
    if (!empty($_GET['price'])) {
        $_SESSION['price'] = $_GET['price'];
    }
}
/*
    verification mail
*/
if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = 'L\'adresse email '.$_POST['email'].' n\'est pas considérée comme valide';
        $error = true;
    }
}
/*
    verification gift
*/

if (isset($_POST['gift'])) {
    if (empty($_POST['gift'])) {
        $errorMessages[] = 'Vous n\'avez pas saisis de don';
        $error = true;
    }
}
/*
    ajout en session
*/
if (isset($_POST['gift']) && isset($_POST['mail']) && !$error) {
    $_SESSION['sum'] = $_POST['gift'] + $_GET['price'];
    $_SESSION['email'] = $_POST['mail'];
}

/*
    affichage des messages d'erreur
*/

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
