<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <?php if (5 > 1):
        echo "cc" ?> <?php endif; ?>





    <h1>Ma page web</h1>
    <p>
        Aujourd'hui nous sommes le
        <?php echo date('d/m/Y h:i:s'); ?>.
        <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>
    </p>
</body>

</html>