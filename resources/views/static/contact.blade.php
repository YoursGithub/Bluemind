<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Contact Us</title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="images/x-icon" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- css include -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- added now -->
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

        <!-- main area start  -->
        <main>

            <!-- breadcrumb start -->
            <section class="breadcrumb bg_img pos-rel" data-background="assets/img/bg/breadcrumb.jpg">
                <div class="container">
                    <div class="breadcrumb__content">
                        <h2 class="breadcrumb__title">Contact Us</h2>
                        <ul class="bread-crumb clearfix ul_li_center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="breadcrumb__icon">
                    <div class="icon icon--1">
                        <img class="leftToRight" src="/assets/img/icon/bi_01.png" alt="">
                    </div>
                    <div class="icon icon--2">
                        <img class="topToBottom" src="/assets/img/shape/hero-sp_04 1.svg" alt="">
                    </div>
                    <div class="icon icon--3">
                        <img class="topToBottom" src="/assets/img/shape/hero-sp_04 1.svg" alt="">
                    </div>
                    <div class="icon icon--4">
                        <img class="leftToRight" src="/assets/img/icon/bi_04.png" alt="">
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- contact start -->
            <section class="contact-info pt-130 pb-120">
                <div class="container">
                    <div class="row justify-content-md-center mt-none-30">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="contact-info__item xb-border text-center">
                                <div class="icon">
                                    <img src="/assets/img/icon/location.svg" alt="">
                                </div>
                                <h3>Location</h3>
                                <p>

                                    {{ $globalData->contact?->address }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="contact-info__item xb-border text-center">
                                <div class="icon">
                                    <img src="/assets/img/icon/call.svg" alt="">
                                </div>
                                <h3>Contact</h3>
                                <p>
                                    <a>Phone</a> <br>
                                    <a href="tel:+{{ $globalData->contact?->phone }}">

                                        {{ $globalData->contact?->phone }}


                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="contact-info__item xb-border text-center">
                                <div class="icon">
                                    <img src="/assets/img/icon/mail.svg" alt="">
                                </div>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:Bluemindglobal@gmail.com">Bluemindglobal@gmail.com</a> <br>
                                    <a href="mailto:info@bluemindglobal.com">info@bluemindglobal.com</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <style>
                    .contact-info__item {
                        min-height: 410px;
                        /* Adjust this value as needed */
                    }
                </style>
            </section>
            <!-- contact end -->

            <!-- google map start -->
            <section class="google-map">
                <div class="google-map__inner">
                    <iframe src="{{ $globalData->contact?->location_url }}" width="600" height="450"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <!-- google map end -->

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
    <!-- light theme -->

    <script src="/assets/js/theme.js"></script>
</body>

</html>
