<!doctype html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="سامانه جامع مدیریت مجتمع های مسکونی و تجاری">
    <meta name="author" content="Ali Rahmani">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="سامانه جامع مدیریت مجتمع های مسکونی و تجاری"/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content="سامانه جامع مدیریت مجتمع های مسکونی و تجاری"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="سامانه جامع مدیریت مجتمع های مسکونی و تجاری"/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>سامانه جامع مدیریت مجتمع های مسکونی و تجاری</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">


    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

    @yield('headerScripts')

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index-3.html">
                <img src="img/logo-white.png" alt="logo" class="img-fluid"/>
            </a>
            <ul class="list-inline app-download-list">



                <li class="list-inline-item">
                    <a href="{{ route('register') }}" class="d-flex align-items-center border rounded"><span class="fas fa-user-plus icon-sm ml-3"></span>
                        <div class="download-text text-left"><h5 class="mb-0">عضویت</h5></div>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="{{ route('login') }}" class="d-flex align-items-center border rounded">
                        <span class="fas fa-sign-in-alt icon-sm ml-3"></span>
                        <div class="download-text text-left">
                            <h5 class="mb-0">ورود</h5>
                        </div>
                    </a>
                </li>

            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a  href="{{ route('app.contact') }}">تماس باما</a></li>
                    <li><a  href="{{ route('app.about') }}">درباره ما</a></li>
                    <li><a  href="{{ route('app.services') }}">راهکار های مدیریت مجتمع مسکونی</a></li>
                    <li><a  href="{{ route('app.index') }}">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->

<!--body content wrap start-->
<div class="main">
@yield('content')
</div>
<!--body content wrap end-->

<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">دسترسی سریع</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">عضویت در سیستم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ورود به سیستم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">مشاوره رایگان</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">گواهی ها</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">شرکت</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">درباره ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ماژول های سیتم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">مشاهده مقالات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">سایر خدمات</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">حقوقی</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">قوانین کلی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">سیاست حریم خصوصی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">شرایط استفاده</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">گزارش ایراد</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">پشتیبانی</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">تماس باما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">بخش آموزش سامانه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">سوالات متداول</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">وضعیت سیستم</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row footer-top-wrap">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">تماس باما</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-map-marker-alt ml-2"></span> تهران، برج مسکونی المپیک</li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-envelope ml-2"></span> Info@Domain.com</li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt ml-2"></span> 021-22322233 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">تمامی حقوق محفوظ است © ۱۳۹۹  <a href="http://yasanco.com" target="_blank">شرکت توسعه فرآیندهای یاسان</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="social-nav text-right">
                        <ul class="list-unstyled social-list mb-0">
                            <li class="list-inline-item tooltip-hover">
                                <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                <div class="tooltip-item">فیسبوک</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-twitter"></span></a>
                                <div class="tooltip-item">توییتر</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-linkedin"></span></a>
                                <div class="tooltip-item">لینکدین</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="fab fa-telegram"></span></a>
                                <div class="tooltip-item">تلگرام</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-instagram"></span></a>
                                <div class="tooltip-item">اینستاگرام</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--Isotope filter js-->
<script src="js/mixitup.min.js"></script>
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
@yield('footerScripts')
</body>

</html>