<footer class="footer bg_img pos-rel mt-110" data-background="assets/img/bg/footer-bg.png">
    <div class="container">
        <div class="xb-contact">
            <div class="row g-0 mt-none-30">
                <div class="col-lg-7 mt-30">
                    <div class="xb-inner bg_img" data-background="assets/img/bg/form_bg.png">
                        <h2 class="xb-item--title">Reach out to us anytime!</h2>
                        <form class="xb-item--form" action="#!">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="/assets/img/footer/contact-user.svg" alt=""></span>
                                        <input type="text" id="fullName" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="/assets/img/footer/contact-email.svg" alt=""></span>
                                        <input type="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="xb-item--field">
                                        <span><img src="/assets/img/footer/call.svg" alt=""></span>
                                        <input type="tel" id="number" placeholder="Enter your number" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="xb-item--field">
                                        <span><img src="/assets/img/footer/contact-message.svg" alt=""></span>
                                        <input type="text" id="message" placeholder="Type Your Message" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-check xb-item--checkbox">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        By sending this form I confirm that I have read and accept the <br>
                                        <a target="_blank"
                                            href="https://firebasestorage.googleapis.com/v0/b/blue-mindglobal.appspot.com/o/Privacy%20Policy.pdf?alt=media&token=506e68c5-d663-4317-ba1a-feee2f3b27b9">privacy
                                            policy</a>
                                    </label>
                                </div>
                                <div class="col-lg-12 xb-item--contact-btn">
                                    <button class="them-btn them-active" type="submit" id="submitBtn">
                                        <span style="margin-right: 10px;">Send Message</span>
                                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.querySelector('.xb-item--form');

                                form.addEventListener('submit', function(event) {
                                    event.preventDefault();

                                    const name = document.getElementById('fullName').value;
                                    const email = document.getElementById('email').value;
                                    const contact = document.getElementById('number').value;
                                    const message = document.getElementById('message').value;

                                    fetch('https://script.google.com/macros/s/AKfycbxoyCaf2DRTw0TSt5oeD-Z48fni-DaL-4sEqb6IRA7w4S55z_laF7agnyX1jIP_g9M-/exec', {
                                            method: 'POST',
                                            mode: 'no-cors',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                name: name,
                                                email: email,
                                                contact: contact,
                                                message: message
                                            })
                                        })
                                        .then(response => {
                                            alert('Your message has been sent!');
                                            form.reset();
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                        });
                                });
                            });
                        </script>
                    </div>
                </div>


                <div class="col-lg-5 mt-30 pc-only">
                    <div class="testimonial-wrap bg_img" data-background="assets/img/bg/tm_bg.png">
                        <div class="xb-item--img mt-145">
                            {{-- <img src="/assets/img/logo/Logo_new1.png" alt=""> --}}
                            <center>
                            <img src="/assets/img/logo-change.png" alt="">
                            </center>
                        </div>
                    </div>
                </div>

                <style>
                    /* Hide the section on screens smaller than 992px (tablet and mobile devices) */
                    @media (max-width: 991px) {
                        .pc-only {
                            display: none;
                        }
                    }
                </style>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="xb-footer-bottom">
            <div class="xb-footer-wrap ul_li_between">
                <div class="xb-item--footer_widget mb-30">
                    <span>Useful Links</span>
                    <ul class="xb-item--footer_widget-list">
                        <li><a href="/about">Information</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/roadmap">Our Roadmap</a></li>
                        <li><a target="_blank"
                                href="/terms">Terms
                                & Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="xb-item--footer_widget mb-30">
                    <span>Solution</span>
                    <ul class="xb-item--footer_widget-list">
                        <li><a href="/investment">Investment</a></li>
                        <li><a href="#features">Security</a></li>
                        <li><a href="/contact">Support</a></li>
                    </ul>
                </div>
                <div class="xb-item--footer_widget mb-30">
                    <span>Need Help?</span>
                    <ul class="xb-item--footer_widget-list">
                        <li><a href="tel:+918182454267">+(91) 8182-454267</a></li>
                        <li class="underline"><a href="mailto:bluemindglobal@gmail.com">bluemindglobal@gmail.com
                            </a>
                        </li>
                    </ul>



                    @php

                        $data = $globalData->social;

                        $facebook = $data?->facebook;
                        $youtube = $data?->youtube;
                        $linkedin = $data?->linkedin;
                        $instagram = $data?->instagram;

                        $twitter = $data?->twitter;

                    @endphp


                    <ul class="ul_li xb-item--social-link">
                        @if ($facebook)
                            <li><a target="_blank" href="{{ $facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        @endif

                        @if ($youtube)
                            <li><a target="_blank" href="{{ $youtube }}"><i class="fab fa-youtube"></i></a></li>
                        @endif

                        @if ($linkedin)
                            <li><a target="_blank" href="{{ $linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                        @endif

                        @if ($instagram)
                            <li><a target="_blank" href="{{ $instagram }}"><i class="fab fa-instagram"></i></a></li>
                        @endif
                    </ul>


                </div>
                <div class="xb-item--footer_widget-community mb-30">
                    <h3>Join Our Popular Community</h3>
                    <a class="them-btn" target="_blank" href="{{ $twitter }}">
                        <span class="btn_icon">
                            <img src="/assets/img/icon/discord-f-icon.svg" alt="">
                        </span>
                        <span class="btn_label" data-text="join">join</span>
                    </a>
                </div>
            </div>
            <!-- <div class="footer-copyright text-center">
                Copyright © 2024 Developed by <a href="https://mindmediahouse.com/"> Mind Media House. </a> All rights
                reserved.
            </div> -->
        </div>
    </div>
</footer>
