<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
    <script src="/assets/js/firebase.js" type="module"></script>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon" />
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
</head>
<style>
    body {
        background-color: #0a0e17;
        color: #ffffff;
    }

    h1 {
        font-size: 28px;
        margin-bottom: 30px;
        padding-bottom: 10px;
        border-bottom: 1px solid #1a2035;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
        margin: 10px;
    }

    .gallery-item {
        background-color: #111827;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
    }

    .gallery-img {
        height: 200px;
        background-size: cover;
        background-position: center;
    }

    .gallery-info {
        padding: 15px;
    }

    .gallery-title {
        background-color: #00a8ff;
        color: white;
        padding: 12px 15px;
        font-size: 18px;
        font-weight: bold;
    }

    .gallery-desc {
        color: #abb4c7;
        font-size: 14px;
        margin-top: 5px;
    }

    .highlight {
        background: linear-gradient(45deg, #00a8ff, #0069ff);
        position: relative;
    }

    .badge {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #00a8ff;
        color: white;
        padding: 5px 20px;
        transform: rotate(45deg) translate(20px, -15px);
    }
</style>

<body>
    <!-- header strt -->

    @include('static.layouts.navbar')
    <!-- header end -->



    <div class="container">
        <h1 style="margin-top: 20px;">Gallery</h1>

        <div class="gallery-grid">
            <a href="/galleryview" class="gallery-item">
                <div class="gallery-img" style="background-image: url('/assets/img/logo/Logo_mobile.svg');"></div>
                <div class="gallery-title">Annual Conference 2024</div>
                <div class="gallery-info">
                    <p class="gallery-desc">Highlights from our annual global investment conference held in Tokyo</p>
                </div>
            </a>

            <a href="/galleryview" class="gallery-item">
                <div class="gallery-img" style="background-image: url('/assets/img/logo/Logo_mobile.svg');"></div>
                <div class="gallery-title">Annual Conference 2024</div>
                <div class="gallery-info">
                    <p class="gallery-desc">Highlights from our annual global investment conference held in Tokyo</p>
                </div>
            </a>

            <a href="/galleryview" class="gallery-item">
                <div class="gallery-img" style="background-image: url('/assets/img/logo/Logo_mobile.svg');"></div>
                <div class="gallery-title">Annual Conference 2024</div>
                <div class="gallery-info">
                    <p class="gallery-desc">Highlights from our annual global investment conference held in Tokyo</p>
                </div>
            </a>

            <a href="/galleryview" class="gallery-item">
                <div class="gallery-img" style="background-image: url('/assets/img/logo/Logo_mobile.svg');"></div>
                <div class="gallery-title">Annual Conference 2024</div>
                <div class="gallery-info">
                    <p class="gallery-desc">Highlights from our annual global investment conference held in Tokyo</p>
                </div>
            </a>

            <a href="/galleryview" class="gallery-item">
                <div class="gallery-img" style="background-image: url('/assets/img/logo/Logo_mobile.svg');"></div>
                <div class="gallery-title">Annual Conference 2024</div>
                <div class="gallery-info">
                    <p class="gallery-desc">Highlights from our annual global investment conference held in Tokyo</p>
                </div>
            </a>
        </div>
    </div>


    <!-- footer strt -->
    @include('static.layouts.footer')

    <!-- footer end -->
</body>

</html>
