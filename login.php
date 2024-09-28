<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- login email mdp -->
<h1>LE FORMULAIRE login email mdp</h1>
<form action="login.php" method="POST" enctype="multipart/form-data">
    <div id="email">
        <label for="emaillogin">emaillogin</label>
        <input type="email" id="emaillogin" name="nameEmail">
    </div>
    <div id="password">
        <label for="passwordlogin">passwordlogin</label>
        <input type="password" id="passwordlogin" name="namePassword">
    </div>
    <button type="submit">Envoyer</button>
</form>
<!-- fin login email mdp -->
<?php $DataPost = $_POST ?>
<?php $tableauClientValid = [
    [
        "Email" => "mojk@gmail.com",
        "mdp" => "ordi"
    ],
    [
        "Email" => "mojak@gmail.com",
        "mdp" => "voiture"
    ],
    [
        "Email" => "mojkc@gmail.com",
        "mdp" => "riche"
    ],

] ?>
<?php $valid = false ?>
<?php

if (
    !isset($DataPost["nameEmail"])
    || !filter_var($DataPost["nameEmail"]
        || empty($DataPost['nameEmail'])
        || trim($DataPost['nameEmail']) === '')


) {
    echo "ça marche pas";
} else {
    echo "Bonjour " . $DataPost["nameEmail"] . "et bienvenue sur le site !";
    $valid = true;
}

?>


<?php if ($valid = true): ?>
    <?php require_once(__DIR__ . '/recette.php'); ?>
<?php endif ?>

<body>

</body>

</html>
