<!DOCTYPE html>
<html class="no-js" lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ورود به سامانه مدیریت مسجتمع مسکونی</title>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
    <link rel='dns-prefetch' href='http://s.w.org/'/>
    <meta name="description" content="در سامانه سامانه مدیریت مسجتمع مسکونی علاوه بر آمار بازدید سایت ، تمام گزارشات اعم از بررسی SEO وبسایت ، رتبه کلمات کلیدی در گوگل ، رتبه در رنکینگ های بین المللی مانند الکسا و... بصورت زمان بندی شده و خودکار آماده بررسی شما قرار میگیرد.">
    <script src="{{ asset('js/all.js') }}"></script>

    <style>
        .error{
            font-family: BYekan!important;
        }
        .invalid-feedback{
            font-family: BYekan!important;
            direction: rtl!important;
            font-size: 16px!important;
        }
    </style>

    <meta name="generator" content="WordPress 15.2.2"/>

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="/dashboard/assets/css/demo1/pages/login/login-6.css" rel="stylesheet" type="text/css" />

</head>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >


<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(/dashboard/assets/media//bg/bg-4.jpg);">
                <div class="kt-login__section">
                    <div class="kt-login__block">
                        <h5 style="font-size: 2.2em!important;direction: rtl!important;" class="kt-login__title">با عضویت در سامانه مدیریت مجتمع مسکونی از مزایای زیر بهره مند شوید:</h5>
                        <div style="font-family: iranyekan;font-size: 1.4em!important; line-height: 3" class="kt-login__desc">
                            <br> کاهش سیکل زمانی ارتباطات متقابل بین ساکنین و مدیریت مجتمع -
                            <br>                         صرفه جویی در هزینه ها -
                            <br>                          شفاف سازی فرآیندها، هزینه ها و درآمدها -
                            <br>                           دسترسی سریع به گزارشات و آمارهای لازم -
                            <br>                           نظارت همگانی بصورت برخط توسط کلیه مالکین و ساکنین مجتمع -
                            <br>                           سهولت در امر محاسبه دقیق و سریع شارژ واحدهای مجتمع -
                            <br>                           تسریع در محاسبه عملیات مالی مجتمع -
                            <br>                           ... و  -
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div style="display: none;" class="kt-login__logo">
                                <a href="#">
                                    <img src="/dashboard/assets/media/logos/logo.png">
                                </a>
                            </div>

                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">ورود به داشبورد سامانه </h3>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input style="text-align: center"   class="form-control @error('mobile') is-invalid @enderror" type="text"  value="{{ old('mobile') }}" placeholder="شماره موبایل" name="mobile"  >
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input style="text-align: center" class="form-control   @error('password') is-invalid @enderror" type="password" placeholder="رمز عبور" name="password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div style="direction: rtl" class="kt-login__extra">
                                            <label  class="kt-checkbox">
                                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }} id="remember" name="remember"> مرا به خاطر بسپار
                                                <span></span>
                                            </label>
                                            <a style="display: none" href="javascript:;" id="kt_login_forgot">رمز عبور خود را فراموش کرده اید؟</a>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button type="submit" class="btn btn-success btn-pill btn-elevate">ورود</button>
                                        </div>




                                    </form>
                                    <div style="padding-top: 20px" class="kt-login__actions">
                                        <button  href="javascript:;" id="showSignUp"  class="btn btn-outline-brand btn-pill">عضو نیستید؟ نمایش فرم عضویت</button>
                                    </div>
                                </div>
                            </div>

                            <div id="#signup" class="kt-login__signup">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">عضویت در سامانه</h3>
                                    <div style="font-family: iranyekan;direction: rtl" class="kt-login__desc">اطلاعات کاربری خودرا جهت ایجاد حساب وارد نمایید:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input style="direction: rtl" value="{{ old('fullNameReg') }}" class="form-control  @error('fullNameReg') is-invalid @enderror" type="text" placeholder="نام و نام خانوادگی" required name="fullNameReg">
                                            @error('fullNameReg')
                                                <script>
                                                    $(window).on('load', function() {
                                                            $("#showSignUp").trigger("click");
                                                    });
                                                </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input style="direction: rtl" value="{{ old('emailReg') }}" class="form-control  @error('emailReg') is-invalid @enderror" type="text" placeholder="آدرس ایمیل" required name="emailReg" autocomplete="off">
                                            @error('emailReg')
                                            <script>
                                                $(window).on('load', function() {
                                                    $("#showSignUp").trigger("click");
                                                });
                                            </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror

                                        </div>


                                        <div class="form-group">
                                            <input style="direction: rtl" value="{{ old('mobileReg') }}" class="form-control  @error('mobileReg') is-invalid @enderror" type="text" placeholder="شماره موبایل" required name="mobileReg" autocomplete="off">
                                            @error('mobileReg')
                                            <script>
                                                $(window).on('load', function() {
                                                    $("#showSignUp").trigger("click");
                                                });
                                            </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <input style="direction: rtl" value="{{ old('complex_nameReg') }}" class="form-control  @error('complex_nameReg') is-invalid @enderror" type="text" placeholder="نام مجتمع مسکونی" required name="complex_nameReg" autocomplete="off">
                                            @error('complex_nameReg')
                                            <script>
                                                $(window).on('load', function() {
                                                    $("#showSignUp").trigger("click");
                                                });
                                            </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <input style="direction: rtl" class="form-control  @error('passwordReg') is-invalid @enderror" type="password" placeholder="رمز عبور" required name="passwordReg">
                                            @error('passwordReg')
                                            <script>
                                                $(window).on('load', function() {
                                                    $("#showSignUp").trigger("click");
                                                });
                                            </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <input style="direction: rtl" class="form-control  @error('passwordReg_confirmation') is-invalid @enderror" type="password" required placeholder="تایید رمز عبور (رمز عبور را یکبار دیگر وارد نمایید)" name="passwordReg_confirmation">
                                            @error('passwordReg_confirmation')
                                            <script>
                                                $(window).on('load', function() {
                                                    $("#showSignUp").trigger("click");
                                                });
                                            </script>
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                 </span>
                                            @enderror

                                        </div>
                                        <div style="direction: rtl" class="kt-login__extra">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="agree"> من <a href="#">قوانین</a> را قبول دارم.
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-login__actions">
                                            <button type="submit" class="btn btn-success btn-pill btn-elevate">عضویت</button>
                                        </div>

                                    </form>
                                    <div style="padding-top: 20px" class="kt-login__actions">
                                        <button style="" id="showSignUp_cancel" class="btn btn-outline-brand btn-pill">نمایش فرم ورود</button>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-login__forgot">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Forgotten Password ?</h3>
                                    <div class="kt-login__desc">Enter your email to reset your password:</div>
                                </div>
                                <div class="kt-login__form">
                                    <form class="kt-form" action="">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                        </div>
                                        <div class="kt-login__actions">
                                            <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                            <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>         	</div>

<!-- end:: Page -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<!--end::Global Theme Bundle -->




<!--begin::Page Scripts(used by this page) -->
<script src="/dashboard/assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script>
<!--end::Page Scripts -->
<script>
    var flag = false;
    setInterval(function() {
        flag = !flag;
        $(".colorChanger").css("background", flag ? "#FFC107" : "white");
        $(".colorChanger").css("background", flag ? "white" : "#FFC107");
    }, 500);

    $(document).ready(function () {
        if (window.location.href.indexOf("signup") !== -1) {
            $("#showSignUp").trigger("click");
        }
    });

</script>
</body>
</html>
