<?php

session_start();

$price = $_GET['price'];
if (!empty($price)) {
    $_SESSION['price'] = $price;
}

?>

<form action="5-superglobales.php?price=<?= $price ?>" method="post">
    <div>
        <label for="gift">Gift</label>
        <input type="number" id="gift" name="gift"
        min="10" max="100">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>

    <input type="submit" value="Envoyer le formulaire">
</form>

<?php

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Veuillez entrer un email valide';
    }
}
    if (isset($_POST['gift']) && isset($_POST['email'])) {
        $_SESSION['gift'] = $_SESSION['sum'] = $_POST['gift'] + $price;
        $_SESSION['email'] = $email;
        echo $_SESSION['sum'];
        echo $_SESSION['email'];
    }

    


?>