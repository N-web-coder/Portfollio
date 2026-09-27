<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Nitish Kumar - Laravel Developer with 2.2 years of experience building web applications, APIs and AI-powered projects.">
    <meta name="author" content="Nitish Kumar">
    <title>@yield('title', 'Nitish Kumar | Laravel Developer')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}

    <style>
        .project-detail-page {
            width: 100%;
            padding-top: 150px;
            padding-bottom: 100px;
            position: relative;
        }


        /* Back Button */

        .project-back-wrapper {
            margin-bottom: 30px;
        }

        .project-back-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 10px 16px;

            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 8px;

            background: #fff;

            color: inherit;
            font-size: 14px;
            font-weight: 600;

            text-decoration: none;
            cursor: pointer;

            transition: all 0.3s ease;
        }

        .project-back-link:hover {
            transform: translateX(-4px);
        }


        /* Project Hero */

        .project-detail-hero {
            width: 100%;

            padding: 50px;

            border: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 24px;

            background: #f8f9fa;
        }

        .project-label {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 22px;
        }

        .project-detail-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: #111;
            color: #fff;

            font-size: 13px;
            font-weight: 700;
        }

        .project-detail-type {
            font-size: 13px;
            font-weight: 600;

            opacity: 0.6;
        }

        .project-detail-title {
            margin: 0 0 18px;

            font-size: clamp(38px, 5vw, 62px);
            line-height: 1.08;
            font-weight: 700;
        }

        .project-detail-description {
            max-width: 600px;

            margin-bottom: 25px;

            font-size: 16px;
            line-height: 1.8;

            opacity: 0.65;
        }


        /* Category */

        .project-meta {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            padding: 10px 15px;

            border-radius: 8px;

            background: #fff;
        }

        .project-meta span {
            font-size: 12px;
            opacity: 0.55;
        }

        .project-meta strong {
            font-size: 13px;
        }


        /* Image */

        .project-detail-image {
            width: 100%;
            height: 360px;

            overflow: hidden;
            border-radius: 18px;
        }

        .project-detail-image img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform 0.5s ease;
        }

        .project-detail-image:hover img {
            transform: scale(1.04);
        }


        /* Information Cards */

        .project-information {
            margin-top: 30px;
        }

        .project-info-card {
            padding: 32px;

            border: 1px solid rgba(0, 0, 0, 0.07);
            border-radius: 20px;

            background: #fff;

            transition: all 0.3s ease;
        }

        .project-info-card:hover {
            transform: translateY(-4px);
        }

        .project-info-icon {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 46px;
            height: 46px;

            margin-bottom: 18px;

            border-radius: 12px;

            background: #f5f5f5;

            font-size: 20px;
        }

        .project-info-card h3 {
            margin-bottom: 8px;

            font-size: 22px;
            font-weight: 700;
        }

        .project-info-text {
            margin-bottom: 20px;

            font-size: 14px;
            line-height: 1.7;

            opacity: 0.6;
        }


        /* Technologies */

        .project-tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .project-tech-item {
            display: inline-flex;

            padding: 8px 13px;

            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 7px;

            background: #fafafa;

            font-size: 13px;
            font-weight: 600;
        }


        /* Features */

        .project-feature-list {
            margin: 0;
            padding: 0;

            list-style: none;
        }

        .project-feature-list li {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 8px 0;

            font-size: 14px;
        }

        .project-feature-list li i {
            font-size: 15px;
        }


        /* Buttons */

        .project-detail-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;

            margin-top: 30px;
        }

        .project-action-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 13px 20px;

            border-radius: 8px;

            font-size: 14px;
            font-weight: 600;

            text-decoration: none;

            transition: all 0.3s ease;
        }

        .project-action-btn.primary {
            background: #111;
            color: #fff;
        }

        .project-action-btn.secondary {
            border: 1px solid rgba(0, 0, 0, 0.12);

            background: #fff;
            color: #ff0000;
        }   

        .project-action-btn:hover {
            transform: translateY(-3px);
        }


        /* Responsive */

        @media (max-width: 991px) {

            .project-detail-page {
                padding-top: 120px;
            }

            .project-detail-hero {
                padding: 35px;
            }

            .project-detail-image {
                height: 300px;
            }
        }


        @media (max-width: 767px) {

            .project-detail-page {
                padding-top: 100px;
                padding-bottom: 60px;
            }

            .project-detail-hero {
                padding: 25px;
                border-radius: 18px;
            }

            .project-detail-title {
                font-size: 38px;
            }

            .project-detail-image {
                height: 240px;
            }

            .project-info-card {
                padding: 24px;
            }

            .project-action-btn {
                width: 100%;
                justify-content: center;
            }
        }

        
    </style>
</head>

<body>

    <main class="main-wrapper">

        <header class="header-section sticky-header d-none d-lg-block">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <!-- Start Header Logo -->
                            <a href="{{ route('index') }}" class="header-logo">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                            </a>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-auto">
                            <!-- Start Header Menu -->
                            <ul class="header-nav">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('service') }}">Services</a></li>

                                {{-- <li><a href="{{ route('projects') }}">Project</a></li>  --}}
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                            <!-- End Header Menu -->
                        </div>
                        <div class="col">
                            <div class="header-btn-link text-end">
                                <a href="{{ route('contact') }}" class="btn btn-sm btn-outline-one icon-space-left">Hire
                                    Me <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-header d-block d-lg-none">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <div class="mobile-logo">
                            <a href="{{ route('index') }}"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-action-link text-end">
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu"><i
                                    class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
            <div class="offcanvas-header text-end">
                <button class="offcanvas-close"><i class="icofont-close-line"></i></button>
            </div> <!-- End Offcanvas Header -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}"><span>Home</span></a>
                            </li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('service') }}">Service</a></li>
                            {{-- <li><a href="{{ route('projects') }}">Project</a></li> --}}

                            <li>
                                <a href="{{ route('contact') }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
               <div class="footer-single-info">
                                <a href="{{ env('FACEBOOK') }}" class="info-box">
                                    <span class="icon"><i class="icofont-facebook"></i></span>
                                </a>
                                <a href="{{ env('GITHUB') }}" class="info-box">
                                    <span class="icon"><i class="icofont-github"></i></span>
                                </a>
                                <a href="{{ env('LINKEDIN') }}" class="info-box">
                                    <span class="icon"><i class="icofont-linkedin"></i></span>
                                </a>
                            </div>

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div>

        <div class="offcanvas-overlay"></div>

        @yield('content')

        <footer class="footer-section section-bg overflow-hidden pos-relative">
            <div class="footer-inner-shape-top-left"></div>
            <div class="footer-inner-shape-top-right"></div>

            <div class="footer-center section-gap-tb-165">
                <div class="container">
                    <div class="row justify-content-between align-items-center mb-n5">
                        <div class="col-auto mb-5">
                            <!-- Start Single Footer Info -->
                            <div class="footer-single-info">
                                <a href="tel:+91 {{ env('MOBILE') }}" class="info-box">
                                    <span class="icon"><i class="icofont-phone"></i></span>
                                    <span class="text">{{ env('MOBILE') }}</span>
                                </a>
                            </div>
                            <!-- Start Single Footer Info -->
                        </div>
                        <div class="col-auto mb-5">
                            <!-- Start Single Footer Info -->
                            <div class="footer-single-info">
                                <a href="mailto:{{ env('EMAIL') }}" class="info-box">
                                    <span class="icon"><i class="icofont-envelope-open"></i></span>
                                    <span class="text">{{ env('EMAIL') }}</span>
                                </a>
                            </div>
                            <!-- Start Single Footer Info -->
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div
                        class="row justify-content-center justify-content-md-between align-items-center flex-column-reverse flex-md-row">
                        <div class="col-auto" style="margin-left: 27px;">
                            <div class="footer-copyright">
                                <p class="copyright-text">
                                    &copy; {{ date('Y') }}
                                    <i class="icofont-heart"></i>
                                    Crafted by <a href="{{ route('index') }}">Nitish Kumar</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('index') }}" class="footer-logo">
                                <div class="logo">
                                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <button class="material-scrolltop" type="button"></button>
    </main>

    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>


</html>
