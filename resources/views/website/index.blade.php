<!DOCTYPE html>
<html lang="en">
<head>
    <title>برج &mdash; ورود</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="/website/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/website/css/bootstrap.min.css">
    <link rel="stylesheet" href="/website/css/jquery-ui.css">
    <link rel="stylesheet" href="/website/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/website/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/website/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/website/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/website/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/website/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/website/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/website/css/aos.css">

    <link rel="stylesheet" href="/website/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="borj-rtl">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo m-0 p-0"><a href="/" class="mb-0">{{ $complex->name }}</a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">صفحه اصلی</a></li>
                            <li><a href="#about-section" class="nav-link">درباره</a></li>
                            <li><a href="#howitworks-section" class="nav-link">خدمات</a></li>
                            <li><a href="#gallery-section" class="nav-link">گالری تصاویر</a></li>
                            <li><a href="#team-section" class="nav-link">تیم اجرایی</a></li>
                            <li><a href="#features-section" class="nav-link">امکانات</a></li>
                            <li><a href="#contact-section" class="nav-link">تماس باما</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-lg-5 text-center">
                    <h1>Buy and sell real estate properties</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>

                </div>
            </div>
        </div>

        <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>




    <section class="site-section borj-ltr" id="about-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div style="max-height: 400px" class="owl-carousel slide-one-item-alt">
                        <img style="max-height: 400px" src="/website/images/property_1.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/property_2.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/property_3.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/property_4.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="custom-direction">

                        <a href="#" class="custom-next">بعدی</a>
                        <a href="#" class="custom-prev">قبلی</a>
                    </div>

                </div>
                <div class="col-lg-5 ml-auto">

                    <h2 class="section-title mb-3">درباره {{ $complex->name }}</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit  Quo suscipit omnis iste velit maxime.</p>

                    <ul class="list-unstyled ul-check success">
                        <li>تراس</li>
                        <li>گیم نت</li>
                        <li>مهد کودک</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>



    <div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-3">خدمات</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-shopping-basket text-primary"></i>
                        <h3 class="text-dark">هایپرمارکت</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-film text-primary"></i>
                        <h3 class="text-dark">سینما</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-dribbble text-primary"></i>
                        <h3 class="text-dark">سالن بدنسازی و بیلیارد</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-child text-primary"></i>
                        <h3 class="text-dark">مهدکودک</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-plug text-primary"></i>
                        <h3 class="text-dark">برق اضطراری</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-coffee text-primary"></i>
                        <h3 class="text-dark">کافی شاپ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="gallery-section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-7 text-left">
                    <h2 class="section-title mb-3">برخی از تصاویر</h2>
                </div>
                <div class="col-md-5 text-left text-md-right">
                    <div class="custom-nav1">
                        <a href="#" class="custom-prev1">قبلی</a><span class="mx-3">/</span><a href="#" class="custom-next1">بعدی</a>
                    </div>
                </div>
            </div>

            <div class="owl-carousel nonloop-block-13 mb-5">
                @foreach ($pictures as $picture)
                    <div class="property">
                        <a href="">
                            <img src="{{ $picture->file }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="prop-details p-3">
                            <div><strong class="price">{{ $picture->description }}</strong></div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </div>


    <section class="site-section border-bottom" id="team-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 text-left">
                    <h2 class="section-title mb-3">تیم اجرایی</h2>
                    <p class="lead">دراین قسمت لیست تیم اجرایی و هیات مدیره را مشاهده مینمایید</p>
                </div>
            </div>
            <div class="row">


                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="team-member">
                        <figure>
                            <img src="/website/images/person_5.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2">احمد رحمانی</h3>
                            <span class="position">خزانه دار</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="team-member">
                        <figure>
                            <img src="/website/images/person_5.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2">احمد رحمانی</h3>
                            <span class="position">خزانه دار</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="team-member">
                        <figure>
                            <img src="/website/images/person_5.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2">احمد رحمانی</h3>
                            <span class="position">خزانه دار</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="team-member">
                        <figure>
                            <img src="/website/images/person_5.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2">احمد رحمانی</h3>
                            <span class="position">خزانه دار</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="team-member">
                        <figure>
                            <img src="/website/images/person_5.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3 class="mb-2">احمد رحمانی</h3>
                            <span class="position">خزانه دار</span>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>






    <section class="site-section border-bottom bg-light" id="features-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">امکانات</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>تعداد واحدها</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>شارژ</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>لابی</h3>
                            <p>حضور لابی‌من یا نگهبان لابی برای افزایش امنیت ساختمان به شکل ۲۴ ساعته است.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-female" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>آرایشگاه زنانه</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-male" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>آرایشگاه مردانه</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-bed" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>اتاق ماساژ</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>پنت هاوس</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>موقعیت جغرافیایی و دسترسی</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>پرداخت شارژ از طریق موبایل</h3>
                            <p>حضور لابی‌من یا نگهبان لابی برای افزایش امنیت ساختمان به شکل ۲۴ ساعته است.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-pencil" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>سالن تدریس خصوصی</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-sign-language" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>سالن آمفی تئاتر</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-book" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>کتابخانه عمومی</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-columns" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>شش لاین آسانسور</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-trello" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>آسانسور باربری</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home" style="padding-left:10px;"></span></div>
                        <div>
                            <h3>سیستم BMS</h3>
                            <p>حضور لابی‌من یا نگهبان لابی برای افزایش امنیت ساختمان به شکل ۲۴ ساعته است.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-fire-extinguisher" style="padding-left:10px;  font-size: 3rem;"></i></div>
                        <div>
                            <h3>سیستم اعلام و اطفا حریق</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-users" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>سالن اجتماعات مجهز</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><i class="text-primary fa fa-unlock" style="padding-left:10px; font-size: 3rem;"></i></div>
                        <div>
                            <h3>درب ورودی ریموت دار</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">نظرات ساکنین پیرامون {{ $complex->name }}</h2>
                </div>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                            متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن ر متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>رضا رضایی</p>
                    </figure>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                            متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن ر متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>رضا رضایی</p>
                    </figure>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                            متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن ر متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>رضا رضایی</p>
                    </figure>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                            متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن ر متن  متن  متن  متن  متن  متن متن  متن  متن  متن  متن  متن
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>رضا رضایی</p>
                    </figure>
                </div>
            </div>

        </div>
    </section>




    <section class="site-section bg-light bg-image" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <!-- <h3 class="section-sub-title">Get</h3> -->
                    <h2 class="section-title mb-3">باما در ارتباط باشید</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mb-5">



                    <form action="#" class="p-5 bg-white">

                        <h2 class="h4 text-black mb-3">تماس باما</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">نام و نام خانوادگی</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">تلفن</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">پیام</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="لطفا پیام خود را وارد کنید"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="ارسال پیام" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-5">

                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">آدرس</p>
                        <p class="mb-4 byekan">{{ $complex->address }}</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                             تمامی حقوق محفوظ می باشد.  <br>
                            قدرت گرفته از سامانه: <a href="" target="_blank" >مدیریت محتمع مسکونی</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src="/website/js/jquery-3.3.1.min.js"></script>
<script src="/website/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/website/js/jquery-ui.js"></script>
<script src="/website/js/popper.min.js"></script>
<script src="/website/js/bootstrap.min.js"></script>
<script src="/website/js/owl.carousel.min.js"></script>
<script src="/website/js/jquery.stellar.min.js"></script>
<script src="/website/js/jquery.countdown.min.js"></script>
<script src="/website/js/bootstrap-datepicker.min.js"></script>
<script src="/website/js/jquery.easing.1.3.js"></script>
<script src="/website/js/aos.js"></script>
<script src="/website/js/jquery.fancybox.min.js"></script>
<script src="/website/js/jquery.sticky.js"></script>


<script src="/website/js/main.js"></script>

</body>
</html>
