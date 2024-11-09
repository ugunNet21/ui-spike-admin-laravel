<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}" />

    <title>Beranda</title>

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('template/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/libs/aos/dist/aos.css') }}" />

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('template/assets/images/logos/favicon.png') }}" alt="loader"
            class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper flex-column">
        <header class="header">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container">
                    <a class="navbar-brand me-0 py-0" href="{{ route('home') }}">
                        <img src="{{ asset('template/assets/images/logos/logo-light.svg') }}" alt="img-fluid" />
                    </a>
                    <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <!--Navbar desktop-->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/"
                                    target="_blank">Beranda</a>
                            </li>
                            <li class="nav-item dropdown hover-dd mega-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Demos
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animate-up p-4 border">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <h5 class="fs-5 fw-bolder">Different Demos</h5>
                                            <h6 class="text-muted">Included with the Package</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center my-4">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/demos/demo-main.jpg') }}"
                                                            alt="" class="img-fluid" />
                                                        <a target="_blank" href="{{ route('home') }}"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Main
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/demos/demo-dark.jpg') }}"
                                                            alt="" class="img-fluid" />
                                                        <a target="_blank" href="{{ route('home') }}"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Dark
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/demos/demo-horizontal.jpg') }}"
                                                            alt="" class="img-fluid" />
                                                        <a target="_blank" href="../horizontal/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Horizontal
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/demos/demo-minisidebar.jpg') }}"
                                                            alt="" class="img-fluid" />

                                                        <a target="_blank" href="../minisidebar/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Minisidebar
                                                    </h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-md-12">
                                            <h5 class="fs-5 fw-semibold mt-8">Different Apps</h5>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/apps/app-calendar.jpg') }}"
                                                            alt="" class="img-fluid" />
                                                        <a target="_blank" href="../main/app-calendar.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Calendar
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('template/assets/images/apps/app-invoice.jpg') }}"
                                                            alt="" class="img-fluid" />
                                                        <a target="_blank" href="../main/app-invoice.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 py-1 px-2 rounded-pill position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">
                                                        Invoice
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hover-dd mega-dropdown pages-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                    <span class="d-flex align-items-center">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animate-up py-0 border">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="p-4">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a target="_blank" href="../main/app-chat.html"
                                                                    class="d-flex align-items-center pb-6 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset('template/assets/images/svgs/icon-dd-chat.svg') }}"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Chat Application
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a target="_blank"
                                                                    href="../main/page-user-profile2.html"
                                                                    class="d-flex align-items-center pb-6 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center">
                                                                        <img src="{{ asset('template/assets/images/svgs/icon-dd-cart.svg') }}"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24" />
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            User Profile
                                                                        </h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative p-4 border-start h-100">
                                                <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                                                <ul class="list-unstyled">

                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../main/authentication-register.html">Register
                                                            Now</a>
                                                    </li>

                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../main/page-account-settings.html">Account
                                                            Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/"
                                    target="_blank">Lainnya</a>
                            </li>
                        </ul>
                    </div>
                    <a class="d-none d-lg-block btn btn-primary fs-3 rounded btn-hover-shadow rounded-pill px-4 py-2"
                        href="" target="_blank">Login</a>
                </div>
            </nav>
        </header>

        <div class="body-wrapper overflow-hidden pt-0">
            <section class="hero-section bg-body-secondary position-relative overflow-hidden">
                <div class="container">
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-9 pt-lg-5">
                            <div class="text-center pt-5">
                                <h1 class="fw-bolder mb-4 fs-12" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    Transform Your School Experience with Our Dynamic Dashboard
                                </h1>
                                <p class="fs-5 mb-5 fw-normal" data-aos="fade-up" data-aos-delay="600"
                                    data-aos-duration="1000">
                                    Our platform offers a user-friendly interface with both light and dark modes,
                                    tailored dashboards, and essential educational tools.
                                </p>
                                <div class="d-sm-flex align-items-center justify-content-center gap-8 mb-8 pb-7"
                                    data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                    <a class="btn btn-primary rounded-pill d-block mb-3 mb-sm-0 scroll-link"
                                        href="#school-dashboard">Get Started</a>
                                </div>

                                <ul class="list-unstyled d-inline-flex w-auto align-items-center justify-content-center mb-0 gap-3 bg-white rounded-pill p-3"
                                    data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-bootstrap.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-sass.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-html.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-figma.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-js.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-gulp.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-npm.svg') }}"
                                            alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('template/assets/images/svgs/icon-jquery.svg') }}"
                                            alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sliding-wrapper position-relative overflow-hidden py-5">
                    <div class="slide-background d-flex flex-row w-100 gap-3 py-lg-7">
                        <div class="slide">
                            <img src="{{ asset('template/assets/images/slider/slider-group.png') }}"
                                alt="slide" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('template/assets/images/slider/slider-group.png') }}"
                                alt="slide" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('template/assets/images/slider/slider-group.png') }}"
                                alt="slide" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('template/assets/images/slider/slider-group.png') }}"
                                alt="slide" />
                        </div>
                        <div class="slide">
                            <img src="{{ asset('template/assets/images/slider/slider-group.png') }}"
                                alt="slide" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="production py-7 py-lg-5" id="production-template">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="d-sm-flex align-items-center text-center gap-2 justify-content-center mb-4"
                                data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center justify-content-sm-start mb-2 mb-sm-0">
                                    <li class="">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('template/assets/images/profile/user-1.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32" />
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('template/assets/images/profile/user-2.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32" />
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="{{ asset('template/assets/images/profile/user-3.jpg') }}"
                                                alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32" />
                                        </a>
                                    </li>
                                </ul>
                                <p class="mb-0 fw-semibold fs-5">
                                    <span>10,000+</span> students, teachers, and staff using our school platform
                                </p>

                            </div>
                            <h2 class="text-center mb-0 fs-9 fw-bolder" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">
                                Ready-to-use & user-friendly school management dashboard template
                            </h2>

                        </div>
                    </div>
                    <div class="deshboard-templete position-relative mt-5 mb-2">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="deshboard-templete-items rounded-3 border position-relative overflow-hidden mb-4"
                                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                    <div class="bg-light p-3 pb-0">
                                        <div
                                            class="deshboard-templete-img rounded-top-2 overflow-hidden position-relative">
                                            <img src="{{ asset('template/assets/images/demos/demo-main.jpg') }}"
                                                alt="" class="img-fluid" />
                                            <a href="{{ route('home') }}" target="_blank"
                                                class="btn btn-primary rounded-pill live-preview-btn">Live Preview</a>
                                        </div>
                                    </div>
                                    <div class="deshboard-templete-content p-3">
                                        <a href="{{ route('home') }}" target="_blank">
                                            <h6 class="mb-1 fs-4">Main</h6>
                                        </a>
                                        <p class="mb-0">Demo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="deshboard-templete-items rounded-3 border position-relative overflow-hidden mb-4"
                                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                    <div class="bg-light p-3 pb-0">
                                        <div
                                            class="deshboard-templete-img rounded-top-2 overflow-hidden position-relative">
                                            <img src="{{ asset('template/assets/images/demos/demo-dark.jpg') }}"
                                                alt="" class="img-fluid" />
                                            <a href="{{ route('home') }}" target="_blank"
                                                class="btn btn-primary rounded-pill live-preview-btn">Live Preview</a>
                                        </div>
                                    </div>
                                    <div class="deshboard-templete-content p-3">
                                        <a href="{{ route('home') }}" target="_blank">
                                            <h6 class="mb-1 fs-4">Dark</h6>
                                        </a>
                                        <p class="mb-0">Demo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="deshboard-templete-items rounded-3 border position-relative overflow-hidden mb-4"
                                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                    <div class="bg-light p-3 pb-0">
                                        <div
                                            class="deshboard-templete-img rounded-top-2 overflow-hidden position-relative">
                                            <img src="{{ asset('template/assets/images/demos/demo-horizontal.jpg') }}"
                                                alt="" class="img-fluid" />
                                            <a href="../horizontal/index.html" target="_blank"
                                                class="btn btn-primary rounded-pill live-preview-btn">Live Preview</a>
                                        </div>
                                    </div>
                                    <div class="deshboard-templete-content p-3">
                                        <a href="../horizontal/index.html" target="_blank">
                                            <h6 class="mb-1 fs-4">Horizontal</h6>
                                        </a>
                                        <p class="mb-0">Demo</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="mt-5">
                            <div
                                class="badge text-bg-primary text-center mb-7 fs-4 py-6 px-4 d-table mx-auto rounded-pill">
                                Apps
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="deshboard-templete-items rounded-3 border position-relative overflow-hidden mb-4"
                                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div class="bg-light p-3 pb-0">
                                            <div
                                                class="deshboard-templete-img rounded-top-2 overflow-hidden position-relative">
                                                <img src="{{ asset('template/assets/images/apps/app-chat.jpg') }}"
                                                    alt="" class="img-fluid" />
                                                <a target="_blank" href="../main/app-chat.html"
                                                    class="btn btn-primary rounded-pill live-preview-btn">Live
                                                    Preview</a>
                                            </div>
                                        </div>
                                        <div class="deshboard-templete-content p-3">
                                            <a target="_blank" href="../main/app-chat.html">
                                                <h6 class="mb-1 fs-4">Chat</h6>
                                            </a>
                                            <p class="mb-0">Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="deshboard-templete-items rounded-3 border position-relative overflow-hidden mb-4"
                                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div class="bg-light p-3 pb-0">
                                            <div
                                                class="deshboard-templete-img rounded-top-2 overflow-hidden position-relative">
                                                <img src="{{ asset('template/assets/images/apps/app-email.jpg') }}"
                                                    alt="" class="img-fluid" />
                                                <a target="_blank" href="../main/app-email.html"
                                                    class="btn btn-primary rounded-pill live-preview-btn">Live
                                                    Preview</a>
                                            </div>
                                        </div>
                                        <div class="deshboard-templete-content p-3">
                                            <a target="_blank" href="../main/app-email.html">
                                                <h6 class="mb-1 fs-4">Email</h6>
                                            </a>
                                            <p class="mb-0">Application</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features-section bg-body-secondary py-7 py-lg-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <p class="mb-7 fs-5" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                            Almost covered everything
                        </p>
                        <h2 class="fs-9 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Other Amazing Features & Flexibility Provided
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
                            <div class="card mb-4 w-100" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="card-body p-4">
                                    <div
                                        class="bg-primary-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center">
                                        <i class="d-block ti ti-wand text-primary fs-8"></i>
                                    </div>
                                    <h5 class="fs-6">6 Theme Colors</h5>
                                    <p class="mb-0 fs-4">
                                        We have included 6 pre-defined Theme Colors with Elegant
                                        Admin.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
                            <div class="card mb-4 w-100" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="card-body p-4">
                                    <div
                                        class="bg-danger-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center">
                                        <i class="d-block ti ti-archive text-danger fs-8"></i>
                                    </div>
                                    <h5 class="fs-6">690+ Page Templates</h5>
                                    <p class="mb-0 fs-4">
                                        Yes, we have 5 demos & 690+ Pages per demo to make it
                                        easier.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="review-section py-5">
                <div class="container">
                    <div class="review-slider position-relative" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000">
                        <div class="owl-carousel owl-theme">
                            <div class="item text-center">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6">
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="fs-9 mb-8 pb-6 fw-medium">
                                    Such a beautiful, detailed, and extensive template. Spike
                                    admin is the perfect foundation for any project. I highly
                                    recommend this huge time saver.
                                </h2>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('template/assets/images/profile/user-3.jpg') }}"
                                        alt="" class="w-auto me-3 rounded-circle" width="64"
                                        height="64" />
                                    <div class="text-start">
                                        <h6 class="fs-5 mb-1 fw-semibold">Leslie Alexander</h6>
                                        <p class="mb-0 fs-4">Product Designer, Appzio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6">
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="fs-9 mb-8 pb-6 fw-medium">
                                    The dashboard template from Wrappixel has helped me provide
                                    a clean and sleek look to my dashboard and made it look
                                    exactly the way I wanted it to, mainly without having.
                                </h2>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('template/assets/images/profile/user-1.jpg') }}"
                                        alt="" class="w-auto me-3 rounded-circle" width="64"
                                        height="64" />
                                    <div class="text-start">
                                        <h6 class="fs-5 mb-1 fw-semibold">Jenny Wilson</h6>
                                        <p class="mb-0 fs-4">Features avaibility</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6">
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="ti ti-star-filled d-block fs-7 text-warning"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="fs-9 mb-8 pb-6 fw-medium">
                                    The quality of design is excellent, customizability and
                                    flexibility much better than the other products available in
                                    the market. I strongly recommend the Wrappixel to other
                                    buyers.
                                </h2>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('template/assets/images/profile/user-2.jpg') }}"
                                        alt="" class="w-auto me-3 rounded-circle" width="64"
                                        height="64" />
                                    <div class="text-start">
                                        <h6 class="fs-5 mb-1 fw-semibold">Minshan Cui</h6>
                                        <p class="mb-0 fs-4">Features avaibility</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="customizable-dashboard pt-5">
                <div class="container">
                    <div class="card build-app bg-dark rounded-1 position-relative mb-0">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-7 col-xl-6 text-center text-lg-start">
                                    <h2 class="fs-9 text-white text-center text-lg-start fw-bolder mb-3 lh-base">
                                        Haven't found an answer to your question?
                                    </h2>
                                    <p
                                        class="text-white fs-5 d-flex align-items-center justify-content-center justify-content-lg-start gap-2 fw-light mb-7 pb-6">
                                        Connect with us either on discord or email us
                                    </p>
                                    <div
                                        class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3 mb-4">
                                        <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                            class="btn btn-primary rounded-pill d-block mb-3 mb-sm-0 btn-hover-shadow"
                                            type="button">Ask on Discord</a>
                                        <a href="/" target="_blank"
                                            class="btn btn btn-outline-light d-block rounded-pill"
                                            type="button">Submit Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!--Footer-->
        <footer class="footer-part py-7 mt-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <p class="mb-0">
                                All rights reserved by Spike Admin. Designed & Developed by<a target="_blank"
                                    class="text-primary text-hover-primary ms-1"
                                    href="https://www.wrappixel.com/">Wrappixel</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--Hamburger Mobile-->
        <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header p-4">
                <img src="{{ asset('template/assets/images/logos/logo-light.svg') }}" alt=""
                    class="img-fluid" width="150" />
            </div>
            <div class="offcanvas-body p-4">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark" aria-current="page"
                            href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark" aria-current="page" href="{{ route('home') }}">PPDB</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang <i class="ti ti-chevron-down fs-14"></i></a>
                        <ul class="dropdown-menu ps-2">
                            <li>
                                <a class="dropdown-item text-dark" target="_blank"
                                    href="../horizontal/index.html">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" target="_blank" href="{{ route('home') }}">Visi
                                    Misi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program <i class="ti ti-chevron-down fs-14"></i></a>
                        <ul class="dropdown-menu ps-2">
                            <li>
                                <a class="dropdown-item text-dark" target="_blank"
                                    href="../horizontal/index.html">Program Studi</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" target="_blank"
                                    href="{{ route('home') }}">Kegiatan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item mt-3 dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages <i class="ti ti-chevron-down fs-14"></i></a>
                        <div class="dropdown-menu mt-3 ps-1">
                            <!-- apps -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="position-relative">
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('template/assets/images/svgs/icon-dd-chat.svg') }}"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">
                                                    Chat Application
                                                </h6>
                                                <span class="fs-2 d-block fw-normal text-muted">New messages
                                                    arrived</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center">
                                                <img src="{{ asset('template/assets/images/svgs/icon-dd-cart.svg') }}"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">
                                                    User Profile
                                                </h6>
                                                <span class="fs-2 d-block fw-normal text-muted">learn more
                                                    information</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- quick links -->
                                    <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                                    <ul class="list-unstyled px-1">
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="../main/authentication-register.html">Register Now</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="../main/page-account-settings.html">Account Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <form class="d-flex mt-3" role="search">
                    <a class="btn btn-primary btn-hover-shadow rounded-pill w-100"
                        href="https://discord.com/invite/eMzE8F6Wqs">Login</a>
                </form>
            </div>
        </div>
        <!--End Hamburger-->
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('template/assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('template/assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('template/assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/theme/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template/assets/js/theme/feather.min.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('template/assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('template/assets/js/landingpage/landingpage.js') }}"></script>

</body>

</html>
