@extends('app.layouts.master')
@section('headerScripts')
    <style>
        .price-box {
            margin: 0 auto;
            background: #E9E9E9;
            border-radius: 10px;
            padding: 40px 15px;
            width: 500px;
        }

        .ui-widget-content {
            border: 1px solid #bdc3c7;
            background: #e1e1e1;
            color: #222222;
            margin-top: 4px;
        }

        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 5.2em;
            height: 2.2em;
            cursor: default;
            margin: 0 -40px auto !important;
            text-align: center;
            line-height: 30px;
            color: #FFFFFF;
            font-size: 15px;
        }
        .ui-slider .ui-slider-handle .glyphicon {
            color: #FFFFFF;
            margin: 0 3px;
            font-size: 11px;
            opacity: 0.5;
        }

        .ui-corner-all {
            border-radius: 20px;
        }

        .ui-slider-horizontal .ui-slider-handle {
            top: -.9em;
        }

        .ui-state-default, .ui-widget-content .ui-state-default {
            border: 1px solid #f9f9f9;
            background: #3F51B5;
            width: auto;
            min-width: 100px;
        }

        .ui-slider-horizontal .ui-slider-handle {
            margin-left: -0.5em;
        }

        .ui-slider .ui-slider-handle {
            cursor: pointer;
        }
        .ui-slider a {
            cursor: pointer;
            outline: none;
        }
        .ui-slider a:focus {
            cursor: pointer;
            outline: none;
        }

        .price, .lead p {
            font-weight: 600;
            font-size: 32px;
            display: inline-block;
            line-height: 60px;
        }

        h4.great {
            background: #3F51B5;
            margin: 0 0 25px -60px;
            padding: 7px 15px;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            display: inline-block;
            -moz-box-shadow: 2px 4px 5px 0 #ccc;
            -webkit-box-shadow: 2px 4px 5px 0 #ccc;
            box-shadow: 2px 4px 5px 0 #ccc;
        }

        .total {
            /*display: inline;
            padding: 10px 5px;*/
            position: relative;
            padding-bottom: 20px;
        }

        .price-slider {
            margin-bottom: 70px;
        }
        .price-slider span {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 13px;
        }

        .form-pricing {
            background: #ffffff;
            padding: 20px;
            border-radius: 4px;
        }

        .price-form {
            background: #ffffff;
            margin-bottom: 10px;
            padding: 20px;
            border: 1px solid #eeeeee;
            border-radius: 4px;
            /*-moz-box-shadow:    0 5px 5px 0 #ccc;
              -webkit-box-shadow: 0 5px 5px 0 #ccc;
              box-shadow:         0 5px 5px 0 #ccc;*/
        }

        .form-group {
            margin-bottom: 0;
        }
        .form-group span.price {
            font-weight: 200;
            display: inline-block;
            color: #7f8c8d;
            font-size: 14px;
        }

        .help-text {
            display: block;
            margin-top: 32px;
            margin-bottom: 10px;
            color: #737373;
            position: absolute;
            /*margin-left: 20px;*/
            font-weight: 200;
            text-align: right;
            width: 188px;
        }

        .price-form label {
            font-weight: 200;
            font-size: 21px;
        }

        img.payment {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .ui-slider-range-min {
            background: #3F51B5;
        }

        /* HR */
        hr.style {
            margin-top: 0;
            border: 0;
            border-bottom: 1px dashed #ccc;
            background: #999;
        }

    </style>
@stop
@section('content')

    <!--hero section start-->
    <section class="hero-equal-height hero-tab-slider pt-165 pb-100 gradient-overly-right-color"
             style="background: url('img/milad.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme custom-indicator-slider">
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white">
                                <h1 class="text-white"> راهکارهای نوین مدیریت مجتمع مسکونی</h1>
                                <h1 class="text-white"> فراز یار</h1>
                                <p class="lead">ارایه راهکار های هوشمند مدیریت مجتمع مسکونی با هدف یکپارچگی اطلاعات، سهولت در روند مدیریت مالی و فرآیندها، صرفه جویی در هزینه ها و ارایه گزارشات آنی و تصمیم ساز. </p>
                                <ul class="list-unstyled tech-feature-list text-white">
                                    <a style="color: white" href="#features"><li class="py-1"><span style="float: right;" class="ti-control-forward ml-2"></span> مشاهده قابلیت های کلیدی</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white position-relative z-index">
                                <span class="text-uppercase">Total Business Solutions</span>
                                <h1 class="text-white">Your Most Trusted Business Partner</h1>
                                <p class="lead">Holisticly procrastinate mission-critical convergence with reliable
                                    customer service. Assertively underwhelm idea-sharing for impactful solutions. </p>

                                <div class="action-btns mt-3">
                                    <a href="#" class="btn secondary-solid-btn">Get Start Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap text-white">
                                <span class="text-uppercase">We Provided Best Solution</span>
                                <h1 class="text-white">Creative Digital Agency</h1>
                                <p class="lead">If your WordPress website is your personal business, we
                                    want you to succeed. We made our Hostlar hosting platform.</p>

                                <ul class="list-unstyled tech-feature-list text-white">
                                    <li class="py-1"><span style="float: right" class="ti-control-forward ml-2"></span>صرفه جویی در <strong>هزینه ها</strong></li>
                                    <li class="py-1"><span style="float: right" class="ti-control-forward ml-2"></span><strong>Cost</strong>Accounting Fundamentals</li>
                                    <li class="py-1"><span style="float: right" class="ti-control-forward ml-2"></span><strong>Corporate</strong> Cash Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--custom indicator list start-->
        <ul style="direction: rtl" id="carousel-custom-indicator" class="owl-dots list-inline text-center custom-indicators">
            <li class="list-inline-item">
                <button class="d-flex align-items-center gray-light-bg"><span
                            class="ti-direction-alt icon-sm color-secondary ml-2"></span> مسکونی
                </button>
            </li>
            <li class="list-inline-item">
                <button class="d-flex align-items-center gray-light-bg"><span
                            class="ti-wallet icon-sm color-secondary ml-2"></span> تجاری
                </button>
            </li>
            <li class="list-inline-item">
                <button class="d-flex align-items-center gray-light-bg"><span
                            class="ti-announcement icon-sm color-secondary ml-2"></span> سازمانی
                </button>
            </li>
        </ul>
        <!--custom indicator list end-->
    </section>
    <!--hero section end-->

    <!--about us section start-->
    <section id="features" class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around align-items-center">

                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <h5><span class="ti-reload icon-md color-primary mt-2 ml-4"></span>یکپارچه سازی </h5>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <h5><span class="ti-pie-chart icon-md color-primary mt-2 ml-4"></span>گزارشات برخط </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <h5><span class="ti-credit-card icon-md color-primary mt-2 ml-4"></span>پرداخت آنلاین </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <div class="promo-block-content">
                                    <h5><span class="ti-eye icon-md color-primary mt-2 ml-4"></span>شفاف سازی </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <div class="promo-block-content">
                                    <h5><span class="ti-lock icon-md color-primary mt-2 ml-4"></span>امنیت  </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0">
                                <div class="promo-block-content">
                                    <h5><span class="ti-headphone-alt icon-md color-primary mt-2 ml-4"></span>پشتیبانی </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>قابلیت های کلیدی سامانه</h2>
                        <p> توضیحات کلیدی سامانه توضیحات کلیدی سامانه توضیحات کلیدی سامانه توضیحات کلیدی سامانه توضیحات کلیدی سامانه توضیحات کلیدی سامانه </p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span style="float: right;" class="ti-check-box ml-2 color-secondary"></span>صرفه جویی در <strong>هزینه ها</strong></li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span>شفاف سازی <strong>فرآیندها</strong>، هزینه ها و درآمدها</li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span> دسترسی سریع به <strong>گزارشات</strong> و آمارهای لازم</li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span> ایجاد زیر ساخت مناسب جهت <strong>مشارکت در تصمیمات</strong> و اخذ نظرات </li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span> <strong>تسریع در محاسبه</strong> عملیات مالی  </li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span> <strong>نظارت</strong> همگانی بصورت برخط توسط کلیه مالکین و ساکنین </li>
                            <li class="py-1"><span style="float: right" class="ti-check-box ml-2 color-secondary"></span> <strong>کاهش سیکل زمانی</strong> ارتباطات متقابل بین ساکنین و مدیریت </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--about us section end-->


    <!--feature section start-->
    <section class="feature-content-two ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-4">
                        <h2>برخی از ماژول های سامانه</h2>
                        <p class="lead">برخی از ماژول ها و خدمات کلی سامانه جامع یکپارچه مجتمع های مسکونی و تجاری</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-stats-up icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">برنامه و بودجه </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-rss-alt icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">مدیریت شارژ </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-user icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2">مالکین و ساکنین </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-check-box icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> اطلاعات پایه</h5>
                    </div>
                </div>



                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> رای گیری و نظرسنجی</h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-wallet icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت هزینه ها </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-wallet icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت درآمد ها </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-wallet icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> حسابداری</h5>
                    </div>
                </div>







                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> خدمات رفاهی </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-files icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت قراردادها </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-comments icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت درخواست ها </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> نظارت</h5>
                    </div>
                </div>






                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت وبسایت </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-harddrives icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> تعمیرات و نگهداری  </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-world icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> مدیریت مستندات  </h5>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="feature-feature-list p-2 text-center border rounded my-md-3 my-lg-3 my-sm-0">
                        <span class="ti-announcement icon-sm d-block color-secondary mb-3"></span>
                        <h5 class="mb-2"> سامانه ارسال پیامک </h5>
                    </div>
                </div>






            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--promo section start-->
    <section class="call-to-action ptb-100 gradient-overlay"
             style="background: url('img/slider-img-3.jpg')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="app-business-content text-center text-white">
                        <h2 class="text-white">روش های دسترسی به سامانه</h2>
                        <p class="lead">بزودی، دسترسی به سامانه از طریق نرم افزار های موبایل فعال خواهد شد.</p>

                        <div class="action-btns mt-5">
                            <ul style="text-align: center" class="list-inline app-download-list">

                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-apple icon-sm ml-3"></span>
                                        <div class="download-text text-left">
                                            <h5 class="mb-0">اپل استور</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-google-play icon-sm ml-3"></span>
                                        <div class="download-text text-left">
                                            <h5 class="mb-0">گوگل پلی</h5>
                                        </div>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-chrome icon-sm ml-3"></span>
                                        <div class="download-text text-left">
                                            <h5 class="mb-0">تت وب</h5>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--testimonial section start-->
    <!--<section class="testimonial-section ptb-100">-->
    <!--<div class="container">-->
    <!--<div class="row justify-content-center">-->
    <!--<div class="col-md-9 col-lg-8">-->
    <!--<div class="section-heading mb-5 text-center">-->
    <!--<h2>نظر مشتریان درباره سامانه</h2>-->
    <!--<p class="lead">-->
    <!--در این بخش، نظرات مشتریان سامانه را مشاهده مینمایید که با کلیک برروی هر نظر، به صفحه مربوط به گواهی حسن انجام کار هدایت خواهید شد.-->
    <!--</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="row">-->
    <!--<div class="col-md-12 col-lg-12">-->
    <!--<div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">-->
    <!--<div class="item">-->
    <!--<div class="testimonial-single shadow-sm gray-light-bg rounded p-4">-->
    <!--<blockquote>-->
    <!--متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست تست متن تست متن تست متن تست-->
    <!--</blockquote>-->
    <!--<div class="client-img d-flex align-items-center justify-content-between pt-4">-->
    <!--<div class="d-flex align-items-center">-->
    <!--<img src="img/client-1.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm ml-3"/>-->
    <!--<div class="client-info">-->
    <!--<h5 class="mb-0">علی رحمانی</h5>-->
    <!--<small class="mb-0">مدیر اجرایی برج ...</small>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--<div class="testimonial-single shadow-sm gray-light-bg rounded p-4">-->
    <!--<blockquote>-->
    <!--متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست تست متن تست متن تست متن تست-->
    <!--</blockquote>-->
    <!--<div class="client-img d-flex align-items-center justify-content-between pt-4">-->
    <!--<div class="d-flex align-items-center">-->
    <!--<img src="img/client-2.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm ml-3"/>-->
    <!--<div class="client-info">-->
    <!--<h5 class="mb-0">علی رحمانی</h5>-->
    <!--<small class="mb-0">مدیر اجرایی برج ...</small>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--<div class="testimonial-single shadow-sm gray-light-bg rounded p-4">-->
    <!--<blockquote>-->
    <!--متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست تست متن تست متن تست متن تست-->
    <!--</blockquote>-->
    <!--<div class="client-img d-flex align-items-center justify-content-between pt-4">-->
    <!--<div class="d-flex align-items-center">-->
    <!--<img src="img/client-3.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm ml-3"/>-->
    <!--<div class="client-info">-->
    <!--<h5 class="mb-0">علی رحمانی</h5>-->
    <!--<small class="mb-0">مدیر اجرایی برج ...</small>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item">-->
    <!--<div class="testimonial-single shadow-sm gray-light-bg rounded p-4">-->
    <!--<blockquote>-->
    <!--متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست متن تست تست متن تست متن تست متن تست-->
    <!--</blockquote>-->
    <!--<div class="client-img d-flex align-items-center justify-content-between pt-4">-->
    <!--<div class="d-flex align-items-center">-->
    <!--<img src="img/client-4.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm ml-3"/>-->
    <!--<div class="client-info">-->
    <!--<h5 class="mb-0">علی رحمانی</h5>-->
    <!--<small class="mb-0">مدیر اجرایی برج ...</small>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</section>-->
    <!--testimonial section end-->


    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-3">
                        <h2>هزینه پیاده سازی نرم افزار</h2>
                        <p class="lead">در این بخش میتوانید هزینه نرم افزار را باتوجه به تعداد واحد های مجتمع خود محاسبه نمایید.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="direction: rtl!important;text-align: right!important;" class="container">
                        <div class="price-box">
                            <form class="form-horizontal form-pricing" role="form">
                                <div class="price-slider">
                                    <h4 class="great ml-1">هزینه</h4>
                                    <span style="font-family: iranyekan;font-size: 17px" class="mr-3">تعداد واحد مجتمع خودرا انتخاب نمایید:</span>
                                    <div class="col-sm-12">
                                        <div style="font-family: BYekan!important;" id="slider"></div>
                                    </div>
                                </div>
                                <div class="price-form">
                                    <div style="height: 50px;" class="form-group">
                                        <label for="amount" class="col-sm-6 control-label"> ماهانه / واحد: </label>
                                        <div class="col-sm-6 d-inline">
                                            <input type="hidden" id="amount" class="form-control">
                                            <p style="font-family: BYekan!important;" class="price lead" id="amount-label"></p>
                                            <span style="font-size: 16px">هزارتومان</span>
                                            <span style="font-family: iranyekan!important;" class="price"></span>
                                        </div>
                                    </div>
                                    <div style="height: 70px;" class="form-group">
                                        <label for="percentage" class="col-sm-6 control-label">تخفیف: </label>
                                        <div class="col-sm-6 d-inline">
                                            <input  type="hidden" id="percentage" class="form-control">
                                            <p style="font-family: BYekan!important;" class="price lead" id="percentage-label"></p>
                                            <span class="price">%</span>
                                        </div>
                                    </div>
                                    <hr class="style">
                                    <div style="height: 50px;" class="form-group total">
                                        <label for="total" class="col-sm-6 control-label"><strong>قیمت کل: </strong></label>
                                        <div class="col-sm-6 d-inline">
                                            <input type="hidden" id="total" class="form-control">
                                            <p style="font-family: BYekan!important;" class="price lead" id="total-label"></p>
                                            <span style="font-size: 16px">هزار تومان / ماه</span>
                                            <span class="price"></span>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->


    <!--blog section start-->
    <section style="display: none" class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>مقالات رایگان</h2>
                        <p class="lead">
                            در این بخش برخی مقالات رایگان را درخصوص مدیریت مجتمع های مسکونی و تجاری مشاهده مینمایید.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">دسته بندی</span></a>
                            <a href="#"><img src="img/blog/1.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">عنوان مقاله</a></h3>
                            <p class="card-text"> توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله </p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">مشاهده ادامه</a>
                                    <small>۲ شهریور ۹۹</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">دسته بندی</span></a>
                            <a href="#"><img src="img/blog/2.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">عنوان مقاله</a></h3>
                            <p class="card-text"> توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله </p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">مشاهده ادامه</a>
                                    <small>۲ شهریور ۹۹</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">دسته بندی</span></a>
                            <a href="#"><img src="img/blog/3.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">عنوان مقاله</a></h3>
                            <p class="card-text"> توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله توضیحات مقاله </p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">مشاهده ادامه</a>
                                    <small>۲ شهریور ۹۹</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <div class="client-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">

                        <p class="lead">
                            تصاویر برخی از بخش های سامانه
                        </p>
                    </div>
                </div>
            </div>
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div style="width: 550px" class="item single-client"><img src="img/pics/1.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/2.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/3.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/4.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/5.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/6.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/7.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/8.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/9.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/10.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/11.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/12.png" alt="client logo" class="client-img"></div>
                        <div style="width: 550px" class="item single-client"><img src="img/pics/13.png" alt="client logo" class="client-img"></div>

                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
@endsection

@section('footerScripts')
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#slider").slider({
                animate: true,
                value:1,
                min: 0,
                max: 399,
                step: 1,
                slide: function(event, ui) {
                    update(1,ui.value); //changed
                }
            });
            //Added, set initial value.
            $("#amount").val(0);
            $("#amount-label").text(0);

            update();
        });

        //changed. now with parameter
        function update(slider,val) {
            //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
            var $amount = slider == 1?val:$("#amount").val();

            /* commented
            $amount = $( "#slider" ).slider( "value" );
             */
            if( $amount <=  20 ){
                $total = "" + (($amount * 3) );
                $('#percentage-label').html('3');
            }else if($amount <=  100){
                $total = "" + (($amount * 6) );
                $('#percentage-label').html('6');
            }
            else{
                $total = "" + (($amount * 25) );
                $('#percentage-label').html('25');
            }
            //$total = "₹" + (($amount * 10)  / 100);
            $( "#amount" ).val($amount);
            $( "#amount-label" ).text($amount);
            $( "#total" ).val($total);
            $( "#total-label" ).text($total);

            $('#slider a').html('<label style="font-family: BYekan!important;"><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right text-white">واحد</span></label>');

        }
    </script>
@stop