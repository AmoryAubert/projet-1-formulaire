<?php include './functions/check.php';?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/style.css">
    <title>Hackers Poulette</title>
</head>

<body>

    <?php include './view/template/header.php';?>

    <div class="container">
        <?php include './functions/router.php';?>
    </div>

    <?php include './view/template/footer.php';?>

</body>
</html>