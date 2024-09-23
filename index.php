<?php

function getRecipess($a, $b)
{
    echo $a + $b;
}

getRecipess(5, 2);
$tableauRecette = [
    // "Recette" => "Poulet",
    // "temps" => "10min",
    // "Notes => " => "10/ 10",
    [
        "Recette" => "Poulet",
        "temps" => "10min",
        "Notes => " => "10/ 10",
        'is_enabled' => true,
    ],
    [
        "Recette" => "Tacos",
        "temps" => "5min",
        "Notes => " => "8.5/ 10",
        'is_enabled' => true,
    ],
    [
        "Recette" => "Pizza",
        "temps" => "8min",
        "Notes => " => "2.5/ 10",
        'is_enabled' => false,
    ],
];

function isValidRecipe()
{

}
// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
    ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
];

$all = ["dd", "értf,", "s"];
$position = array_search('s', $all);
echo '"Mathieu" se trouve en position ' . $position . PHP_EOL;

$users = [
    [
        'full_names' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
        'emailValid' => false,
    ],
    [
        'full_names' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
        'emailValid' => true,
    ],
    [
        'full_names' => 'Laurène Castor',

        'age' => 28,
        'emailValid' => true,
    ],
];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <form action="submit_contact.php" method="GET">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="message">Votre message</label>
            <textarea placeholder="Exprimez vous" name="message"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <?php foreach ($users as $key): ?>
        <?php if ($key["emailValid"] == true & array_key_exists("email", $key)): ?>
            <h1><?php echo $key["full_names"] . "a les droits d'administrateur" ?></h1>
        <?php endif ?>
    <?php endforeach; ?>

    <a href="page1.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>
    <?php foreach ($tableauRecette as $key): ?>
        <?php echo $key["Recette"] ?>
    <?php endforeach; ?>

    <?php for ($i = 0; $i < 3; $i++): ?>



        <?php if ($tableauRecette[$i]["is_enabled"]): ?>

            <h4><?php echo $tableauRecette[$i]["Recette"] ?></h4>
            <h5><?php echo `il va falloir ` . $tableauRecette[$i]["temps"] . "pour preparer" ?> </h5>
        <?php else:
            echo "" ?>
        <?php endif ?>
    <?php endfor; ?>

    <!-- ///////////////// -->
    <?php if (array_key_exists('Recette', $tableauRecette)): ?>
        <h2> "ça existe"; ?></h2>
    <?php else: ?>
        <h3>inconu</h3>
    <?php endif; ?>
    <?php $chickenRecipesEnabled = true; ?>
    <?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

        <h1>Liste des recettes à base de poulet</h1>
        d
    <?php endif; ?><!-- Ni le ";" après le endif -->
    <h1>Ma page web</h1>
    <p>
        Aujourd'hui nous sommes le
        <?php echo date('d/m/Y h:i:s'); ?>.
        <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>
    </p>
    <ul>

        <?php for ($i = 0; $i < 2; $i++): ?>
            <li> <?php echo $recipes[$i][0]; ?> </li>
        <?php endfor; ?>

    </ul>

    <?php if (2 > 3): ?>

        <h1>superieur</h1>
    <?php else: ?>
        <h1>inferieur</h1>
    <?php endif; ?>


    <?php for ($i = 0; $i < 3; $i++)
    : ?>
        <h2><?php echo "la recette est le/la " . $tableauRecette[$i]["Recette"] ?></h2>
        <span><?php echo "la note sur 10 est de " . $tableauRecette[$i]["temps"] ?></span>
    <?php endfor ?>

</body>

</html>

<?php

// string : "chaine de caractere"
//  int : number

// float virgule
// bool boulean
// rien null
// age int = 50



$variable1 = "\"Mon \" \"nom\" est Mathieu";
$remplace = $variable1 . str_ireplace("nom", "prenom", $variable1);
echo $remplace;
$length = strlen($variable1);

$variable2 = 'Je m\'appelle Mathieu';
$email = "math039@outlook.fr";
$userAge = 21;
$float = 3.540;
$vraioufaux = false;
$nul = null;
if ($userAge < 10) {
    echo "cc";
} else {
    echo "non";
}


echo "Bonjour , j'ai {$userAge} ans et mon mail est {$email}";
echo `Bonjour ` . `$userAge ` . `ddd`;

$resultat1 = $float / $userAge;
echo 100 % 6;

$isEnabled = false;
if ($isEnabled === true) {
    echo "Vous etes autorosé";
} else if ($isEnabled === NULL) {
    echo "valeur null";
} else {
    echo "Refus";
}


if (!$isEnabled) {
    echo "! valeur false";

}
$isEnabled2 = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
// phpinfo();

$recipe = [
    "1",
    "50",
    5
];

foreach ($recipe as $value) {
    echo $value;
}
// switch case

$Valeur1 = 3;

switch ($Valeur1) {
    case 1:

        echo "la valeur est egal a {$Valeur1}";
        break;
    case 2:

        echo "la valeur est egal a {$Valeur1}";
        break;
    case 3:
        echo "la valeur est egal a {$Valeur1}";
        break;



    default:
        # code...


        // ternaire




        // $isAdult = ($userAge >= 18) ? true : false;

        // // Ou mieux, dans ce cas précis
        // $isAdult = ($userAge >= 18);

        $users = [$mickael, $mathieu, $laurene];

        echo $users[1][1]; // "mathieu.nebra@exemple.com"ffv
}
$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

if (in_array('Mickaël Andrieu', $mickael)) {
    echo 'La clé "title" se trouve dans la recette !';
} else {
    echo 'no';
}
$a = 0;
while ($a <= 10) {
    $a++;
    echo $a;

}
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
echo '<pre>';
print_r($users);
echo '</pre>';

array_key_exists('clé', $users);
for ($lines = 0; $lines < 3; $lines++) {
    echo $users[$lines]["email"];

}
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    ' avant %s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);

$day = date('d');
$month = date('m');
$year = date('Y');

$date = date('d/m/Y');
$time = date('H \h i');
$hour = date('H');
$minute = date('i');
?>



<!-- // XAMMP
// sauter des lignes : \* -->
