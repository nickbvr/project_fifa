<?php
include "header.php";
?>
<script>
    $('title').html('Contacts')
</script>
<main class="main">
    <div class="wrapper__small contacts">
        <section class="current-page contacts">
            <div>
                <a class="home-link" href="/">Home</a>
                <a class="current-link" href="contacts.php">Contacts</a>
            </div>
            <h1 class="current-page__title">CONTACT US</h1>
            <p class="contacts__description">If you have a problem, please fill out the form right away. Our
                specialists response time is very quick. However if your question is unclear or not urgent please
                do not expect an immediate response.</p>
            <p class="contacts__mail">For Customers:
                <a class="contacts__mail-link" href="mailto:support@domain.com"><strong>support@domain.com</strong></a>
            </p>
        </section>
        <form action="support.php" method="post" class="contacts__form">
            <input type="text" name="user_name" placeholder="Your Name" class="contacts__form-input" required>
            <input type="email" name="user_email" placeholder="Your Email" class="contacts__form-input" required>
            <textarea name="user_message" placeholder="Message" class="contacts__form-area" required></textarea>
            <button type="submit" class="contacts__form-button">Send</button>
        </form>

    </div>
</main>
<footer class="footer">
    <div class="wrapper__big">
        <ul class="footer__list">
            <li class="footer__item">
                <a href="/">HOME</a>
            </li>
            <li class="footer__item">
                <a href="faq.php">F.A.Q</a>
            </li>
            <li class="footer__item">
                <a href="terms.php">TERMS</a>
            </li>
            <li class="footer__item">
                <a href="privacy.php">PRIVACY</a>
            </li>
            <li class="footer__item">
                <a href="refund.php">REFUND POLICY</a>
            </li>
            <li class="footer__item">
                <a href="contacts.php">CONTACTS</a>
            </li>
        </ul>
        <div class="footer__info">
            <div class="footer__info-rights">
                <p>Copyright © 2021 fut.urbest.store - powered by Urbest.store Marketplace. </p>
                <p>All rights reserved by Urbest.store Marketplace</p>
            </div>
            <div class="footer__info-payments">
                <p>Payments</p>
                <div class="footer__info-payments-ico">
                    <img src="/img/payments1.svg" alt="Paypal" class="footer__info-payments-img">
                    <img src="/img/payments2.svg" alt="Visa" class="footer__info-payments-img">
                    <img src="/img/payments3.svg" alt="Mastercard" class="footer__info-payments-img">
                </div>

            </div>
        </div>
        <div class="footer__social">
            <a class="footer__social-ico" href="#!"><img src="/img/facebook-ico.svg" alt="Facebook"></a>
            <a class="footer__social-ico" href="#!"><img src="/img/twitter-ico.svg" alt="Twitter"></a>
            <a class="footer__social-ico" href="#!"><img src="/img/youtube-ico.svg" alt="Youtube"></a>
            <a class="footer__social-ico" href="#!"><img src="/img/instagram-ico.svg" alt="Instagram"></a>
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>
