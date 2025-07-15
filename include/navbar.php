<?php
$isLoggedIn = isset($_SESSION['user_id']);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
        <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1): ?>
            <li class="admin-dropdown">
                <a href="#"><?= $t['admin_menu'] ?? 'Admin' ?> ▼</a>
                <ul class="dropdown-content">
                    <li><a href="admin_dashboard.php?lang=<?= $lang ?>"><?= $t['admin_dashboard'] ?? 'Administrace' ?></a></li>
                    <li><a href="manage_users.php?lang=<?= $lang ?>"><?= $t['manage_users'] ?? 'Správa uživatelů' ?></a></li>
                    <li><a href="admin_news.php?lang=<?= $lang ?>"><?= $t['admin_news'] ?? 'Novinky' ?></a></li>
                </ul>
            </li>
        <?php endif; ?>
        <div class="lang-switcher">
            <a href="?lang=en">EN</a> | <a href="?lang=cs">CZ</a>
        </div>
    </ul>
</nav>

<script src="js/f12.js"></script>