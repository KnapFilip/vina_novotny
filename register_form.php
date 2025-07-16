<?php
$activePage = 'register';
include __DIR__ . '/include/translation_include.php';
define('SECURE', true);
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Karel Novotný Wine</title>
    <link rel="stylesheet" href="css/basic.css" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="icon" href="images/logo.png" type="image/png" />
</head>

<body>
    <header>
        <?php include 'include/navbar.php'; ?>
    </header>
    <main>
        <form method="POST" action="php/register.php?lang=<?= $lang ?>" class="register-form" id="registerForm">
            <label for="name"><?= $t['name'] ?></label>
            <input type="text" name="name" required class="input">

            <label for="surname"><?= $t['surname'] ?></label>
            <input type="text" name="surname" required class="input">

            <label for="email"><?= $t['email'] ?></label>
            <input type="email" name="email" required class="input">

            <label for="password"><?= $t['password'] ?></label>
            <input type="password" name="password" id="password" required class="input">

            <label for="confirm_password"><?= $t['confirm_password'] ?></label>
            <input type="password" name="confirm_password" id="confirm_password" required class="input">

            <label for="birthdate"><?= $t['birthdate'] ?></label>
            <input type="date" name="birthdate" required class="input">

            <label for="street"><?= $t['street'] ?></label>
            <input type="text" name="street" required class="input">

            <label for="town"><?= $t['town'] ?></label>
            <input type="text" name="town" required class="input">

            <label for="psc"><?= $t['psc'] ?></label>
            <input type="text" name="psc" required class="input">

            <div id="error" class="text-red-600 text-sm hidden" style="margin-top: 10px;"></div>

            <button type="submit" class="bg-burgundy text-white px-4 py-2 rounded"><?= $t['register'] ?></button>
        </form>
    </main>

    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>

    <!-- Překlady JS hlášek předáme jako proměnné -->
    <script>
        const errorTexts = {
            mismatch: "<?= $t['password_mismatch'] ?>",
            strength: "<?= $t['password_strength'] ?>"
        };

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('confirm_password').value;
            const errorBox = document.getElementById('error');
            errorBox.classList.add('hidden');
            errorBox.textContent = "";

            const strongRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d])[A-Za-z\d\S]{8,}$/;

            if (password !== confirm) {
                e.preventDefault();
                errorBox.textContent = errorTexts.mismatch;
                errorBox.classList.remove('hidden');
            } else if (!strongRegex.test(password)) {
                e.preventDefault();
                errorBox.textContent = errorTexts.strength;
                errorBox.classList.remove('hidden');
            }
        });
    </script>
</body>

</html>