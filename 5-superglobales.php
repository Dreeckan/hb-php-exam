<?php
//Accès à la page si la variable prix n'est pas vide.
   if (empty($_GET['price'])) {
       header('Location: 4-html.php');
   }
       $price = $_GET['price'];
       $_SESSION['price'] = $price;


// Tableau contenant les vérifications à effectuer
$errors = [];

    if (isset($_POST['gift'])) { //Si aucune somme n'est indiquée, afficher un message d'erreur.
        if (empty($_POST['gift'])) {
            $errors[] = "Veuillez saisir un montant";
        }
    }

    if (isset($_POST['email'])) { //Vérification de la validité de l'email.
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Veuillez entrer un email valide";
        }
    }
        //Si les champs email et gift sont rempli et sans erreurs, alors ils sont ajoutés en session.
    if (isset($_POST['email']) && isset($_POST['gift']) && empty($errors)) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['sum'] = $price += $_POST['gift'];
        //var_dump($_SESSION);
    }

    foreach ($errors as $error) { //Afficher les erreurs ligne par ligne.
        echo $error.' <br />';
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
