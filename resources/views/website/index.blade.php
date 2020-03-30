<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ $complex->name }} </title>
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
                            <li><a href="#howitworks-section" class="nav-link">امکانات</a></li>
                            <li><a href="#gallery-section" class="nav-link">تصاویر</a></li>
                            <li><a href="#team-section" class="nav-link">تیم اجرایی</a></li>
                            <li><a href="#contact-section" class="nav-link">تماس باما</a></li>
                            <li><a href="/login" class="nav-link">ورود به سامانه</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(/website/images/1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-lg-5 text-center">
                    <h1>{{ $complex->name }}</h1>
                    <p class="mb-5">اوج آرامش در بهترین برج منطقه ۲۲ تهران</p>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/login"></a><button class="btn btn-primary btn-md text-white" />ورود به سامانه مدیریت {{ $complex->name }}</div>
                        </div>
                    </div>
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

                        <a href="#" class="custom-next"><بعدی | </a>
                        <a href="#" class="custom-prev">قبلی></a>
                    </div>

                </div>
                <div class="col-lg-5 ml-auto">

                    <h2 class="section-title mb-3">درباره {{ $complex->name }}</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit  Quo suscipit omnis iste velit maxime.</p>

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
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-shopping-basket text-primary"></i>
                        <h3 class="text-dark">هایپرمارکت</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-film text-primary"></i>
                        <h3 class="text-dark">سینما</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-dribbble text-primary"></i>
                        <h3 class="text-dark">سالن بدنسازی</h3>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-child text-primary"></i>
                        <h3 class="text-dark">مهدکودک</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-plug text-primary"></i>
                        <h3 class="text-dark">برق اضطراری</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-coffee text-primary"></i>
                        <h3 class="text-dark">کافی شاپ</h3>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon flaticon-home text-primary"></i>
                        <h3 class="text-dark">لابی مجلل</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-female text-primary"></i>
                        <h3 class="text-dark">آرایشگاه زنانه</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-male text-primary"></i>
                        <h3 class="text-dark">آرایشگاه مردانه</h3>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-bed text-primary"></i>
                        <h3 class="text-dark">اتاق ماساژ</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon flaticon-flat text-primary"></i>
                        <h3 class="text-dark">پنت هاوس</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-pencil text-primary"></i>
                        <h3 class="text-dark">سالن تدریس خصوصی</h3>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon flaticon-mobile-phone text-primary"></i>
                        <h3 class="text-dark">پرداخت شارژ از طریق موبایل</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-sign-language text-primary"></i>
                        <h3 class="text-dark">سالن آمفی تئاتر</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-book text-primary"></i>
                        <h3 class="text-dark">کتابخانه عمومی</h3>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-trello text-primary"></i>
                        <h3 class="text-dark">آسانسور باربری</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon flaticon-home text-primary"></i>
                        <h3 class="text-dark">سیستم BMS</</h3>
                    </div>
                </div>

                <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                    <div class="pr-5">
                        <i class="custom-icon fa fa-fire-extinguisher text-primary"></i>
                        <h3 class="text-dark">سیستم اعلام و اطفا حریق</h3>
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
                </div>
            </div>
            <div class="row">

                @foreach ($personnels as $personnel)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="team-member">
                            <figure>
                                <img src="{{ $personnel->picture }}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3 class="mb-2">{{ $personnel->fullName }}</h3>
                                <span class="position">{{ $personnel->position }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach




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

                        <h2 class="h4 text-black mb-5">تماس باما:</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">نام و نام خانوادگی</label>
                                <input type="text" name="fullName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">تلفن</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">متن پیام:</label>
                                <textarea style="font-family: BYekan" name="message" cols="30" rows="7" class="form-control" placeholder="لطفا متن پیام خود را وارد کنید"></textarea>
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
                        <p class="mb-0 font-weight-bold">آدرس:</p>
                        <p class="mb-4 byekan">{{ $complex->address }}</p>

                        <p class="mb-4 font-weight-bold">نشانی {{ $complex->name }} در نقشه:</p>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4166.674066118609!2d51.263574953699!3d35.744509970444035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x893034dc88e3c66f!2sOlympic&#39;s%20Twin%20Towers!5e0!3m2!1sen!2s!4v1585482854029!5m2!1sen!2s" width="400" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                             تمامی حقوق محفوظ برای {{ $complex->name }}می باشد.  <br>
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
