<?php
$activePage = 'main'; // Změň podle aktuální stránky
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

<body>
    <header>
        <?php include 'include/navbar.php'; ?>
    </header>

    <main>
        <div class="hero">
            <h1>Welcome to Karel Novotný Wine</h1>
            <p>Your journey into the world of fine wines begins here.</p>
        </div>

        <section class="features">
            <h2>Our Features</h2>
            <ul>
                <li>Explore our exquisite wine collection</li>
                <li>Learn about the art of winemaking</li>
                <li>Join our community of wine enthusiasts</li>
            </ul>
        </section>

        <section class="about">
            <h2>About Us</h2>
            <p>Karel Novotný Wine is dedicated to bringing you the finest wines from around the world. Our passion for quality and tradition drives us to curate an exceptional selection for our customers.</p>
        </section>
    </main>

    <footer>
    </footer>
</body>

</html>