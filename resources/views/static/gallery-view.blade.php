<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery View</title>
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
    <link id="themeStylesheet" rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <style>
        body {
            background-color: #0a0e17;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .back-button {
            display: inline-block;
            color: #00a8ff;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 20px;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: #0069ff;
        }

        .detail-container {
            background-color: #111827;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .detail-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #1a2035;
        }

        .detail-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
        }

        .detail-date {
            color: #00a8ff;
            font-size: 14px;
        }

        .detail-content {
            display: flex;
            flex-direction: column;
        }

        .detail-description {
            line-height: 1.7;
            color: #d1d5db;
            margin-top: 25px;
        }

        .detail-description p {
            margin-bottom: 15px;
        }

        /* Image gallery styling */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .gallery-item-container {
            position: relative;
            border-radius: 5px;
            overflow: hidden;
            height: 0;
            padding-bottom: 66.67%;
            /* 2:3 aspect ratio */
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item-container:hover {
            transform: scale(1.03);
        }

        .gallery-item-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
            padding: 20px 15px 15px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item-container:hover .gallery-item-overlay {
            opacity: 1;
        }

        .gallery-item-title {
            color: white;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0;
        }

        /* Modal styling for image preview */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 90%;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Responsive styles */
        @media (max-width: 991px) {
            .image-gallery {
                grid-template-columns: repeat(3, 1fr);
                gap: 15px;
            }

            .detail-title {
                font-size: 22px;
            }
        }

        @media (max-width: 767px) {
            .image-gallery {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .detail-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .detail-date {
                margin-top: 5px;
            }

            .detail-title {
                font-size: 20px;
            }
        }

        @media (max-width: 575px) {
            .image-gallery {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .detail-container {
                padding: 15px;
            }

            .detail-title {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <!-- Header section from the original document -->
    @include('static.layouts.navbar')

    @php
        $heading = $gallery?->heading;

        $images = $gallery?->images;

    @endphp

    <div class="container">
        <a href="/gallery" class="back-button" style="margin-top: 40px; display: inline-block;">
            ← Back to Gallery
        </a>

        <div class="detail-container">
            <div class="detail-header">
                <div class="detail-title">{{ $heading }}</div>
                {{-- <div class="detail-date">April 15, 2025</div> --}}
            </div>

            <div class="detail-content">
                <!-- Image gallery with 3 images in a row -->
                <div class="image-gallery">

                    @foreach ($images as $img)

                        @php

                            $path = $img->image_path;

                        @endphp


                    <div class="gallery-item-container" onclick="openModal('img{{ $loop->index }}')">
                        <img src="{{ $path }}" alt="Investment Summit" class="gallery-item-img">
                        {{-- <div class="gallery-item-overlay">
                            <p class="gallery-item-title">Keynote Speaker</p>
                        </div> --}}
                    </div>

                    @endforeach


                </div>
{{-- 
                <div class="detail-description" style="margin-bottom: 30px;">
                    <p>Our annual Investment Summit was a tremendous success this year, bringing together thought
                        leaders, investors, and industry experts from around the globe. The event showcased innovative
                        investment strategies designed specifically for the rapidly evolving digital economy.</p>
                    <br>
                    <p>Key discussions centered around blockchain technology, artificial intelligence applications in
                        finance, and sustainable investment practices that align with both profit goals and
                        environmental considerations.</p>
                    <br>
                    <p>Featured speakers included renowned economists, successful venture capitalists, and pioneers in
                        financial technology who shared valuable insights on navigating the complex landscape of modern
                        investments.</p>
                </div> --}}
            </div>
        </div>
    </div>

    @include('static.layouts.footer')


    <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        // Image modal functionality
        function openModal(imgId) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const imgElement = document.querySelector(`.gallery-item-container[onclick="openModal('${imgId}')"] img`);

            modal.style.display = "flex";
            modal.style.alignItems = "center";
            modal.style.justifyContent = "center";
            modalImg.src = imgElement.src;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Close modal when clicking outside the image
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target == modal) {
                closeModal();
            }
        }

        // Responsive grid adjustment
        function adjustGridColumns() {
            const gallery = document.querySelector('.image-gallery');
            const width = window.innerWidth;

            if (width <= 575) {
                gallery.style.gridTemplateColumns = '1fr';
            } else if (width <= 767) {
                gallery.style.gridTemplateColumns = 'repeat(2, 1fr)';
            } else {
                gallery.style.gridTemplateColumns = 'repeat(3, 1fr)';
            }
        }

        // Run on load and resize
        window.addEventListener('load', adjustGridColumns);
        window.addEventListener('resize', adjustGridColumns);
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
</body>

</html>
