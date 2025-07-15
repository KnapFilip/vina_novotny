<?php
$isLoggedIn = isset($_SESSION['user_id']);
?>

<nav>
    <div class="logo">
        <img src="images/logo.png" alt="Logo" />
    </div>
    <ul>
        <li><a href="main.php?lang=<?= $lang ?>" class="<?= ($activePage === 'main') ? 'active' : '' ?>"><?= $t['home'] ?></a></li>
        <li><a href="aboutus.php?lang=<?= $lang ?>" class="<?= ($activePage === 'aboutus') ? 'active' : '' ?>"><?= $t['aboutus'] ?></a></li>
        <li><a href="aboutwine.php?lang=<?= $lang ?>" class="<?= ($activePage === 'aboutwine') ? 'active' : '' ?>"><?= $t['aboutwine'] ?></a></li>
        <li><a href="contact.php?lang=<?= $lang ?>" class="<?= ($activePage === 'contact') ? 'active' : '' ?>"><?= $t['contact'] ?></a></li>
        <li><a href="eshop.php?lang=<?= $lang ?>" class="<?= ($activePage === 'eshop') ? 'active' : '' ?>"><?= $t['eshop'] ?></a></li>
        <li><a href="visitus.php?lang=<?= $lang ?>" class="<?= ($activePage === 'visitus') ? 'active' : '' ?>"><?= $t['visitus'] ?></a></li>
        <li><a href="quiz.php?lang=<?= $lang ?>" class="<?= ($activePage === 'quiz') ? 'active' : '' ?>"><?= $t['quiz'] ?></a></li>
        <?php if (!$isLoggedIn): ?>
            <li><a href="login.php?lang=<?= $lang ?>" class="<?= ($activePage === 'login') ? 'active' : '' ?>"><?= $t['login'] ?></a></li>
            <li><a href="register.php?lang=<?= $lang ?>" class="<?= ($activePage === 'register') ? 'active' : '' ?>"><?= $t['register'] ?></a></li>
        <?php else: ?>
            <li><a href="profile.php?lang=<?= $lang ?>" class="<?= ($activePage === 'profile') ? 'active' : '' ?>"><?= $t['profile'] ?></a></li>
        <?php endif; ?>
        <div class="lang-switcher">
            <a href="?lang=en">EN</a> | <a href="?lang=cs">CZ</a>
        </div>
    </ul>
</nav>

<script src="js/f12.js"></script>