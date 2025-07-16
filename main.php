<?php
$activePage = 'main'; // Změň podle aktuální stránky
require_once 'php/auth.php';
include __DIR__ . '/include/translation_include.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Karel Novotný Wine</title>
    <link rel="stylesheet" href="css/basic.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" type="image/png" />
</head>
<header>
    <?php include 'include/navbar.php'; ?>
</header>

<body>

    <main class="content">
        <div class="ukázka">
            <p><?= $t['test'] ?></p>
                <h1><?= $t['welcome'] ?></h1>
        </div>
    </main>

    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
</body>

</html>