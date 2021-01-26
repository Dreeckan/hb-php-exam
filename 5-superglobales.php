<?php
session_start();

$price = $_GET["price"];

if (!empty($_GET["price"])) {
    $_SESSION["price"] = $price;
}

$errorMessage = '';
$gift = 0;
$email = '';

if (!empty($_POST)) {
    $gift = $_POST['gift'];
    $email = $_POST['email'];
 
    if (empty($email)) {
        $errors[] = 'Veuillez entrer un email valide';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Veuillez entrer un email valide';
    }

}

if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
} else {
    $_SESSION["gift"] = $gift;
    $_SESSION["email"] = $email;
    $sum = $price + $gift; 
}

echo '
'.$errorMessage.'';

var_dump($_SESSION);
var_dump($sum);?>

<form action="" method="post">
    <div>
        <label for="gift">Ajouter un don</label>
        <input type="number" id="gift" name="gift">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
    <button type="submit">Envoyer</button>
</form>
