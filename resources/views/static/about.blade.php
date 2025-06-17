<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
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

        <!-- main area start -->
        <section id="roadmap" class="roadmap pt-135">
            <div class="section-title pb-50">
                <h1 class="title">About </h1>
                <img src="{{ $globalData->about?->image }}" class="mt-30" alt="founder">
                <h1 class="sub-heading">Mr Santhosh M </br>Founder & CEO</h1>
            </div>
            <div class="intro-section">
                <h1 class="intro-title">Welcome to BLUEMIND GLOBAL PVT. LTD.</h1>
                <div class="intro-text">
                    <h2 class="sub-heading">Welcome</h2>
                    <p>Where innovation meets opportunity in the dynamic world of cryptocurrency investments. Founded in
                        2019, we are a pioneering firm dedicated to harnessing the potential of blockchain technology
                        and
                        digital assets to deliver exceptional investment returns for our clients.</p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Understanding the Market</h2>
                    <p>At BLUEMIND GLOBAL PVT. LTD., we understand that the cryptocurrency market is not just a trend
                        but a
                        transformative force reshaping global finance. With deep expertise in blockchain technology and
                        a
                        proven track record in investment management, our team navigates this complex landscape with
                        precision and insight.</p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Our Mission and Vision</h2>
                    <p>Our mission is to empower investors by providing them with cutting-edge tools, in-depth market
                        analysis, and strategic insights that maximize their investment potential in the cryptocurrency
                        space. We envision a future where digital assets and blockchain technology are integral to
                        global
                        finance, offering unparalleled opportunities for growth and innovation.</p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Expertise and Commitment</h2>
                    <p>Our team of seasoned professionals is dedicated to staying at the forefront of technological
                        advancements and market trends. We combine rigorous research, strategic planning, and advanced
                        analytics to identify and capitalize on the most promising investment opportunities. Our
                        commitment
                        to excellence and client satisfaction drives everything we do.</p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Innovative Solutions</h2>
                    <p>We pride ourselves on developing innovative solutions that meet the diverse needs of our clients.
                        From portfolio management and market analysis to educational resources and customer support, we
                        provide a comprehensive suite of services designed to help our clients succeed in the fast-paced
                        world of cryptocurrency investments.</p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Community and Collaboration</h2>
                    <p>At Blue Mind Global, we believe in fostering a community of like-minded investors who are
                        passionate
                        about the potential of blockchain technology. We encourage collaboration, knowledge sharing, and
                        continuous learning to ensure our clients are well-equipped to make informed investment
                        decisions.
                    </p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Global Reach</h2>
                    <p>With a global perspective and a local presence, we are uniquely positioned to understand and
                        navigate
                        the intricacies of the cryptocurrency markets around the world. Our global reach allows us to
                        offer
                        our clients a diverse range of investment opportunities and a deep understanding of market
                        dynamics.
                    </p>
                </div>
                <div class="intro-text">
                    <h2 class="sub-heading">Join Us on Our Journey</h2>
                    <p>As we continue to grow and innovate, we invite you to join us on our journey to transform the
                        world
                        of finance through the power of blockchain technology and digital assets. Together, we can
                        unlock
                        new opportunities and achieve exceptional investment returns.</p>
                    <p>Welcome to Blue Mind Global, where innovation meets opportunity, and where your investment
                        journey
                        begins.</p>
                </div>


                <div class="intro-text">
                    <h2 class="sub-heading">Referral Bonus</h2>
                    <p>
                        Any individual who successfully refers a candidate, client, or business partner to the
                        organization shall be entitled to a 10% referral bonus,
                        calculated on the eligible transaction or revenue generated through the referral, subject to
                        verification and compliance with company policies.
                    </p>
                </div>

                <div class="intro-text">
                    <h2 class="sub-heading"> Nominee Clause</h2>

                    <p>

                        In the event of the referrer’s demise, any unpaid or future eligible referral bonuses shall be
                        transferred to the nominated beneficiary as designated by the referrer in official company
                        records. If no nominee has been designated,
                        such amounts may be settled as per applicable legal succession protocols.
                    </p>
                </div>



            </div>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    /* background-color: #f4f4f4; */
                    /* color: #333; */
                }

                .section-title {
                    text-align: center;
                    margin-bottom: 50px;
                }

                .title {
                    font-size: 2.5em;
                    color: #fff;
                }

                .intro-image {
                    width: 100%;
                    height: 500px;
                    object-fit: cover;
                    object-position: center;
                    padding-left: 5%;
                    padding-right: 5%;
                }

                .intro-section {
                    padding: 40px;
                    margin: auto;
                    max-width: 1200px;
                    /* background-color: #1a1a1a; */
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    color: #fff;
                }

                .intro-title {
                    font-size: 2.5em;
                    color: #02ACF0;
                    text-align: center;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    margin-top: -90px;
                }

                .sub-heading {
                    font-size: 1.5em;
                    color: #02ACF0;
                    margin-top: 20px;
                    margin-bottom: 10px;
                }

                .intro-text {
                    font-size: 1.2em;
                    color: #ffffff9e;
                    margin-bottom: 20px;
                    text-align: justify;
                }

                @media (max-width: 1200px) {
                    .intro-section {
                        max-width: 1000px;
                    }
                }

                @media (max-width: 600px) {
                    .intro-section {
                        padding: 20px;
                        max-width: 100%;
                    }

                    .intro-title {
                        font-size: 1.8em;
                    }

                    .intro-text {
                        font-size: 1em;
                    }

                    .sub-heading {
                        font-size: 1.2em;
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
