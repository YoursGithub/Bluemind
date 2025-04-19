<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">



<head>

    <meta charset="utf-8" />

    <title>@yield('title', 'Blue Mind Global')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- App js -->
    <script src="/assets/js/plugin.js"></script>

    @yield('head-section')


</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo.svg" alt="" height="17">
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo.svg" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                   


                </div>

                <div class="d-flex">

                    
                

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->email }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                      
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                        @auth

                            @if (Auth::user()->is_admin)
                                <li>
                                    <a href="{{ route('admin.dashboard') }}">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">Admin Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.all-users') }}">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">Users</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-user-circle"></i>
                                        <span key="t-authentication">Users KYC</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ route('admin.all-kyc-view', ['status' => 'pending']) }}"
                                                key="t-register">Pending KYC</a></li>
                                        <li><a href="{{ route('admin.all-kyc-view', ['status' => 'active']) }}"
                                                key="t-register">Active KYC</a></li>
                                    </ul>
                                </li>


                                <li>

                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-user-circle"></i>
                                        <span key="t-authentication">Investments</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ route('admin.all-investments') }}">
                                          Manage Capital
                                        </a></li>
                                        <li><a href="{{ route('admin.all-transactions') }}">
                                            Manage Transactions</a></li>
                                    </ul>
                                    
                                </li>


                            @else

                                <li>
                                    <a href="{{ route('user.dashboard') }}">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">User Dashboard</span>
                                    </a>
                                </li>

                                @if(!Auth::user()->bankDetails?->is_kyc_verified)

                                <li>
                                    <a href="{{ route('user.kyc') }}">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">KYC</span>
                                    </a>
                                </li>

                                @endif

                                

                              
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-user-circle"></i>
                                        <span key="t-authentication">Investments</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                    <a href="{{ route('user.investments') }}">
                                                Investment Portfolio
                                            </a>
                                        </li>
                                        <li>
                                    <a href="{{ route('user.refInvestments') }}">
                                                Referral Portfolio
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('user.shareReferral') }}">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">Share Referral </span>
                                    </a>
                                </li>

                                
                               
                            @endif


                            <li>
                                    <a href="/account-settings">
                                        <i class="bx bx-home-circle"></i>
                                        <span key="t-dashboards">Account Settings</span>
                                    </a>
                            </li>




                        @endauth











                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        @yield('main-section')



        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>




            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->



    <!-- JAVASCRIPT -->

    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    @yield('script-section')

</body>



</html>
