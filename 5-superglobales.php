<?php
    if (!empty($_GET['price'])) {
        $_SESSION['price'] = (float) $_GET['price'];
    }

    $errors = [];

    if (!empty(trim($_POST['email']))) {
        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Veuillez entrer un email valide';
        }
    }

    if (isset($_POST['gift'])) {
        if (!is_numeric($_POST['gift']) || $_POST['gift'] < 0) {
            $errors[] = "Vous n'êtes pas obligé de donner, mais la valeur entrée est invalide";
        }
    }

    if (isset($_POST['gift'])
        && isset($_POST['email'])
        && empty($errors)
    ) {
        $_SESSION['sum'] = $_SESSION['price'] + (float) $_POST['gift'];
        $_SESSION['email'] = trim($_POST['email']);
    }

    foreach ($errors as $error) {
        echo $error.'<br />';
    }
?>

<form action="" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" name="gift" id="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <button type="submit">Valider</button>
    </div>
</form>
