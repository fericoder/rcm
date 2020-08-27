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
    <style>
        .site-blocks-cover.overlay:before{
            background: rgb(52 58 64 / 62%);
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" class="borj-rtl">

<div class="site-wrap">

    <div id="menu" style="display: none" class="site-mobile-menu site-navbar-target">
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


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" id="toggle" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(https://olympictower.ir/website/images/slider/8.jpg);" data-aos="fade" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mt-lg-5 text-center">
                    <h1>{{ $complex->name }}</h1>
                    <p class="mb-5">{{ $website->slogan }}</p>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/login"><button class="btn btn-primary btn-md text-white" />ورود به سامانه {{ $complex->name }}</div></a>
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
                        <img style="max-height: 400px" src="/website/images/slider/8.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/1.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/2.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/3.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/4.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/5.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/6.jpg" alt="Image" class="img-fluid">
                        <img style="max-height: 400px" src="/website/images/slider/7.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div style="right: 0%;" class="custom-direction">

                        <a href="#" class="custom-next"><بعدی | </a>
                        <a href="#" class="custom-prev">قبلی></a>
                    </div>

                </div>
                <div class="col-lg-5 ml-auto">

                    <h2 style="" class="section-title">درباره {{ $complex->name }}</h2>
                    <p style="font-family: BYekan!important; direction: rtl;    ;" class="">
                        برج های دو قلوی مسکونی المپیک در زمینی به وسعت 18700 مترمربع و با زیربنای بیش از 120،000 مترمربع در منطقه22 تهران در میدان المپیک، احداث شده است. <br><br>
                        پروژه مسکونی المپیک یک مجموعه مسکونی 346 واحدی است که شامل 22 طبقه مسکونی، یک طبقه لابی و 3 طبقه زیرزمین می باشد.
                        <br> <br>
                        این پروژه یکی از زیباترین و بزرگترین پروژه های ساختمانی منطقه محسوب شده و دسترسی بسیار مناسب آن از جمله ویژگی های حائز اهمیت این پروژه می باشد.
                        معماری چشم نواز برج ها با طراحی گروه مهندسی طاها همراه با امکانات و خدمات رفاهی کامل و مناسب، این مجتمع مسکونی را تبدیل به مجموعه ای لوکس و منحصربه فرد کرده است.

                    </p>
                </div>



                <style>
                    .lead{
                        direction: rtl;
                    }
                </style>

                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">محوطه</h1>
                        <p class="lead">
                            محوطه ی برج های مسکونی المپیک با الهام از طرح الگوی باغ ایرانی در وسعت حدود ده هزار متر مربع شامل حوضچه و آبنما و باغچه های کوچک و متنوع و دارای بیش از 70 گونه گل و گیاه معطر و رنگارنگ و سنگ فرش های متنوع، طراحی و اجرا گردیده که فضای شاد و مفرحی را برای ساکنین برج ها به ارمغان آورده است.
                            همچنین برای امکان اجرای برنامه های نمایشی در مرکز محوطه، فضای آمفی تئاتر روباز و در طرفین آن دو مجموعه آلاچیق در نظر گرفته شده است.
                            از دیگر امکانات محوطه می توان به زمین بازی کودکان، گلخانه، نیمکت و مبلمان شهری و تجهیزات صوتی برای پخش موسیقی در اوقات مناسب اشاره نمود.
                            در محوطه شمالی برج ها، امکاناتی شامل آبنماها، دیوار سبز، مبلمان شهری و فضای دسترسی خودرو جهت تخلیه و بارگیری اسباب و اثاثیه در نظر گرفته شده است.

                        </p>
                    </div>
                </div>



                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">واحدها</h1>
                        <p class="lead">
                            در این پروژه، واحد آپارتمانی با طرح¬ها، متراژها و چشم¬اندازهای مختلف وجود دارد ، تمامی واحدها بیش از 150 مترمربع زیربنا داشته و سه خوابه می¬باشند. طبقه 22 هر برج دارای دو واحد پنت هوس 560 متری چهار خوابه می باشد.
                            دیوار واحدها از بلوک سبک سیمانی آهکی ساخته شده که عایق صوتی و حرارتی می باشند.
                            دربهای ورودی واحدها، با طرح انحصاری کلاسیک، از چوب بلوط کانادایی و منبت های راش گرجستان و دربهای داخلی، کمدها و قرنیزها از ترکیب بهترین چوب و ام دی اف و روکش بلوط کانادایی ساخته شده اند.
                            پنجره های آلومینیومی، با پروفیل های اروپایی با یراق آلات GU آلمان و شیشه ونوس می باشد.

                        </p>
                    </div>
                </div>



                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">تراس</h1>
                        <p class="lead">
                            از مزیت ها و طراحی حرفه ای این برج ها، وجود تراس روباز و مسقف با منظره ای زیبا برای هر واحد مسکونی بوده و هیچ واحد مسکونی از این امکان مستثنی نمی باشد.

                        </p>
                    </div>
                </div>


                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">آسانسورها</h1>
                        <p class="lead">
                            شرکت سازنده آسانسورهای این مجموعه، کمپانی بزرگ KONE، یک شرکت فنلاندی است.
                            شرکت KONE، از پیشرو ترین شرکت های صنعت آسانسور و پله برقی در جهان و دومین برند مطرح در دنیا  میباشد.
                            در برج های مسکونی المپیک 12 دستگاه آسانسور وجود دارد که در چهار گروه 3 تایی تقسیم شده اند، تا ساکنین برجها، کمترین زمان انتظار برای سوار شدن را تجربه نمایند.
                            سرعت این آسانسورها 2 متر برثانیه و بیشتر از آسانسورهای معمولی است و مسافرین را در کمتر از 40 ثانیه به بام این برج¬ها می رساند.
                            4 دستگاه از آسانسورهای این مجموعه با قابلیت حمل برانکارد بوده و 2 دستگاه از آنها بدون موتورخانه طراحی شده تا بتوان برانکارد را بطور مستقیم به بام ساختمان و محل فرود آمبولانس هوایی انتقال داد.
                            برخی از امکانات این آسانسور، مانند امکان ارتباط داخلی، سیستم تراز اتوماتیک، تابلوی هوشمند با قابلیت اتصال به سیستم اعلام حریق، سیستم مخصوص آتش نشانی، سیستم سرویس VIP، سیستم رفع مزاحم اتوماتیک، سیستم کنسلینگ مقصد توسط مسافر و قابلیت دسترسی به طبقات توسط کارت اختصاصی، این دستگاه را منحصر به فرد ساخته است.

                        </p>
                    </div>
                </div>


                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">مجموعه ورزشی</h1>
                        <p class="lead">
                            مجموعه ورزشی مجتمع مسکونی بوستان آینده در فضایی به مساحت 2800 متر مربع در طبقات منفی 3 و منفی 4 مجتمع تجاری قرار گرفته است.
                            امکانات متنوع، جذاب و کم نظیر این مرکزعبارتند از: استخر بزرگسالان با ابعاد25 در 12 و نیم متر، استخر آب درمانی برای استفاده افراد دارای ناراحتی مفاصل و دیسک کمر در ابعاد 12 و نیم در 7 متر، مجهز به تردمیل در آب جهت حرکت های فیزیوتراپی، استخر کودکان و خردسالان در ابعاد 10 در 10 متر مجهز به سرسره آبی، سوناهای بخار گرم، سرد و خشک، و امکانات دیگری از جمله دو دستگاه جکوزی 8 نفره، آبشار آب سرد، راهرو و تونل مه، اتاق نمک، حمام سنتی، اتاق ماساژ، بوفه و سالن بدن سازی در فضایی به مساحت 500 متر مربع، با تجهیزات کاملا پیشرفته می باشد.

                        </p>
                    </div>
                </div>

                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">تاسیسات</h1>
                        <p class="lead">
                            تهویه مطبوع برج¬ها در فصل گرم توسط چهار دستگاه چیلر توربوکور سانتریفیوژ، ساخت کشور آلمان که آخرین تکنولوژی در ساخت چیلر می باشد، تامین می شود.
                            همچنین 4 دستگاه هواساز در بام برج ها، وظیفه تامین هوای تازه برای فضای داخل واحدها و مشاعات را بر عهده دارد.
                            سیستم هیت ریکاوری به منظور استفاده از انرژی گرمایشی حاصل از کارکرد چیلرها، توسط پمپ و مبدلهای حرارتی برای تامین انرژی استخر و آب گرم مصرفی اجرا گردیده است .
                            برای جلوگیری از هدر رفت انرژی با راندمان بیش از 98 درصد، بویلر های چگالشی در این موتورخانه به کار رفته است.
                            در کلیه واحدها، سیستم آب رسانی آب مصرفی و آب شرب به طور جداگانه بوده و برای بهبود کیفیت آب شرب واحدها، سیستم تصفیه ثانویه طراحی و اجرا شده است.
                            سیستم قرائت مرکزی مصرف آب واحدها توسط معتبر ترین شرکت کنترل مصرف در اروپا تهیه و نصب شده و مقدار آب مصرفی هر واحد به تفکیک گرم و سرد، توسط این سیستم پایش می شود.
                            در اجرای سیستم آب گرم با استفاده از پمپ ها و مبدل های صفحه ای و شیرهای کنترل جریان، بالاترین راندمان حرارتی و جلوگیری از اتلاف انرژی اجرا شده است.
                            در صورت قطع برق شهری، دیزل ژنراتورهای تعبیه شده در موتورخانه پس از چند ثانیه به طور خودکار وارد مدار شده و تامین برق اضطراری پمپ های آب، اگزاست فن ها، آسانسورها، روشنایی مشاعات و سیستم اعلام و اطفای حریق را تامین مینماید.
                            تصفیه خانه فاضلاب با رویکرد استفاده حداکثری از آب با روش هوازی ایجاد شده  و آب تصفیه شده، در چرخه آبیاری فضای سبز استفاده می شود.
                            عملکرد موتورخانه مرکزی، توسط سیستم مکانیزه شامل: سنسورها و تجهیزات خودکار با قابلیت نظارت از راه دور تحت کنترل می باشد.

                        </p>
                    </div>
                </div>


                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">پارکینگ ها</h1>
                        <p class="lead">
                            برج های المپیک دارای سه طبقه پارکینگ بوده که از طریق درب ورودی ساختمان در دسترس می باشند، هر واحد دارای دو پارکینگ و دارای روشنایی مناسب، رمپ های استاندارد و امکان گردش و مانور آسان می باشد .
                            آیفون تصویری، پریز برق سه کاره و ماهواره مرکزی، سیستم اعلام و اطفاء حریق، از بهترین برندهای موجود در کشور برای کلیه واحدها نصب و اجرا شده است.

                        </p>
                    </div>
                </div>


                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">طبقه همکف</h1>
                        <p class="lead">
                            طبقه همکف برج¬ها فضاهای کاربردی مختلفی دارد. فضاهایی همچون سالن سینما، سالن بیلیارد، مهدکودک، نمازخانه، کتابخانه، آرایشگاه مردانه، آرایشگاه زنانه، سالن اجتماعات بزرگ، سالن اجتماعات کوچک، کافی شاپ و گیم نت.
                            ایجاد فضایی جذاب با عملکرد درست و مناسب در ورودی مجتمع مسکونی به عنوان بخش دعوت کننده برای مدعوین و مالکین ارزشمند می¬باشد.
                            به همین جهت لابی طبقه همکف با همکاری نیروهای مجرب و استفاده از آخرین تکنولوژی¬های ساخت و انتخاب مصالح مرغوب و به¬روز، در سه بخش : لابی مرکزی شامل بخش اطلاع رسانی و کافی شاپ، لابی شرقی و لابی غربی شامل آسانسورها و نشیمن¬های زیبا و مناسب طراحی و اجرا گردیده است.
                            تلفیق و هماهنگی مصالح در کفسازی، جداره¬ها و سقف¬های کاذب فضایی دلنشین و آرام را ایجاد نموده است که آنها با دیوار¬های سبز ، آبنماها، فضای سبز و همچنین نورپردازی¬های مناسب به همراه پنجره-هایی که نور طبیعی را به داخل مجموعه هدایت می¬کنند، کامل شده است.
                            کفسازی¬ها از سنگ¬های مرغوب و ترکیب رنگ و با استفاده از تکنیک CNC شکل گرفته که در بدو ورود به لابی مرکزی جلوه¬اش به اوج رسیده، گویی فرش بسیار زیبایی از سنگ در آنجا پهن است.
                            در نهایت نقاشی¬های متفاوت روی دیوارها و سقف¬ها با تلفیق رنگها به خصوص رنگهای مورد استفاده در معماری ایرانی تزیین گردیده که به محیط، زیبایی دو چندانی بخشیده است.
                            در نمای برجها از متریال ترکیبی آجر و سیمان شسته، استفاده شده است.

                        </p>
                    </div>
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


                @if($website->hypermarket == 'on')
                    <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                        <div class="pr-5">
                            <i class="custom-icon fa fa-shopping-basket text-primary"></i>
                            <h3 class="text-dark">هایپرمارکت</h3>
                        </div>
                    </div>
                @endif

                    @if($website->cinema == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-film text-primary"></i>
                                <h3 class="text-dark">سینما</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->salonbadansazi == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-dribbble text-primary"></i>
                                <h3 class="text-dark">سالن بدنسازی</h3>
                            </div>
                        </div>
                    @endif



                    @if($website->mahdekoodak == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-child text-primary"></i>
                                <h3 class="text-dark">مهدکودک</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->barghezterari == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-plug text-primary"></i>
                                <h3 class="text-dark">برق اضطراری</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->coffeshop == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-coffee text-primary"></i>
                                <h3 class="text-dark">کافی شاپ</h3>
                            </div>
                        </div>
                    @endif



                    @if($website->labi == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon flaticon-home text-primary"></i>
                                <h3 class="text-dark">لابی مجلل</h3>
                            </div>
                        </div>
                    @endif

                    @if($website->arayeshgahzanane == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-female text-primary"></i>
                                <h3 class="text-dark">آرایشگاه زنانه</h3>
                            </div>
                        </div>
                    @endif



                    @if($website->arayeshgahmardane == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-male text-primary"></i>
                                <h3 class="text-dark">آرایشگاه مردانه</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->masaj == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-bed text-primary"></i>
                                <h3 class="text-dark">اتاق ماساژ</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->pent == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon flaticon-flat text-primary"></i>
                                <h3 class="text-dark">پنت هاوس</h3>
                            </div>
                        </div>
                    @endif

                    @if($website->salontadris == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-pencil text-primary"></i>
                                <h3 class="text-dark">سالن تدریس خصوصی</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->charge == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon flaticon-mobile-phone text-primary"></i>
                                <h3 class="text-dark">سامانه هوشمند</h3>
                            </div>
                        </div>
                    @endif

                    @if($website->amfi == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-sign-language text-primary"></i>
                                <h3 class="text-dark">سالن آمفی تئاتر</h3>
                            </div>
                        </div>
                    @endif

                    @if($website->ketabkhune == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-book text-primary"></i>
                                <h3 class="text-dark">کتابخانه عمومی</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->asansor == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-trello text-primary"></i>
                                <h3 class="text-dark">آسانسور باربری</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->bms == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon flaticon-home text-primary"></i>
                                <h3 class="text-dark">سیستم BMS</</h3>
                            </div>
                        </div>
                    @endif


                    @if($website->harigh == 'on')
                        <div class="col-md-4 p-3 text-center" data-aos="fade-up">
                            <div class="pr-5">
                                <i class="custom-icon fa fa-fire-extinguisher text-primary"></i>
                                <h3 class="text-dark">سیستم اعلام و اطفا حریق</h3>
                            </div>
                        </div>
                    @endif



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


    <section style="display: none" class="site-section border-bottom" id="team-section">
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
                            بازگشایی واحد های تجاری باعث افزایش سطح رفاه ساکنین خصوصا در دوران کرونا شده است. باتشکر
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>هنگامه رییسی</p>
                    </figure>
                </div>
            </div>


            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                                این برج بدون شک برترین سازه مسکونی منطقه ۲۲ میباشد
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>علی رحیمی</p>
                    </figure>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <blockquote class="mb-5">
                        <p>&ldquo;
                            سکونت در این برج، به رویاهای من لباس واقعیت تن کرد.
                            &rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <p>اکبر رضایی</p>
                    </figure>
                </div>
            </div>




        </div>
    </section>





        <section class="site-section bg-white " id="">
            <div class="container ">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">آیین نامه ها و فرمها </h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                   aria-selected="true">آیین نامه ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                   aria-selected="false">اساس نامه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                   aria-selected="false">فرم ها</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table style="padding: 40px; text-align: center" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">دریافت</th>
                                        <th scope="col">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>۱</td>
                                        <td>آیین نامه برج</td>
                                        <td><a target="_blank" href="/files/aeinnameMoamelati.pdf">جهت دریافت کلیک نمایید</a></td>
                                        <td>۱۳۹۹/۰۲/۲۰</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table style="padding: 40px; text-align: center" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">دریافت</th>
                                        <th scope="col">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>۱</td>
                                        <td>اساس نامه برج</td>
                                        <td><a target="_blank" href="/files/asasnameh.pdf">جهت دریافت کلیک نمایید</a></td>
                                        <td>۱۳۹۹/۰۲/۲۰</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table style="padding: 40px; text-align: center" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">دریافت</th>
                                        <th scope="col">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>۱</td>
                                        <td> درخواست تغییر مستاجر یا مالک</td>
                                        <a href=""><td>جهت دریافت کلیک نمایید</td></a>
                                        <td>۱۳۹۹/۰۲/۲۰</td>
                                    </tr>
                                    <tr>
                                        <td>۲</td>
                                        <td> تطبیق حساب شارژ</td>
                                        <a href=""><td>جهت دریافت کلیک نمایید</td></a>
                                        <td>۱۳۹۹/۰۲/۲۰</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                    <form action="{{ route('website.massage', $complex->id) }}" method="post" class="p-5 bg-white">
                        @csrf
                        <h2 class="h4 text-black mb-5">تماس باما:</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">نام و نام خانوادگی</label>
                                <input type="text" name="fullName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">تلفن</label>
                                <input type="text" name="phone" class="form-control">
                                <input style="display: none;" type="hidden" value="{{ $complex->id }}" name="cciiiddd" >
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">متن پیام:</label>
                                <textarea style="font-family: BYekan" name="massage" cols="30" rows="7" class="form-control" placeholder="لطفا متن پیام خود را وارد کنید"></textarea>
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

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4166.674066118609!2d51.263574953699!3d35.744509970444035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x893034dc88e3c66f!2sOlympic&#39;s%20Twin%20Towers!5e0!3m2!1sen!2s!4v1585482854029!5m2!1sen!2s" width="400" height="375" frameborder="0" style="border:0;max-width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                            قدرت گرفته از سامانه: <a href="" target="_blank" >مدیریت مجتمع مسکونی</a>
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

<script src="/dashboard/assets/js/sweetalert.min.js"></script>
@include('sweet::alert')
<script>
    $( "#toggle" ).on("click", function() {
        $("#menu").removeAttr("style");
    });
</script>
</body>
</html>
