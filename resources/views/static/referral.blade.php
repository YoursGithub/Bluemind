<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Referral</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
    <script src="/assets/js/firebase.js" type="module"></script>
    <link rel="shortcut icon" href="/assets/img/logo-change.png" type="images/x-icon" />
    <!-- css include -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- <link rel="stylesheet" href="/assets/css/main.css"> -->
    <link id="themeStylesheet" rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>

<body>
    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->
    <!-- preloader start -->
    <div class="preloader">
        <div class="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    <div class="body_wrap">
        <!-- header start -->
        @include('static.layouts.navbar')

        <!-- header end -->
        <section id="features" class="feature pos-rel pt-125 mb-170">
            <div class="section-title pb-65">
                <h1 class="title">Our Referral Program</h1>
                <img src="/assets/img/bg/REFERRAL.jpg" alt="Blue Mind Global" class="intro-image mt-40">
                <div class="container">


                </div>



                <div class="row mt-65">
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Complete KYC to Get Your Referral Code </h2>
                                <p class="xb-item--content">Complete KYC to Get Your Referral Code Generated: Verify
                                    your identity and receive a unique referral code.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="/assets/img/feature/fea-01.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Share Your Code and Refer New Clients</h2>
                                <p class="xb-item--content">Share Code & Refer New Clients: Spread the word & invite
                                    others to join our platform using your referral code.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="/assets/img/feature/fea-02.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">New Clients Complete Their KYC</h2>
                                <p class="xb-item--content">New Clients Complete Their KYC: Your referred clients
                                    verify their identities to unlock full access.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="/assets/img/feature/fea-03.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Earn and Withdraw Your Bonus Amount</h2>
                                <p class="xb-item--content">Earn and Withdraw Your Bonus Amount: Enjoy your rewards and
                                    easily withdraw your bonus earnings.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="/assets/img/feature/fea-04.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="feature-shape align-items-center">
                <img src="/assets/img/feature/fea-color-sp.png" alt="">
            </div>
        </section>

        <!-- Space needs to be removed -->
        <section id="roadmap" class="roadmap pt-135">
            <div class="section-title pb-50">
                <h1 class="title">Referral Program</h1>
            </div>
            <div class="investment-referral">
                <h2 class="title">Join Our Investment Referral Program</h2>
                <p class="subtitle1">Unlock a lifetime earning potential by referring investors to our exclusive
                    cryptocurrency trading platform.</p>
                <p class="subtitle1">Referral persons, or employee referrals, play a crucial role in the success and
                    growth of a company.</p>
                <h3 class="highlight">Here’s why they are important:</h3>
                <ul>
                    <li>They typically refer candidates they know well, ensuring a higher level of trust and
                        reliability.</li>
                    <li>Referral persons who refer others often feel more engaged and valued, knowing they are
                        contributing to the company’s growth and success.</li>
                    <li>A strong referral program can enhance the company's reputation, as satisfied referral persons
                        are likely to speak positively about the organization.</li>
                </ul>
                <p>For that reason, we offer attractive incentives for successful referrals to encourage participation.
                    To encourage the referral program, we have attractive incentive plans for them. You will earn a 10%
                    incentive of the profit from every trade made by your referred investor for the lifetime of their
                    investment. Referral incentives are subject to verification and may be withheld or revoked if
                    fraudulent activity is detected.</p>
            </div>
            <style>
                .introo-image {
                    width: 100%;
                    height: 400px;
                    object-fit: cover;
                    object-position: center;
                    margin-bottom: 30px;
                }

                .investment-referral {
                    padding: 20px;
                    margin: auto;
                    max-width: 1200px;
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #ffffff9e;
                }

                .investment-referral .title {
                    font-size: 2.5em;
                    margin-bottom: 20px;
                    text-align: left;
                    color: #02ACF0;
                }

                .investment-referral .subtitle1 {
                    font-size: 1.2em;
                    margin-bottom: 15px;
                    text-align: left;
                    color: #ffffff9e;
                }

                .investment-referral .highlight {
                    font-size: 2em;
                    margin-top: 30px;
                    margin-bottom: 20px;
                    color: #02ACF0;
                    text-align: left;
                }

                .investment-referral p {
                    font-size: 1.2em;
                    margin-bottom: 15px;
                }

                .investment-referral ul {
                    list-style-type: disc;
                    padding-left: 40px;
                    margin-bottom: 20px;
                }

                .investment-referral ul li {
                    font-size: 1.2em;
                    margin-bottom: 10px;
                }

                @media (max-width: 1200px) {
                    .investment-referral {
                        max-width: 1000px;
                    }
                }

                @media (max-width: 600px) {
                    .investment-referral {
                        padding: 10px;
                        max-width: 100%;
                    }

                    .investment-referral .title {
                        font-size: 1.8em;
                    }

                    .investment-referral .subtitle {
                        font-size: 1em;
                    }

                    .investment-referral .highlight {
                        font-size: 1.5em;
                    }

                    .investment-referral p,
                    .investment-referral ul li {
                        font-size: 0.9em;
                    }
                }
            </style>


            <style>
                .investment-section {
                    padding: 20px;
                    margin: auto;
                    max-width: 1200px;
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                }

                .investment-section h2 {
                    font-size: 2em;
                    margin-bottom: 10px;
                    text-align: center;
                }

                .investment-section h3 {
                    font-size: 1.5em;
                    margin-top: 20px;
                }

                .investment-section p {
                    font-size: 1em;
                    margin-bottom: 10px;
                }

                .investment-section ul {
                    list-style-type: none;
                    padding: 0;
                }

                .investment-section ul li {
                    font-size: 1em;
                    margin-bottom: 10px;
                }

                @media (max-width: 600px) {
                    .investment-section {
                        padding: 10px;
                    }

                    .investment-section h2 {
                        font-size: 1.5em;
                    }

                    .investment-section h3 {
                        font-size: 1.2em;
                    }

                    .investment-section p,
                    .investment-section ul li {
                        font-size: 0.9em;
                    }
                }
            </style>

        </section>

        <body>

            </main>
    </div>
</body>


<!-- team & faq section start -->

<!-- team & faq section end -->
</main>
<!-- main area end  -->
<!-- footer strt -->
@include('static.layouts.footer')

<!-- footer end -->
</div>
<!-- jquery include -->
<script src="/assets/js/jquery-3.7.1.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/swiper.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/odometer.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/easing.min.js"></script>
<script src="/assets/js/scrollspy.js"></script>
<script src="/assets/js/countdown.js"></script>
<script src="/assets/js/parallax-scroll.js"></script>
<script src="/assets/js/main.js"></script>
<!-- light mode -->
<script src="/assets/js/theme.js"></script>


</body>

</html>
