<!doctype html>
<html lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Terms & Conditions</title>
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
                <h1 class="title">Terms & Conditions</h1>
                {{-- <img src="{{ $globalData->about?->image }}" class="mt-30" alt="founder">
                <h1 class="sub-heading">Mr Santosh Karke </br> Founder & CEO </h1> --}}
            </div>
            <div class="intro-section">
                <!--<h1 class="intro-title">Welcome to BLUEMIND GLOBAL PVT. LTD.</h1>-->

                @foreach ( $globalData->terms as $term )

                @php
                    $head = $term->heading ;
                    $body = $term->body ;

                @endphp
                    

                <div class="intro-text">
                    <h2 class="sub-heading">{{$head}}</h2>
                    <p>
                        {{ $body }}
                    </p>
                </div>

                @endforeach

        
             
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
