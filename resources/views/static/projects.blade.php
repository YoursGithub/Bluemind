<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
    <link id="themeStylesheet" rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <style>
        body {
            background-color: #0a0e17;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #1a2035;
            font-weight: 600;
            color: #f8f9fa;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin: 20px 10px;
        }

        .gallery-item {
            position: relative;
            height: 280px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            transition: all 0.4s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.7);
        }

        .gallery-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.7) 40%, rgba(0, 0, 0, 0.4) 60%, rgba(0, 0, 0, 0.1) 80%, rgba(0, 0, 0, 0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 25px 20px;
            transition: background 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.5) 75%, rgba(0, 0, 0, 0.3) 100%);
        }

        .gallery-title {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .gallery-desc {
            color: #d1d5db;
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
            max-height: 0;
            opacity: 0;
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .gallery-item:hover .gallery-desc {
            max-height: 100px;
            opacity: 1;
            margin-top: 10px;
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #00a8ff, #0069ff);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 2;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.4s ease;
        }

        .gallery-item:hover .badge {
            opacity: 1;
            transform: translateY(0);
        }

        .view-more {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: #00a8ff;
            font-size: 13px;
            font-weight: 600;
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.4s ease;
        }

        .gallery-item:hover .view-more {
            opacity: 1;
            transform: translateX(0);
        }

        .view-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .view-more i {
            transform: translateX(3px);
        }

        /* Medium devices (tablets) */
        @media (max-width: 991px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .gallery-item {
                height: 250px;
            }
        }

        /* Small devices (landscape phones) */
        @media (max-width: 767px) {
            .container {
                padding: 0 15px;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
                margin: 15px 0;
            }

            .gallery-item {
                height: 200px;
            }

            .gallery-title {
                font-size: 16px;
            }

            .gallery-desc {
                font-size: 13px;
            }
        }

        /* Extra small devices (portrait phones) */
        @media (max-width: 575px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .gallery-item {
                height: 230px;
            }

            /* Show description by default on mobile for better UX */
            .gallery-desc {
                max-height: 100px;
                opacity: 1;
                margin-top: 8px;
                font-size: 13px;
                line-height: 1.4;
            }

            .view-more {
                opacity: 1;
                transform: translateX(0);
            }

            /* Enable touch-friendly interaction */
            .gallery-overlay {
                background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.8) 40%, rgba(0, 0, 0, 0.5) 70%, rgba(0, 0, 0, 0.3) 100%);
            }

            .badge {
                opacity: 1;
                transform: translateY(0);
                font-size: 11px;
                padding: 4px 12px;
            }
        }

        /* For very small devices */
        @media (max-width: 360px) {
            h1 {
                font-size: 22px;
            }

            .gallery-item {
                height: 200px;
            }

            .gallery-title {
                font-size: 15px;
            }
        }

        /* For devices with touch - optimizing hover effects */
        @media (hover: none) {
            .gallery-item:hover {
                transform: none;
            }

            .gallery-item:active {
                transform: scale(0.98);
            }

            .gallery-desc {
                max-height: 100px;
                opacity: 1;
                margin-top: 8px;
            }

            .view-more {
                opacity: 1;
                transform: translateX(0);
            }

            .badge {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    @include('static.layouts.navbar')

    <div class="container">
        <center>
        <h1 style="margin-top: 40px;">Project's Section</h1>
        <h1> COMING SOON...</h1>
        </center>
        <div class="gallery-grid">



        </div>
    </div>

    @include('static.layouts.footer')

    <!-- JavaScript for additional functionality -->
    <script>
        $(document).ready(function() {
            // Add animation class to items on page load
            $('.gallery-item').each(function(i) {
                $(this).addClass('animate__animated animate__fadeIn');
                $(this).css('animation-delay', `${i * 0.1}s`);
            });

            // Handle touch devices differently
            if ('ontouchstart' in window || navigator.maxTouchPoints) {
                $('.gallery-item').on('touchstart', function() {
                    $(this).addClass('touch-active');
                }).on('touchend', function() {
                    $(this).removeClass('touch-active');
                });
            }
        });
    </script>

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

    <!-- footer would be included here in the actual implementation -->
</body>

</html>
