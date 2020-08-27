<!DOCTYPE html>
<html class="no-js" lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>بازیابی رمز عبور</title>
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
            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(/dashboard/assets/img/login.jpg);">
                {{--<div class="kt-login__section">--}}
                {{--<div class="kt-login__block">--}}
                {{--<h5 style="font-size: 2.2em!important;direction: rtl!important;" class="kt-login__title"> سامانه مدیریت برج المپیک</h5>--}}
                {{--<div style="font-family: iranyekan;font-size: 1.4em!important; line-height: 3" class="kt-login__desc">--}}
                {{--<br> کاهش سیکل زمانی ارتباطات متقابل بین ساکنین و مدیریت مجتمع ---}}
                {{--<br>                         صرفه جویی در هزینه ها ---}}
                {{--<br>                          شفاف سازی فرآیندها، هزینه ها و درآمدها ---}}
                {{--<br>                           دسترسی سریع به گزارشات و آمارهای لازم ---}}
                {{--<br>                           نظارت همگانی بصورت برخط توسط کلیه مالکین و ساکنین مجتمع ---}}
                {{--<br>                           سهولت در امر محاسبه دقیق و سریع شارژ واحدهای مجتمع ---}}
                {{--<br>                           تسریع در محاسبه عملیات مالی مجتمع ---}}
                {{--<br>                           ... و  ---}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
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
                                    <h3 class="kt-login__title">بازیابی رمز عبور </h3>
                                </div>
                                <div class="kt-login__form">
                                    <form style="direction: rtl" class="kt-form" method="POST" action="{{ route('password.update') }}">
                                        @csrf

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">کد واحد</label>

                                            <div class="col-md-6">
                                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $email ?? old('code') }}" required autocomplete="code" autofocus>

                                                @error('code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">رمز عبور جدید</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">مجددا رمز را وارد نمایید</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="kt-login__actions">
                                            <button type="submit" class="btn btn-success btn-pill btn-elevate">تغییر رمز</button>
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

    @error('code')
        $("#kt_login_forgot").trigger("click");
    @enderror


    });

</script>


</body>
</html>
