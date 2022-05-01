<?php
include "header.php";
?>
<main class="main home">
    <section class="intro">
        <div class="wrapper__big">
            <h1 class="intro__title">
                FIFA 21 Game stuff
            </h1>
            <p class="intro__subtitle">
                See our order process here<br>so you will not have any doubts
            </p>
            <div class="intro__links">
                <a href="#!" class="intro__link">Buy Coins</a>
                <a href="faq.php" class="intro__link light">How It Works</a>
            </div>
        </div>
    </section>
    <section class="calculate">
        <div class="wrapper__big">
            <div class="ps-button">
                <a href="#!" class="ps-button-link">Playstation 4</a>
            </div>
            <div class="calculate__buttons">
                <div class="calculate__item">
                    <div class="calculate__item-label">Type Quantity</div>
                    <div class="calculate__item-button">
                        <img src="/img/minus.svg" alt="" id="coins__minus" class="calculate__item-button-minus">
                        <input name="user_value" type="number" id="coins-value" value="100000" class="calculate__item-button-input">
                        <img src="/img/plus.svg" alt="" id="coins__plus" class="calculate__item-button-plus">
                    </div>
                </div>
                <div class="calculate__item">
                    <div class="calculate__item-label">Price</div>
                    <div class="calculate__item-button">
                        <img src="/img/minus.svg" alt="" id="price__minus" class="calculate__item-button-minus">
                        <input name="user_price" type="number" id="price-value"  value="19.00" class="calculate__item-button-input">
                        <img src="/img/plus.svg" alt="" id="price__plus" class="calculate__item-button-plus">
                    </div>
                </div>
                <div class="calculate__item">
                    <div id="discount-off" class="calculate__item-label">5% OFF</div>
                    <div id="discount-value" class="calculate__item-button off">save $1.00</div>
                </div>
                <div class="calculate__item">
                    <button type="submit" class="calculate__item-button-order">Place an Order</button>
                </div>
            </div>
            <div class="calculate__wrapper" id="calculate__wrapper">
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">100,000</span>
                    <span class="calculate__coin-discount">for $20.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">300,000</span>
                    <span class="calculate__coin-discount">for $60.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">500,000</span>
                    <span class="calculate__coin-discount">for $100.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">1,000,000</span>
                    <span class="calculate__coin-discount">for $200.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">1,500,000</span>
                    <span class="calculate__coin-discount">for $300.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">2,000,000</span>
                    <span class="calculate__coin-discount">for $400.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">3,000,000</span>
                    <span class="calculate__coin-discount">for $600.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">5,000,000</span>
                    <span class="calculate__coin-discount">for $1000.00</span>
                </div>
                <div class="calculate__coin">
                    <img src="/img/vector-down.svg" class="calculate__vector-down" alt="">
                    <img src="/img/vector-up.svg" alt="" class="calculate__vector-up">
                    <img src="/img/gold-coins.png" class="calculate__coin-img" alt="">
                    <span class="calculate__coin-value">8,000,000</span>
                    <span class="calculate__coin-discount">for $1600.00</span>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="wrapper__big">
            <h2 class="advantages__title">Our advantages</h2>
            <div class="advantages__list">
                <div class="advantages__item">
                    <h3 class="advantages__item-title">EASY TO ORDER</h3>
                    <div class="advantages__item-line1"></div>
                    <p class="advantages__item-subtitle">
                        Buying coins is quick and simple from any device. Just a couple of clicks, we do the rest
                    </p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__item-title">SECURE</h3>
                    <div class="advantages__item-line2"></div>
                    <p class="advantages__item-subtitle">
                        Our coin transfer methods are not at risk from the EA. There are no cases of EA sanctions in the history of our business
                    </p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__item-title">LOWEST PRICES</h3>
                    <div class="advantages__item-line3"></div>
                    <p class="advantages__item-subtitle">
                        You get exactly what you pay for. We pay all fees. In addition, you get a great cashback with each purchase
                    </p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__item-title">LIVE SUPPORT</h3>
                    <div class="advantages__item-line4"></div>
                    <p class="advantages__item-subtitle">
                        Our customer service representatives are always ready to serve you and answer your question
                    </p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__item-title">FAST DELIVERY</h3>
                    <div class="advantages__item-line5"></div>
                    <p class="advantages__item-subtitle">
                        At least 90% of orders are completed in less than 15 minutes
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="htbc">
        <div class="wrapper__big">
            <h2 class="htbc__title">How to buy coins</h2>
            <a href="faq.php" class="htbc__subtitle">Frequently asked questions</a>
            <div class="htbc__list">
                <div class="htbc__items">
                    <img src="/img/htbc-circle1.svg" alt="" class="htbc__img">
                    <span class="htbc__item-1">01</span>
                    <p class="htbc__description">Check out our step by step guide “How It Works”</p>
                </div>
                <div class="htbc__line1"></div>
                <div class="htbc__items">
                    <img src="/img/htbc-circle2.svg" alt="" class="htbc__img">
                    <span class="htbc__item-2">02</span>
                    <p class="htbc__description">Follow the instructions</p>
                </div>
                <div class="htbc__line2"></div>
                <div class="htbc__items">
                    <img src="/img/htbc-circle3.svg" alt="" class="htbc__img">
                    <span class="htbc__item-3">03</span>
                    <p class="htbc__description">Get the safest coins on your account</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include "footer.php";
?>