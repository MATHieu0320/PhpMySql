<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- login email mdp -->
<h1>LE FORMULAIRE login email mdp</h1>

<h2><a href=<?php session_destroy() ?>>Deconnexion</a></h2>


<body>
    <?php
    $tableauClientValid = [
        [
            "email" => "ordi@gmail.com",
            "password" => "ordi"
        ],
        [
            "email" => "voiture@gmail.com",
            "password" => "voiture"
        ],
        [
            "email" => "riche@gmail.com",
            "password" => "riche"
        ],

    ];
    /**
     * On ne traite pas les super globales provenant de l'utilisateur directement,
     * ces données doivent être testées et vérifiées.
     */

    $postData = $_POST;


    // Validation du formulaire
    if (isset($postData['email']) && isset($postData['password'])) {
        if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
        } else {
            foreach ($tableauClientValid as $user) {
                if (
                    $user['email'] === $postData['email'] &&
                    $user['password'] === $postData['password']
                ) {
                    $_SESSION["logged"] = $user["email"];
                    $_SESSION["logged2"] = $user["mdp"];
                }
            }

            if (!isset($_SESSION["logged"])) {
                $errorMessage = sprintf(
                    'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                    $postData['email'],
                    strip_tags($postData['password'])
                );
            }
        }
    }
    ?>

    <!--
       Si utilisateur/trice est non identifié(e), on affiche le formulaire
    -->
    <?php if (!isset($_SESSION["logged"])): ?>
        <form action="envoie.php" method="POST">
            <!-- si message d'erreur on l'affiche -->
            <?php if (isset($errorMessage)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help"
                    placeholder="you@exemple.com">
                <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
    <?php else: ?>
        <div class="alert alert-success" role="alert">
            Bonjour <?php echo $_SESSION["logged"]; ?> et bienvenue sur le site !
        </div>
    <?php endif; ?>
</body>

</html>
