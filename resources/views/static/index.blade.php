<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description"
        content="Blue Mind Global offers cutting-edge solutions in cryptocurrency, investment strategies, and financial management. Explore our services and stay ahead with our expert insights and advanced technologies.">
    <meta name="keywords"
        content="Blue Mind Global, cryptocurrency investments, blockchain technology, digital assets, financial management, investment strategies, trading software, crypto solutions, asset management, portfolio management, investment platform, trading trends, crypto trading, fintech solutions, financial technology, financial consulting, blockchain technology, investment advice, wealth management, South Karnataka, India, global finance, tech innovations, financial planning, investment opportunities, innovative trading solutions, copy trading platform, market analysis, strategic insights, investment potential, global markets, financial returns, risk management, investment policies, trading expertise, professional trading, market dynamics, digital finance, community engagement, educational resources, interactive workshops, online training, offline training, charity initiatives, non-profit partnerships, scholarship programs, educational grants, employment opportunities, recruitment drive, job creation, skills enhancement, economic growth, crypto trading education, advanced trading strategies, market analysis workshops, tech-driven financial solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blue Mind Global</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
    <script src="/assets/js/firebase.js" type="module"></script>
    <link rel="shortcut icon" href="/assets/img/logo-change.png" type="image/x-icon" />
    <!-- CSS include -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- <link rel="stylesheet" href="/assets/css/main.css"> -->
    <link id="themeStylesheet" rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- Social Media and Contact Information -->
    <meta property="og:title" content="Blue Mind Global">
    <meta property="og:description"
        content="Explore Blue Mind Global's cutting-edge solutions in cryptocurrency, investment strategies, and financial management.">
    <meta property="og:image" content="assets/img/logo.png">
    <meta property="og:url" content="https://www.bluemindglobal.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blue Mind Global">
    <meta name="twitter:description"
        content="Explore Blue Mind Global's solutions in cryptocurrency, investment strategies, and financial management.">
    <meta name="twitter:image" content="assets/img/logo.png">

    <!-- Contact Information -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.bluemindglobal.com/rss">
    <meta name="contact-email" content="Bluemindglobal@gmail.com">
    <meta name="contact-phone" content="+(91) 8182-467450">
    <link rel="canonical" href="https://www.bluemindglobal.com">



    <!-- Structured Data for Knowledge Graph -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Blue Mind Global",
        "url": "https://www.bluemindglobal.com",
        "logo": "https://www.bluemindglobal.com/assets/img/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+(91) 8182-467450",
            "contactType": "customer service",
            "email": "Bluemindglobal@gmail.com"
        },
        "sameAs": [
            "https://www.instagram.com/bluemind_global/",
            "https://x.com/BluemindGlobal",
            "https://www.facebook.com/share/S4r9LyM8ZFTuD3ym/?mibextid=qi2Omg"
        ]
    }
    </script>
</head>


<body>

    <div id="overlay"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 999;">
    </div>

    <div id="popup"
        style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 600px; width: 90%; z-index: 1000;">

        <div id="closeButton"
            style="position: absolute; top: 10px; right: 10px; background-color: rgba(70, 90, 120, 0.8); width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 1001;">
            <span style="color: white; font-size: 20px;">✕</span>
        </div>

        <img src="{{ $globalData->home?->image }}" alt="Promotion"
            style="width: 100%; height: auto; display: block; border-radius: 8px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);">
    </div>




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
        <!-- main area start  -->
        <main>
            <!-- hero section start  -->
            <section class="hero-section">
                <div class="video-background">
                    <video class="video-element" autoplay muted loop src="/assets/img/bg/bg_video.mp4"></video>
                </div>
                <div class="content">
                    <h1 class="title">Crypto</h1>
                    <p class="subtitle">Investment Solution</p>
                    <p class="description"> <span class="highlight">0%</span> Risk with <span
                            class="highlight">100%</span> Security </br> Maximizing Your Returns Safely</p>
                    <div class="buttons">
                        <a href="/register" class="btn-primary">Sign Up</a>
                        <a href="/register" class="btn-secondary">Download App</a>
                    </div>
                </div>

                <div class="cards">
                    <div class="card">
                        <img src="/assets/img/shape/1.svg" alt="">
                        <p class="card-title">Referal Bonus  10% Lifetime</p>
                        <a href="/register" class="btn-primary">Sign Up For Reward</a>
                    </div>
                    <div class="card">
                        <img src="/assets/img/shape/3.svg" alt="">
                        <p class="card-subtitle"><span class="highlight">60%</span> Profit on Trading</p>
                    </div>
                    <div class="card">
                        <img src="/assets/img/shape/2.svg" alt="">
                        <p class="card-title">Welcome Kit</p>
                    </div>
                </div>
            </section>
            <style>
                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                    background-color: #03030D;
                    color: #FFFFFF;
                }

                .hero-section {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: start;

                    box-sizing: border-box;
                    position: relative;
                }

                .video-background {
                    width: 100%;
                    z-index: 0;
                }

                .video-element {
                    object-fit: cover;
                    width: 100%;
                    height: 100%;
                }

                .content {
                    max-width: 100%;
                    position: relative;
                    text-align: left;
                    padding: 20px;
                }

                .title {
                    font-size: 1.8rem;
                    margin-bottom: 0.25rem;
                    font-weight: bold;

                }

                .subtitle {
                    margin-bottom: 2rem;
                    font-size: 1.5rem;
                    font-weight: 300;


                }

                .description {
                    margin-bottom: 3rem;
                    color: #77787C;
                    font-size: 1.5rem;

                }

                .highlight {
                    font-weight: bold;
                    color: #FFFFFF;
                }

                .buttons {
                    display: flex;
                    justify-content: center;
                    width: 100%;


                }

                .btn-primary {
                    display: inline-flex;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    background-color: #4381FE;
                    border: none;
                    padding: 12px 24px;
                    color: #FFFFFF;
                    font-size: 1rem;
                    font-weight: 600;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .btn-primary:hover {
                    background-color: #353ee2;
                }

                .btn-secondary {
                    display: inline-flex;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    background-color: transparent;
                    border: 2px solid #FFFFFF;
                    padding: 12px 24px;
                    color: #FFFFFF;
                    font-size: 1rem;
                    font-weight: 600;
                    border-radius: 4px;
                    cursor: pointer;
                    margin-left: 16px;
                }

                .btn-secondary:hover {
                    background-color: #0C101B;
                }

                .cards {
                    display: grid;
                    gap: 8px;
                    width: 100%;
                    padding: 4px;
                    padding-left: 30px;
                    padding-right: 30px;

                    margin-top: 3rem;
                    /* z-index: 10; */
                    box-sizing: border-box;
                }

                .card {
                    background-color: #0C101B;
                    border-radius: 8px;
                    padding: 20px;
                    display: flex;
                    flex-direction: column;
                    align-items: start;
                    justify-content: start;
                }

                .card-title {
                    font-size: 1.5rem;
                    margin: 1.25rem 0;
                    font-weight: 600;
                    color: white;
                }

                .card-subtitle {
                    font-size: 1.5rem;
                    margin: 1.25rem 0;
                    color: #ffffff;
                    font-weight: 400;
                }


                @media (min-width: 768px) {
                    .content {
                        max-width: 50%;
                        padding-left: 100px;
                        padding-right: 100px;
                    }

                    .title {
                        font-size: 3rem;
                        margin-top: 80px;
                    }

                    .subtitle {
                        font-size: 1.875rem;
                    }

                    .description {
                        font-size: 1.875rem;
                    }

                    .buttons {
                        flex-direction: row;
                    }

                    .btn-primary,
                    .btn-secondary {
                        width: 100%;
                    }

                    .cards {
                        padding-left: 100px;
                        padding-right: 100px;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));

                    }

                    .video-background {
                        width: 100%;
                        height: 100vh;
                        position: absolute;
                        top: 0;
                        left: 0;
                        z-index: 0;
                    }
                }
            </style>

            <div class="hero__btn btns pt-50 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="350ms">
                <a class="them-btn" href="/register">
                    <span class="btn_label" data-text="Get Started">Get Started</span>
                    <span class="btn_icon">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                fill="white"></path>
                        </svg>
                    </span>
                </a>

            </div>
            <!-- hero section end  -->
            <!-- partners section start  -->
            <section class="partners z-3 pt-135">
                <div class="patners-title text-center">

                    <span><img src="/assets/img/partner/partner_07.png" alt=""> our trading platforms <img
                            src="/assets/img/partner/partner_08.png" alt=""></span>
                </div>
                <div class="partner-active partner-slider ul_li">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="/assets/img/partner/Binance.png" alt="">
                                </div>
                                <span>Binance</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="/assets/img/partner/coindcx.png" alt="">
                                </div>
                                <span>CoinDCX</span>
                            </div>
                        </div>
                 
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="/assets/img/partner/kucoin.png" alt="">
                                </div>
                                <span>Kucoin</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="xb-item--brand">
                                <div class="xb-item--brand_logo">
                                    <img src="/assets/img/partner/bybit.png" alt="">
                                </div>
                                <span>Bybit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            @empty(!$globalData->team->toArray())

                <section class="partners z-3 pt-135">
                    <div class="patners-title text-center">

                        <span><img src="/assets/img/partner/partner_07.png" alt=""> Our Team Members <img
                                src="/assets/img/partner/partner_08.png" alt=""></span>
                    </div>
                    <div class="partner-active partner-slider ul_li" style="overflow-x: auto;">
        <div class="swiper-wrapper"
        style="display: flex; gap: 20px; padding: 0 10px 20px 10px; flex-wrap: nowrap;">
   
            @foreach ($globalData->team as $team)
                @php
                    $name = $team?->name;
                    $designation = $team?->designation;
                    $image = $team?->image;
                @endphp

                <div class="swiper-slide"
                    style="flex: 0 0 auto; width: 85vw; max-width: 280px; min-width: 240px; height: 250px; border-radius: 12px; overflow: hidden; font-family: Arial, sans-serif; background: linear-gradient(135deg, #141b31 0%, #0a0e1a 100%); box-shadow: 0 8px 24px rgba(0,0,0,0.3); position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.4)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.3)';">

                    <div class="partner-logo"
     style="width: 100px; height: 100px; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 12px; background-color: #1a223a;">
    <img src="{{ $image }}" alt="{{ $name }} Logo"
         style="width: 100%; height: 100%; object-fit: cover;">
</div>


                    <div class="partner-name"
                        style="font-size: 18px; font-weight: bold; color: #ffffff; margin: 10px 0; text-align: center;">
                        {{ $name }}
                    </div>

                    <div class="partner-info"
                        style="font-size: 12px; color: #8a8d98; text-align: center; line-height: 1.4; width: 85%; margin-bottom: 10px;">
                        <div style="margin-bottom: 5px; color: #00b4ff;">
                            {{ $designation }}
                        </div>
                    </div>

                    <div
                        style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #00b4ff, #2b6aff); opacity: 0.8;">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
                </section>

            @endempty



            @empty(!$globalData->branch->toArray())
            
            <section class="partners z-3 pt-135">
                <div class="patners-title text-center">
                    <span>
                        <img src="/assets/img/partner/partner_07.png" alt="">
                        Our Branches
                        <img src="/assets/img/partner/partner_08.png" alt="">
                    </span>
                </div>
            
                <div class="partner-active partner-slider ul_li" style="overflow-x: auto;">
                    <div class="swiper-wrapper"
                         style="display: flex; gap: 20px; padding: 0 10px 20px 10px; flex-wrap: nowrap;">
            
                        @foreach ($globalData->branch as $branch)
                            @php
                                $name = $branch?->name;
                                $designation = $branch?->designation;
                                $address = $branch?->address;
                                $image = $branch?->image;
                            @endphp
            
                            <div class="swiper-slide"
                                 style="flex: 0 0 auto; width: 85vw; max-width: 280px; min-width: 240px; height: 250px; border-radius: 12px; overflow: hidden; font-family: Arial, sans-serif; background: linear-gradient(135deg, #141b31 0%, #0a0e1a 100%); box-shadow: 0 8px 24px rgba(0,0,0,0.3); position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 28px rgba(0,0,0,0.4)';"
                                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.3)';">
            
                                <div class="partner-logo"
                                     style="width: 100%; height: 120px; display: flex; justify-content: center; align-items: center; margin-bottom: 5px;">
                                    <img src="{{ $image }}" alt="{{ $name }} Logo"
                                         style="max-width: 100px; max-height: 100px; object-fit: contain;">
                                </div>
            
                                <div class="partner-name"
                                     style="font-size: 18px; font-weight: bold; color: #ffffff; margin: 10px 0; text-align: center;">
                                    {{ $name }}
                                </div>
            
                                <div class="partner-info"
                                     style="font-size: 12px; color: #8a8d98; text-align: center; line-height: 1.4; width: 85%; margin-bottom: 10px;">
                                    <div style="margin-bottom: 5px; color: #00b4ff;">
                                        {{ $designation }}
                                    </div>
                                    <div>{{ $address }}</div>
                                </div>
            
                                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #00b4ff, #2b6aff); opacity: 0.8;">
                                </div>
                            </div>
                        @endforeach
            
                    </div>
                </div>
            </section>

            @endempty


            <style>
                .section-style {
                    display: flex;
                    margin-top: 100px;
                    margin-bottom: 100px;
                    justify-items: center;
                    width: 100%;
                }

                .div-style {
                    width: 50%;
                    padding-top: 10%;
                    padding-left: 15%;
                    padding-bottom: 10%;
                    padding-right: 5%;
                }

                .img-style {
                    animation-duration: .7s;
                    animation-delay: 200ms;
                }

                .div-flex-style {
                    display: flex;
                    flex-direction: column;
                    justify-items: start;
                    width: 50%;
                    padding-right: 15%;
                    padding-top: 15%;
                    padding-left: 5%;
                }

                .p-blue-style {
                    font-size: 1.2rem;
                    color: #228FCA;
                }

                .h1-white-style {
                    font-size: 55px;
                    color: white;
                    font-weight: 600;
                    margin-top: 2%;
                    margin-bottom: 5%;
                }

                .p-gray-style {
                    font-size: 20px;
                    color: #7F848F;
                }

                .div-flex-margin-style {
                    display: flex;
                    margin-top: 3%;
                }

                .div-margin-right-style {
                    margin-right: 5%;
                }

                .h1-blue-style {
                    font-weight: 600;
                    color: #228FCA;
                }

                .p-white-style {
                    color: white;
                    font-size: 1rem;
                }

                /* Existing CSS */
                /* ... */
                /* Responsive CSS */
                @media (max-width: 768px) {
                    .section-style {
                        flex-direction: column;
                        align-items: center;
                    }

                    .div-style,
                    .div-flex-style {
                        width: 100%;
                        padding: 5%;
                    }
                }
            </style>
            <section id="about-section" class="about pos-rel">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-wrap pt-140 wow fadeInLeft" data-wow-duration=".7s">
                                <h2 class="xb-item--title">What is BLUEMIND GLOBAL PVT. LTD.</h2>
                                <p class="xb-item--content">
                                    Welcome to BLUEMIND GLOBAL, where innovation meets opportunity in the dynamic world
                                    of cryptocurrency investments. Founded in 2019, we are a pioneering firm dedicated
                                    to harnessing the potential of blockchain technology and digital assets to deliver
                                    exceptional investment returns for our clients.
                                </p>
                                <h3 class="xb-item--title xb-item--title1">Ingenious Methodologies</h3>
                                <p class="xb-item--content xb-item--content1">
                                    <br> At BLUEMIND GLOBAL PVT. LTD., we understand that the cryptocurrency market is not just a
                                    trend but a transformative force reshaping global finance. With deep expertise in
                                    blockchain technology and a proven track record in investment management, our team
                                    navigates this complex landscape with precision and insight.

                                </p>
                                <div class="xb-item--list">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z"
                                                fill="white" />
                                            <path
                                                d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z"
                                                fill="#080B18" />
                                        </svg> Day trading</span>

                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z"
                                                fill="white" />
                                            <path
                                                d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z"
                                                fill="#080B18" />
                                        </svg> Spot trading
                                    </span>

                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z"
                                                fill="white" />
                                            <path
                                                d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z"
                                                fill="#080B18" />
                                        </svg>Futures trading</span>

                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z"
                                                fill="white" />
                                            <path
                                                d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z"
                                                fill="#080B18" />
                                        </svg> Long-term investment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-img bg_img phone-hide">
                    <img class="wow fadeInRight" data-wow-duration=".7s" data-wow-delay="200ms"
                        src="/assets/img/about/Group 373.png" alt="">
                </div>

                <style>
                    /* Hide the image on screens smaller than 600px (phone screens) */
                    @media (max-width: 600px) {
                        .phone-hide {
                            display: none;
                        }
                    }
                </style>

            </section>
            <!-- about section end-->
            <!-- process start -->
            <section class="process z-3 pb-150 pt-35">
                <div class="container pt-100">
                    <div class="row justify-content-center mt-none-130">
                        <div class="col-xl-4 col-lg-6 process-col mt-130">
                            <div class="xb-process pos-rel">
                                <div class="xb-item--icon">
                                    <img src="/assets/img/icon/process_icon1.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--title">register KYC</h2>
                                    <p class="xb-item--content">Get your KYC, Nominee and 4 Factor autorisation done.
                                    </p>
                                </div>
                                <div class="xb-item--shape">
                                    <span>
                                        <svg width="410" height="274" viewBox="0 0 410 274" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                            <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z"
                                                fill="url(#p_shape1)" />
                                            <defs>
                                                <radialGradient id="p_shape1" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                    <stop offset="0" stop-color="#EBF7FD" />
                                                    <stop offset="0.09" stop-color="#9162FF" />
                                                    <stop offset="0.26792" stop-color="#1C30A8" />
                                                    <stop offset="0.474094" stop-color="#080B18" />
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 process-col mt-130">
                            <div class="xb-process pos-rel">
                                <div class="xb-item--icon">
                                    <img src="/assets/img/icon/process_icon2.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--title">Invest</h2>
                                    <p class="xb-item--content">In your won exchange account.</p>
                                </div>
                                <div class="xb-item--shape">
                                    <span>
                                        <svg width="410" height="274" viewBox="0 0 410 274" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                            <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z"
                                                fill="url(#p_shape2)" />
                                            <defs>
                                                <radialGradient id="p_shape2" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                    <stop offset="0" stop-color="#EBF7FD" />
                                                    <stop offset="0.09" stop-color="#9162FF" />
                                                    <stop offset="0.26792" stop-color="#1C30A8" />
                                                    <stop offset="0.474094" stop-color="#080B18" />
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 process-col mt-130">
                            <div class="xb-process pos-rel">
                                <div class="xb-item--icon">
                                    <img src="/assets/img/icon/process_icon3.svg" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--title">We Trade</h2>
                                    <p class="xb-item--content">We trade on your behalf.
                                    </p>
                                </div>
                                <div class="xb-item--shape">
                                    <span>
                                        <svg width="410" height="274" viewBox="0 0 410 274" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                            <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z"
                                                fill="url(#p_shape3)" />
                                            <defs>
                                                <radialGradient id="p_shape3" cx="0" cy="0" r="1"
                                                    gradientUnits="userSpaceOnUse"
                                                    gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                    <stop offset="0" stop-color="#EBF7FD" />
                                                    <stop offset="0.09" stop-color="#9162FF" />
                                                    <stop offset="0.26792" stop-color="#1C30A8" />
                                                    <stop offset="0.474094" stop-color="#080B18" />
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- process end -->

            <!-- token section start  -->
            <!-- Removed 10/7/2024 -->
            <!-- token section end -->

            <body>
                <!-- edited 20 may with sir added html2 in main html section  -->
                <!-- partners section end  -->
                <!-- feature section start -->
                <section class="feature z-1 pos-rel pt-110">
                    <div class="container">
                        <div class="section-title pb-55">
                            <h1 class="title">Roadmap</h1>
                        </div>
                        <div class="row mt-none-30">
                            <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                                <a href="/roadmap" class="xb-feature-link">
                                    <div class="xb-feature pos-rel">
                                        <div class="xb-item--holder text-center">
                                            <div class="xb-item--img">
                                                <img src="/assets/img/feature/1.png" alt="">
                                            </div>
                                            <h2 class="xb-item--title">Copy Trading Platform</h2>
                                            <p class="xb-item--content">Launch a user-friendly copy trading platform
                                                for
                                                all traders, enhancing experience and profitability.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="hover-dialogue">Revolutionize trading with our intuitive copy trading
                                    platform, empowering users with advanced strategies and real-time insights for
                                    enhanced profitability and confidence.</div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                                <a href="/roadmap" class="xb-feature-link">
                                    <div class="xb-feature top-border pos-rel">
                                        <div class="xb-item--holder text-center">
                                            <div class="xb-item--img">
                                                <img src="/assets/img/feature/2.png" alt="">
                                            </div>
                                            <h2 class="xb-item--title">Charity Initiatives</h2>
                                            <p class="xb-item--content">Makes a significant impact through community
                                                support, disaster relief, and ongoing program assessments.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="hover-dialogue">Empower communities through impactful charity initiatives,
                                    disaster relief, partnerships with non-profits, fundraising events, and educational
                                    support for future leaders.</div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                                <a href="/roadmap" class="xb-feature-link">
                                    <div class="xb-feature pos-rel">
                                        <div class="xb-item--holder text-center">
                                            <div class="xb-item--img">
                                                <img src="/assets/img/feature/3.png" alt="">
                                            </div>
                                            <h2 class="xb-item--title">Employment Opportunities</h2>
                                            <p class="xb-item--content">Create jobs and boost economic growth through
                                                targeted recruitment, training, and development programs.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="hover-dialogue">Create jobs through targeted growth initiatives, recruit
                                    talent, offer training, foster career development, and adapt strategies for
                                    sustained expansion.</div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                                <a href="/roadmap" class="xb-feature-link">
                                    <div class="xb-feature top-border pos-rel">
                                        <div class="xb-item--holder text-center">
                                            <div class="xb-item--img">
                                                <img src="/assets/img/feature/4.png" alt="">
                                            </div>
                                            <h2 class="xb-item--title">Education Program</h2>
                                            <p class="xb-item--content">Our Crypto Trading Education offers courses &
                                                workshops on crypto basics, trading strategies, & market analysis.</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="hover-dialogue">Our Crypto Trading Education program offers online courses
                                    from basics to advanced trading strategies, with workshops on current crypto trends.
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        /* Container for feature items */
                        .feature-col {
                            position: relative;
                            /* Needed for positioning of hover-dialogue */
                        }

                        /* Hover dialogue styling */
                        /* Hover dialogue styling */
                        .hover-dialogue {
                            display: none;
                            /* Initially hidden */
                            position: absolute;
                            background-color: #080B18;
                            /* White background */
                            border: 2px solid #007bff;
                            /* Blue border with 2px thickness */
                            border-radius: 10px;
                            /* Rounded corners */
                            padding: 10px;
                            /* Adjusted padding for smaller content area */
                            width: 250px;
                            /* Adjusted width */
                            max-height: 150px;
                            /* Fixed height */
                            text-align: justify;
                            /* Justify text */
                            color: #fff;
                            /* Grey text color */
                            z-index: 1000;
                            /* Ensure it appears on top */
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                            /* Subtle shadow for better visibility */
                            overflow: hidden;
                            /* Hide overflow content */
                            white-space: normal;
                            /* Allow text to wrap */
                            line-height: 1.4;
                            /* Decreased line height */
                            font-size: 14px;
                            /* Smaller text size */
                            transition: opacity 0.3s ease, visibility 0.3s ease;
                            /* Smooth transition */
                        }


                        /* Display the dialogue box on hover */
                        .feature-col:hover .hover-dialogue {
                            display: block;
                        }

                        /* Ensure the hover-dialogue doesn't push other elements */
                        .feature-col:hover {
                            z-index: 1100;
                            /* Ensure hover content is above other content */
                        }
                    </style>
                </section>


                <!-- feature section end -->
                <!-- feature crypto start -->
                <section id="features" class="feature pos-rel z-1 mt-130">
                    <div class="feature-crypto-wrap pt-125 pb-120">
                        <div class="fea-shape">
                            <img src="/assets/img/feature/fea-shape-01.png" alt="">
                            <img src="/assets/img/feature/fea-shape-01.png" alt="">
                        </div>
                        <div class="container">
                            <div class="section-title pb-55 text-center">
                                <h1 class="title">This is the best crypto based Trading investment platform & we operate in stages
                                </h1>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-lg-7 ">
                                    <div class="feature-left-inner">
                                        <div class="row">
                                            <div class="col-lg-12 mb-30">
                                                <div class="xb-freatue-crypto bg_img ul_li "
                                                    data-background="assets/img/feature/feature-col-bg.svg">
                                                    <div class="xb-item--holder">
                                                        <h2 class="xb-item--title">Security</h2>
                                                        <p class="xb-item--content"> We are a secure investment
                                                            platform
                                                            that allows you to invest in the cryptocurrency market and
                                                            earn profits from trading. Our platform is designed to be
                                                            user-friendly and easy to navigate with high security. </p>
                                                        </p>
                                                    </div>
                                                    <div class="xb-item--img col-img">
                                                        <img src="/assets/img/feature/Secure.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <div class="xb-freatue-crypto bg_img ul_li"
                                                    data-background="assets/img/feature/feature-col-bg1.svg">
                                                    <div class="xb-item--holder">
                                                        <h2 class="xb-item--title">Initial Investment & Timeframe</h2>
                                                        <p class="xb-item--content"> Invest by starting with ₹1,000
                                                            for a three-year term. Our experts will handle trading to
                                                            ensure profitable outcomes. You will earn 60% of the profits
                                                            from every successful trade terms and conditions apply. </p>
                                                    </div>
                                                    <div class="xb-item--img">
                                                        <img src="/assets/img/feature/time.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 mb-30 mt-30">
                                    <div class="feature-right-inner">
                                        <div class="xb-crypto-right bg_img ul_li"
                                            data-background="assets/img/feature/feature-col-bg2.svg">
                                            <div class="xb-item--img">
                                                <div class="video-wrapper">
                                                    <img id="signupAltImage" src="/assets/signup/signup_alt.png"
                                                        alt="Signup Placeholder" class="placeholder-image">
                                                    <dotlottie-player id="signupAnimation"
                                                        src="/assets/signup/Signup_1.json" background="transparent"
                                                        speed="1" loop autoplay
                                                        style="display: none;"></dotlottie-player>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const lottiePlayer = document.getElementById("signupAnimation");
                                        const placeholderImage = document.getElementById("signupAltImage");

                                        // Event listener for when the Lottie animation is loaded and ready
                                        lottiePlayer.addEventListener('ready', () => {
                                            placeholderImage.style.display = 'none';
                                            lottiePlayer.style.display = 'block';
                                        });

                                        // Trigger the Lottie player to load the animation
                                        lottiePlayer.load();
                                    });
                                </script>

                            </div>

                        </div>
                        <div class="feature-counter-wrap pt-130">
                            <div class="container">
                                <div class="row mt-none-30">
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="xb-feature-inner">
                                            <div class="xb-feature-item">
                                                <h2 class="title"><span class="xbo"
                                                        data-count="{{ $globalData->home->happy_clients ?? 0 }}">00</span><span
                                                        class="suffix">+</span></h2>
                                                <span class="sub-title">Happy Clients</span>
                                            </div>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="xb-feature-inner">
                                            <div class="xb-feature-item">
                                                <h2 class="title"><span class="xbo"
                                                        data-count="99">00</span><span class="suffix">%</span></h2>
                                                <span class="sub-title">Customer Saatisfaction</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="xb-feature-inner">
                                            <div class="xb-feature-item">
                                                <h2 class="title"><span class="xbo"
                                                        data-count="{{ $globalData->home->successful_projects ?? 0 }}">00</span><span
                                                        class="suffix">+</span></h2>
                                                <span class="sub-title">Sucessful Project</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-30">
                                        <div class="xb-feature-item">
                                            <h2 class="title"><span class="xbo" data-count="100">00</span><span
                                                    class="suffix">%</span></h2>
                                            <span class="sub-title">Security Certification</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- feature crypto end -->
                <!-- currrency section start -->
                <!-- Live API Key section | Live API Key section | Live API Key section | Live API Key section  -->
                <section class="currency-section">
                    <div class="container">
                        <h1 class="section-title">Today's Cryptocurrecy Prices</h1>
                        <div class="table-wrapper">
                            <table id="crypto-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price (USDT)</th>
                                        <th>Volume (24h)</th>
                                        <th>Market Cap (USDT)</th>
                                        <th>Circulating Supply</th>
                                    </tr>
                                </thead>
                                <tbody id="crypto-table-body">
                                    <!-- Table rows will be populated dynamically -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Ensure that the script type is set to module -->
                    <script type="module" src="/assets/js/script.js"></script>
                    <div class="currency-shape">
                        <img src="/assets/img/currency/currency-shape.png" alt="Currency Shape">
                        <img src="/assets/img/currency/currency-shape.png" alt="Currency Shape">
                    </div>
                    <style>
                        .currency-section {
                            background-color: #0D0B33;
                            padding: 60px 0;
                        }

                        .currency-section .container {
                            max-width: 1200px;
                            margin: auto;
                            background: #000;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }

                        .currency-section h1.section-title {
                            text-align: center;
                            margin-bottom: 20px;
                            color: #fff;
                        }

                        .currency-section .table-wrapper {
                            overflow-x: auto;
                            color: #02ACF0;
                        }

                        .currency-section table {
                            width: 100%;
                            border-collapse: collapse;
                            margin-bottom: 20px;
                        }

                        .currency-section th,
                        .currency-section td {
                            padding: 10px;
                            text-align: left;
                            border-bottom: 1px solid #000;
                        }

                        /* Column header styles */
                        .currency-section th {
                            background-color: #333;
                            position: sticky;
                            top: 0;
                            z-index: 1;
                        }

                        /* Specific column header styles */
                        .currency-section th:nth-child(3) {
                            color: #fff;
                            /* White color for Price column header */
                        }

                        /* Specific column header styles */
                        .currency-section th:nth-child(6) {
                            color: #fff;
                            /* White color for Price column header */
                        }

                        /* Specific column header styles */
                        .currency-section th:nth-child(4) {
                            color: #fff;
                            /* White color for Price column header */
                        }

                        .currency-section th:nth-child(5) {
                            color: #fff;
                            /* Yellow color for Market Cap column header */
                        }

                        /* Specific column data styles */
                        .currency-section td:nth-child(3) {
                            color: #fff;
                            /* White color for Price column data */
                        }

                        .currency-section td:nth-child(1) {
                            color: #fff;
                            font-size: 25px;
                            /* White color for Price column data */
                        }

                        .currency-section td:nth-child(5) {
                            color: #fff;
                            /* Yellow color for Market Cap column data */
                        }

                        /* Specific column data styles */
                        .currency-section td:nth-child(4) {
                            color: #fff;
                            /* White color for Price column data */
                        }

                        .currency-section td:nth-child(6) {
                            color: #fff;
                            /* Yellow color for Market Cap column data */
                        }

                        .currency-section img.crypto-icon {
                            width: 24px;
                            height: 24px;
                            margin-right: 10px;
                        }

                        .currency-section td {
                            vertical-align: middle;
                        }

                        @media screen and (max-width: 768px) {

                            .currency-section th,
                            .currency-section td {
                                padding: 8px;
                                font-size: 14px;
                            }

                            .currency-section table,
                            .currency-section th,
                            .currency-section td {
                                display: block;
                            }

                            .currency-section th {
                                top: 0;
                                position: -webkit-sticky;
                                position: sticky;
                                border: none;
                                display: table-cell;
                            }

                            .currency-section td {
                                display: table-cell;
                                border-bottom: none;
                            }

                            .currency-section .table-wrapper {
                                overflow-x: auto;
                            }

                            .currency-section table {
                                display: table;
                                border-collapse: collapse;
                            }
                        }
                    </style>
                </section>
                <!-- Live API Key section | Live API Key section | Live API Key section | Live API Key section  -->

                <!-- currrency section end -->
                <!-- testimonial section start-->
                <section class="testimonial pos-rel z-1">
                    <div class="testimonial-two pt-115">
                        <div class="tes-shape">
                            <div class="shape shape--2">
                                <img class="topToBottom2" src="/assets/img/shape/tes-shape02.svg" alt="">
                            </div>
                            <div class="shape shape--3">
                                <img class="topToBottom" src="/assets/img/shape/tes-shape03.svg" alt="">
                            </div>
                            <div class="shape shape--4">
                                <img src="/assets/img/shape/it_shape1.png" alt="">
                            </div>
                            <div class="shape shape--5">
                                <img src="/assets/img/shape/it_shape1.png" alt="">
                            </div>
                        </div>
                        <!-- What client says removed -->
                        <div id="integration" class="integrate">
                            <div class="section-title pb-25">
                                <h1 class="title">Integrated with most popular <br> crypto currencies</h1>
                            </div>
                            <div class="xb-integrate">
                                <img src="/assets/img/integrate/int-bg_img1.svg" alt="">
                                <div class="image">
                                    <img src="/assets/img/logo-change.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </main>
    </div>
</body>

<!-- feature section start -->

<!-- feature section end -->
<!-- team & faq section start -->

<!-- team & faq section end -->
</main>
<!-- main area end  -->

<!-- footer strt -->
@include('static.layouts.footer')


<!-- footer end -->
</div>
<!-- jquery include -->
<script>
    // JavaScript to handle hover effects
    document.addEventListener('DOMContentLoaded', function() {
        // Get all feature columns
        const featureCols = document.querySelectorAll('.feature-col');

        featureCols.forEach(col => {
            const hoverDialogue = col.querySelector('.hover-dialogue');

            // Show dialogue on hover
            col.addEventListener('mousemove', (e) => {
                const rect = col.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const hoverRect = hoverDialogue.getBoundingClientRect();

                // Position hover dialogue
                const offset = 10; // Space between card and hover dialogue
                const hoverDialogueX = x + offset + hoverRect.width > rect.width ? rect.width -
                    hoverRect.width - offset : x + offset;
                const hoverDialogueY = y + offset + hoverRect.height > rect.height ? rect
                    .height - hoverRect.height - offset : y + offset;

                hoverDialogue.style.left = `${hoverDialogueX}px`;
                hoverDialogue.style.top = `${hoverDialogueY}px`;
                hoverDialogue.style.display = 'block';
                hoverDialogue.style.opacity = '1';
            });

            // Hide dialogue when mouse leaves
            col.addEventListener('mouseleave', () => {
                hoverDialogue.style.opacity = '0';
                setTimeout(() => {
                    if (hoverDialogue.style.opacity === '0') {
                        hoverDialogue.style.display = 'none';
                    }
                }, 300); // Match with transition duration
            });
        });
    });
</script>

<script>
    function showPopup() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }

    window.onload = function() {
        setTimeout(showPopup, 3000);
    }

    document.getElementById('closeButton').addEventListener('click', function(event) {
        event.stopPropagation();
        closePopup();
    });

    document.getElementById('overlay').addEventListener('click', closePopup);
</script>


<!-- <script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && (e.key === 'u' || e.key === 's' || e.key === 'a' || e.key === 'c' || e.key === 'i' || e
                .key === 'j')) {
            e.preventDefault();
        }
    });
</script>
  <script>
      document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
      });
  </script>
<script>
    (function() {
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        document.addEventListener('keydown', function(e) {
            // Prevent F12 (Developer Tools)
            if (e.keyCode === 123) {
                e.preventDefault();
            }
            // Prevent Ctrl+Shift+I (Chrome DevTools)
            if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
                e.preventDefault();
            }
            // Prevent Ctrl+Shift+J (Console)
            if (e.ctrlKey && e.shiftKey && e.keyCode === 74) {
                e.preventDefault();
            }
            // Prevent Ctrl+Shift+C (Inspect Element)
            if (e.ctrlKey && e.shiftKey && e.keyCode === 67) {
                e.preventDefault();
            }
            // Prevent Ctrl+Shift+K (Network tab)
            if (e.ctrlKey && e.shiftKey && e.keyCode === 75) {
                e.preventDefault();
            }
            // Prevent Ctrl+U (View Source)
            if (e.ctrlKey && e.keyCode === 85) {
                e.preventDefault();
            }
            // Prevent Ctrl+P (Print)
            if (e.ctrlKey && e.keyCode === 80) {
                e.preventDefault();
            }
            // Prevent Ctrl+S, Ctrl+A
            if (e.ctrlKey && (e.key === 's' || e.key === 'a')) {
                e.preventDefault();
            }
            // Prevent Ctrl+C, Ctrl+V, Ctrl+X
            if (e.ctrlKey && (e.key === 'c' || e.key === 'v' || e.key === 'x')) {
                e.preventDefault();
            }
        });

        setInterval(function() {
            // Disable developer tools
            if ((window.outerHeight - window.innerHeight) > 100 || (window.outerWidth - window.innerWidth) >
                100) {
                document.body.innerHTML = 'Developer tools are not allowed';
                document.body.style.display = 'none';
            }
        }, 1000);
    })();
</script> -->




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
