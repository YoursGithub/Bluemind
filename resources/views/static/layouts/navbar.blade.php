<header id="xb-header-area" class="header-area">
    <div class="xb-header stricky">
        <div class="container">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="/"><img src="/assets/img/logo/Logo.svg" alt=""></a>
                </div>
                <div class="header-logo-mobile">
                    <a href="/"><img src="/assets/img/logo/Logo_mobile.svg" alt=""
                            class="logo-mobile"></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li>
                                <a class="scrollspy-btn" href="/about"><span>About</span></a>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="/investment"><span>Investment</span></a>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="/roadmap"><span>Roadmap</span></a>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="/projects"><span>Projects</span></a>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="/gallery"><span>Gallery</span></a>
                            </li>
                            <!-- <li>
                                <a class="scrollspy-btn"><span>Downloads</span></a>
                            </li> -->
                            <li class="scrollspy-btn1">
                                <a href="#">Downloads</a>
                                <div class="dropdown-content">
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->business_proposal }}">Business
                                        Proposal</a>
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->referral_plan }}">Referral
                                        Plan</a>
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->trading_investment }}">Legal Documents</a>
                                    
                                </div>
                            </li>

                            <style>
                                /* Style for dropdown content */
                                .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    background-color: #000;
                                    min-width: 200px;
                                    max-height: 200px;
                                    z-index: 1;
                                    padding: 10px;
                                    font-size: small;
                                    border-radius: 5%;
                                }

                                /* Show dropdown on hover */
                                .scrollspy-btn1:hover .dropdown-content {
                                    display: block;
                                }

                                /* Main menu item styles */
                                .main-menu ul li a {
                                    display: inline-block;
                                    text-decoration: none;
                                    font-size: 18px;
                                    font-weight: 400;
                                    color: var(--color-white);
                                    position: relative;
                                    line-height: 22px;
                                    text-transform: capitalize;
                                    transition: 0.3s;
                                }

                                /* Specific styles for dropdown links */
                                .dropdown-link {
                                    display: block;
                                    text-decoration: none;
                                    color: var(--color-white);
                                    font-size: small;
                                    line-height: 22px;
                                    padding: 8px 0 !important;
                                    /* Ensure padding is applied correctly */
                                }
                            </style>

                            </style>
                            <!-- <li>
                                <a class="scrollspy-btn" target="_blank"
                                    href="https://firebasestorage.googleapis.com/v0/b/blue-mind-global.appspot.com/o/Terms%20%26%20Conditions.pdf?alt=media&token=30d09536-fd1a-4650-aee3-6edb9bc90b20"><span>Terms & Conditions</span></a>
                            </li> -->
                            <!-- <li>
                                <a class="scrollspy-btn" target="_blank"
                                    href="https://firebasestorage.googleapis.com/v0/b/blue-mindglobal.appspot.com/o/Business_Proposal.pdf?alt=media&token=61361af8-bd9f-47eb-8278-21011c8f0cb5"><span>Business Proposal</span></a>
                            </li> -->
                            <li>
                                <a href="/contact"><span>Contact Us</span></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Phone side button side menu -->
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="/" rel="home"><img src="/assets/img/logo/logo.svg"
                                            alt=""></a>
                                </div>
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item">
                                            <a class="scrollspy-btn" href="/about"><span>About</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="scrollspy-btn" href="/investment"><span>Investment</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="scrollspy-btn" href="/roadmap"><span>Roadmap</span></a>
                                        </li>
                                        <li>
                                            <a class="scrollspy-btn" href="/projects"><span>Projects</span></a>
                                        </li>
                                        <li>
                                            <a class="scrollspy-btn" href="/gallery"><span>Gallery</span></a>
                                        </li>
                             <li class="scrollspy-btn1">
                                <a href="#">Downloads</a>
                                <div class="dropdown-content">
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->business_proposal }}">Business
                                        Proposal</a>
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->referral_plan }}">Referral
                                        Plan</a>
                                    <a class="dropdown-link" target="_blank" href="{{ $globalData->download?->trading_investment }}">Legal Documents</a>
                                    
                                </div>
                            </li>
                                        <li>
                                            <a href="/contact"><span>Contact Us</span></a>
                                        </li>
                                    </ul>
                                    <!-- Login sign up buttons added here -->
                                    <div class="mobile-auth-buttons">
                                        <a class="mobile-login-btn" href="/register"><span>Sign Up</span></a>
                                        <a class="mobile-login-btn" href="/login"><span>Login</span></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>

                    <style>
                        .mobile-auth-buttons {
                            display: flex;
                            flex-direction: column;
                            margin-top: 20px;
                        }

                        .mobile-login-btn {
                            display: block;
                            text-align: center;
                            margin: 10px 0;
                            padding: 15px 0;
                            background-color: #007bff;
                            color: white;
                            font-size: 18px;
                            border-radius: 5px;
                            text-decoration: none;
                            transition: background-color 0.3s ease;
                        }

                        .mobile-login-btn:hover {
                            background-color: #0056b3;
                        }
                    </style>

                </div>
                <div class="header-btn ul_li" style=margin-right:5px>
                    <a class="login-btn" style=margin-right:10px href="/register"><i class="fas fa-lock"></i>
                        Sign Up</a>
                    <a class="login-btn" style=margin-right:10px href="/login"><i class="fas fa-user"></i>
                        Login</a>


                    <div class="header-bar-mobile side-menu d-lg-none ml-20">
                            <div class="xb-nav-mobile-container">
                                <a class="xb-nav-mobile" href="javascript:void(0);">
                                    <i class="fas fa-bars" style="color: white !important; font-size: 24px;"></i>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</header>


