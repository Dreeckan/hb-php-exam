<?php
    session_start();
    var_dump($_GET['price']);

    $error = false;
    
    if (isset($_GET['price']) && !empty($_GET['price'])) {
        $_SESSION['price'] = $_GET['price'];
    }

    if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = true;
        echo '<div class="alert alert-primary col-md-6 mx-auto my-5" role="alert">
                Veuillez entrer un email valide!
                </div>';
    }

    if (isset($_POST['email']) && isset($_POST['gift']) && !$error) {
        $_SESSION['sum'] = $_SESSION['price'] + $_POST['gift'];
        $_SESSION['email'] = $_POST['email'];
    }

?>

<form action="" method="POST">
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" id="gift" name="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
    <input type="submit">
</form>
