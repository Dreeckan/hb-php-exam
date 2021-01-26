<?php
session_start();
$price = $_GET['price'];
if (!empty($price)) {
    $_SESSION['price'] = $price;
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
        <input type="submit">
    </div>

</form>
<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("Adresse mail valide !");
    } else {
        echo ("Votre adresse mail n'est pas valide !");
    }
}

if (isset($_POST['gift'])) {

    $gift = $_POST['gift'];
}

if (isset($_POST['gift']) && isset($_POST['email'])) {
    $_SESSION['sum'] = $gift + $price;
    $_SESSION['email'] = $email;
}
