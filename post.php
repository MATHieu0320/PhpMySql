<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $postDate = $_POST ?>
    <?php if (
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
            return;
        }
    } else {
        echo "non";
    }
    ?>


    <h1><?php echo htmlspecialchars($postDate["email"]) ?></h1>
</body>

</html>
