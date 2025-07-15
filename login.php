<?php
$activePage = 'login';
include __DIR__ . '/include/translation_include.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Karel Novotný Wine</title>
    <link rel="stylesheet" href="css/basic.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="icon" href="images/logo.png" type="image/png" />
</head>

<body>
    <header>
        <?php include 'include/navbar.php'; ?>
    </header>

    <main>
        <form method="POST" action="login.php?lang=<?= $lang ?>" class="login-form">
            <label for="email"><?= $t['email'] ?></label>
            <input type="email" name="email" required class="input">

            <label for="password"><?= $t['password'] ?></label>
            <input type="password" name="password" required class="input">

            <button type="submit" class="bg-burgundy text-white px-4 py-2 rounded"><?= $t['login'] ?></button>
        </form>
    </main>

    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
</body>

</html>