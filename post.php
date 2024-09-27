<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $postDate = $_POST ?>

    <?php
    $fileInfo = pathinfo($_FILES['screenshot']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (
        !isset($_POST["email"]) ||
        !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)

    ) {
        echo "   Marche pas";
    } else {
        echo "Email pris en compte";
    }
    if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
        echo "cbon";
        if ($_FILES['screenshot']['size'] > 1000000) {
            echo "cbon";

            if (in_array($extension, $allowedExtensions)) {
                echo "cbon " . $extension;

            }
        }
    } else {
        echo "non";
    }
    $path = __DIR__ . '/uploads/';
    if (is_dir($path)) {
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }
    move_uploaded_file($_FILES['screenshot']['echec temporaire'], $path . basename($_FILES['screenshot']['name']));
    ?>


    <h1><?php echo htmlspecialchars($postDate["email"]) ?></h1>
    <!-- htmlspecialchars empeche l affichage du script si quequ'un en rajoute -->
</body>

</html>
    <!-- htmlspecialchars empeche l affichage du script si quequ'un en rajoute -->
</body>

</html>
