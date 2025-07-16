<footer class="site-footer">
    <div class="footer-columns">
        <!-- O nás -->
        <div class="footer-column">
            <h4><?= $t['footer_about'] ?></h4>
            <ul>
                <li><a href="../aboutus.php?lang=<?= $lang ?>"><?= $t['aboutus'] ?></a></li>
                <li><a href="../visitus.php?lang=<?= $lang ?>"><?= $t['visitus'] ?></a></li>
                <li><a href="../aboutwine.php?lang=<?= $lang ?>"><?= $t['aboutwine'] ?></a></li>
            </ul>
        </div>

        <!-- Dokumenty -->
        <div class="footer-column">
            <h4><?= $t['footer_documents'] ?></h4>
            <ul>
                <li><a href="../other/terms.php?lang=<?= $lang ?>"><?= $t['footer_terms'] ?></a></li>
                <li><a href="../other/gdpr.php?lang=<?= $lang ?>"><?= $t['footer_privacy'] ?></a></li>
                <li><a href="../other/cookies.php?lang=<?= $lang ?>"><?= $t['footer_cookies'] ?></a></li>
            </ul>
        </div>

        <!-- Partneři -->
        <div class="footer-column">
            <h4><?= $t['footer_partners'] ?></h4>
            <ul>
                <li>
                    <img src="" alt="">
                    <a href="#"><?= $t['partners1'] ?></a>
                </li>
                <li>
                    <img src="" alt="">
                    <a href="#"><?= $t['partners2'] ?></a>
                </li>
                <li>
                    <img src="" alt="">
                    <a href="#"><?= $t['partners3'] ?></a>
                </li>
            </ul>
        </div>

        <!-- Sociální sítě -->
        <div class="footer-column">
            <h4><?= $t['footer_social'] ?></h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>

    <div class="payment-methods">
        <img src="../images/payments/visa.png" alt="Visa">
        <img src="../images/payments/mastercard.png" alt="Mastercard">
        <img src="../images/payments/applepay.png" alt="Apple Pay">
        <img src="../images/payments/paypal.png" alt="PayPal">
    </div>

    <div class="footer-bottom">
        <p>© 2025 Filip Knap</p>
        <p><?= $t['footer_created_by'] ?> <a href="https://knapf.eu">Filip Knap</a> <?= $t['with'] ?> ☕ & ❤️</p>
    </div>
</footer>