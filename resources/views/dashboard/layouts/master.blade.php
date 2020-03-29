<!DOCTYPE html>

<html lang="en" direction="rtl" style="direction: rtl;">
<!-- begin::Head -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta charset="utf-8" />
    <title>
        سامانه مدیریت {{ \Auth::user()->complex->name }} |
        {{ $title }}</title>

    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts --

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="/dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/dashboard/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <link href="/dashboard/assets/css/skins/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/assets/css/skins/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/assets/css/skins/brand/dark.rtl.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/assets/css/skins/aside/dark.rtl.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/icofont.min.css">


    <link href='/vendors/datepicker/css/normalize.css' rel='stylesheet' />
    <link href="/vendors/datepicker/css/vertical-responsive-menu.min.css" rel="stylesheet" />
    <script src="/vendors/datepicker/js/vertical-responsive-menu.min.js"></script>
    <link rel="stylesheet" href="/vendors/datepicker/css/persianDatepicker-default.css" />
    <link rel="stylesheet" href="/vendors/datepicker/css/persianDatepicker-dark.css" />
    <link rel="stylesheet" href="/vendors/datepicker/css/persianDatepicker-latoja.css" />
    <link rel="stylesheet" href="/vendors/datepicker/css/persianDatepicker-melon.css" />
    <link rel="stylesheet" href="/vendors/datepicker/css/persianDatepicker-lightorang.css" />
    <script src="/vendors/datepicker/js/prism.js"></script>

    <!--end::Layout Skins -->
    <style>
        .dataTables_wrapper{
            font-size: 15px;
        }
        th,tr,td{
            text-align: center;
        }
        .page-link{
            font-family: BYekan!important;
        }
        .dataTables_info{
            font-family: BYekan!important;
        }
        .custom-select{
            font-family: BYekan!important;
        }
        .btn > .dropdown-inline{
            font-size: 18px;
        }
        span,p,div,label,input{
            font-size: 14px!important;
        }
        .kt-menu__link-text{
            font-size: 16px!important;
        }
        .select2-search__field{
            text-align: right!important;
            direction: rtl!important;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__arrow, .select2-container--default .select2-selection--single .select2-selection__arrow{
            font-family: LineAwesome!important;
        }

    </style>
@yield('headerScripts')

</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<!-- begin:: Header Mobile -->

<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.html">
            <img alt="Logo" src="/dashboard/assets/media/logos/logo-light.png" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
      -->

        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="index.html">
                        <img alt="Logo" src="/dashboard/assets/media/logos/logo-light.png" />
                    </a>
                </div>

                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
            <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"/>
                <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
              </g>
            </svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24"/>
                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
              </g>
            </svg></span>
                    </button>
                    <!--
                    <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
                  -->
                </div>
            </div>
            <!-- end:: Aside -->
            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">

                <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

                    <ul class="kt-menu__nav ">

                        <li class="kt-menu__item  {{ request()->routeIs('dashboard.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('dashboard.index') }}" class="kt-menu__link "><span class="kt-menu__link-icon"><i class="fa fa-chart-bar"></i></span><span class="kt-menu__link-text">داشبورد واحد {{ \Auth::user()->code }}</span></a></li>

                        <li class="kt-menu__item  {{ request()->routeIs('dashboard.information') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('dashboard.information') }}" class="kt-menu__link "><span class="kt-menu__link-icon"><i class="fa fa-file-alt"></i></span><span class="kt-menu__link-text">اطلاعات کلی</span></a></li>


                        <li class="kt-menu__item  {{ request()->routeIs('units*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('units.index') }}" class="kt-menu__link "><span class="kt-menu__link-icon"><i class="fa fa-users"></i></span><span class="kt-menu__link-text">مدیریت مالکین و ساکنین</span></a></li>

                        <li class="kt-menu__item  kt-menu__item--submenu {{ request()->routeIs('proceedings.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('enactments.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-user-friends"></i></span><span class="kt-menu__link-text">هیات مدیره</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">

                                    <li class="kt-menu__item {{ request()->routeIs('proceedings.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true">
                                        <a href="{{ route('proceedings.index') }}" class="kt-menu__link ">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">صورت جلسات</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item {{ request()->routeIs('enactments.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true">
                                        <a href="{{ route('enactments.index') }}" class="kt-menu__link ">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">کاربرگ مصوبات</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu   {{ request()->routeIs('costs.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('incomes.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('charge*') ? 'kt-menu__item--active kt-menu__item--open' : ''  }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-money-bill-alt"></i></span><span class="kt-menu__link-text">حسابداری</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">حسابداری</span></span></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('costs.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('costs.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">هزینه ها</span></a></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('incomes.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('incomes.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">درآمدها</span></a></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('charge.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('charge.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت شارژ و پرداختها</span></a></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('charge.report*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('charge.report.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">گزارش براساس واحد</span></a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item {{ request()->routeIs('contract*') ? 'kt-menu__item--active' : ''  }} " aria-haspopup="true" ><a href="{{ route('contracts.index') }}" class="kt-menu__link "><span class="kt-menu__link-icon"><i class="fa fa-tasks"></i></span><span class="kt-menu__link-text">قرارداد ها</span></a></li>

                        <li class="kt-menu__item  kt-menu__item--submenu   {{ request()->routeIs('*maintenance*') ? 'kt-menu__item--active kt-menu__item--open' : ''  }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-wrench"></i></span><span class="kt-menu__link-text">نگهداری</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">نگهداری</span></span></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('maintenance.facility.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('maintenance.facility.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">تاسیسات</span></a></li>
                                    <li class="kt-menu__item  {{ request()->routeIs('maintenance.elevator.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('maintenance.elevator.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">آسانسور</span></a></li>

                                </ul>
                            </div>
                        </li>

                        <li class="kt-menu__item {{ request()->routeIs('*security*') ? 'kt-menu__item--active' : ''  }}  kt-menu__item--submenu" aria-haspopup="true" ><a href="/dashboard/security" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-lock"></i></span><span class="kt-menu__link-text">نظارت و امنیت</span></a></li>
                        <li class="kt-menu__item {{ request()->routeIs('*monitoring*') ? 'kt-menu__item--active' : ''  }} kt-menu__item--submenu" aria-haspopup="true" ><a href="{{ route('monitoring.index') }}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="icofont icofont-cc-camera"></i></span><span class="kt-menu__link-text">مانیتورینگ</span></a></li>

                        <li class="kt-menu__item {{ request()->routeIs('*comfort*') ? 'kt-menu__item--active' : ''  }}  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('comfort.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-mug-hot"></i></span><span class="kt-menu__link-text">خدمات رفاهی</span></a></li>

                        <li class="kt-menu__item {{ request()->routeIs('*vote*') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('*option*') ? 'kt-menu__item--active kt-menu__item--open' : ''  }}   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-envelope-open-text"></i></span><span class="kt-menu__link-text">نظرسنجی</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">نظرسنجی</span></span></li>
                                    <li class="kt-menu__item {{ request()->routeIs('votes.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('votes.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت نظرسنجی ها</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('votes.create') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('votes.create') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">افزودن نظرسنجی</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('votes.index') ? 'kt-menu__item--active' : ''  }} " aria-haspopup="true"><a href="{{ route('votes.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">لیست نظرسنجی ها</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="kt-menu__item {{ request()->routeIs('*ticket*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true" ><a href="{{ route('tickets.index') }}" class="kt-menu__link"><span class="kt-menu__link-icon"><i class="fa fa-pencil-alt"></i></span><span class="kt-menu__link-text">درخواست ها</span></a></li>

                        <li class="kt-menu__item {{ request()->routeIs('*gallery*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true" ><a href="{{ route('gallery.index') }}" class="kt-menu__link"><span class="kt-menu__link-icon"><i class="fa fa-images"></i></span><span class="kt-menu__link-text">گالری تصاویر</span></a></li>

                        <li class="kt-menu__item  kt-menu__item--submenu {{ request()->routeIs('configuration*') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('permission-requests.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} {{ request()->routeIs('traffic.index') ? 'kt-menu__item--active kt-menu__item--open' : ''  }} " aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><i class="fa fa-user-tie"></i></span><span class="kt-menu__link-text">مدیریت سامانه</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent " aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">مدیریت سامانه</span></span>
                                    </li>
                                    <li class="kt-menu__item {{ request()->routeIs('configuration*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('configuration.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">تنظیمات اولیه</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('configuration*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('configuration.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">لیست جرایم</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('configuration/website*') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('dashboard.configuration.website') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">تنظیمات وبسایت</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('notifications.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('notifications.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">اعلان ها</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('permission-requests.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('permission-requests.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مجوزها</span></a></li>
                                    <li class="kt-menu__item {{ request()->routeIs('traffic.index') ? 'kt-menu__item--active' : ''  }}" aria-haspopup="true"><a href="{{ route('traffic.index') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">ترددها</span></a></li>

                                </ul>
                            </div>
                        </li>

                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>


                            <polygon fill="#000000" points="11 19 15 14 19 19"/>
                            <path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end:: Aside -->

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <a href="{{ route('dashboard.index') }}" target="blank" class="kt-notification__item">
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                    <!-- begin:: Header Menu -->
                    <!-- Uncomment this to display the close button of the panel
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                  -->

                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                            <div style="padding-top: 10px" class="kt-subheader__main">

                                <h3 class="kt-subheader__title mr-3"> سامانه مدیریت {{ \Auth::user()->complex->name }}</h3>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <h3 class="kt-subheader__title">{{ $title }}</h3>

                            </div>
                        </div>
                    </div>
                    <!-- end:: Header Menu -->
                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: Search -->
                        <!--begin: Search -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">


                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                        </div>
                                    </form>
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search -->
                        <!--end: Search -->

                        <!--begin: Notifications -->

                        <div class="kt-header__topbar-item dropdown">

                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                                <form>
                                    <!--begin: Head -->
                                    <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(/dashboard/assets/media/misc/bg-1.jpg)">
                                        <h3 class="kt-head__title">
                                            User Notifications
                                            &nbsp;
                                            <span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span>
                                        </h3>

                                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end: Head -->

                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                                            <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-line-chart kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-box-1 kt-font-brand"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-chart2 kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            اپلیکیشن has been approved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-image-file kt-font-warning"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New file has been uploaded
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            5 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-drop kt-font-info"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New user feedback received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            8 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            System reboot has been successfully completed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            12 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-favourite kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been placed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            15 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item kt-notification__item--read">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-safe kt-font-primary"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Company meeting canceled
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            19 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-psd kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New report has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            23 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-download-1 kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Finance report has been generated
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            25 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-security kt-font-warning"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer comment recieved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-pie-chart kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                            <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-psd kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New report has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            23 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-download-1 kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Finance report has been generated
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            25 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-line-chart kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-box-1 kt-font-brand"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-chart2 kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            اپلیکیشن has been approved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-image-file kt-font-warning"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New file has been uploaded
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            5 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-drop kt-font-info"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New user feedback received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            8 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            System reboot has been successfully completed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            12 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-favourite kt-font-brand"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been placed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            15 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item kt-notification__item--read">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-safe kt-font-primary"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Company meeting canceled
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            19 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-psd kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New report has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            23 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-download-1 kt-font-danger"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Finance report has been generated
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            25 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-security kt-font-warning"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer comment recieved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon2-pie-chart kt-font-success"></i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                            <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                                <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                                    <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                        All caught up!
                                                        <br>No new notifications.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end: Notifications -->
                        <!--begin: Quick Actions -->

                        <div class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
        <span class="kt-header__topbar-icon">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24"/>
              <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
              <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
              <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
              <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
            </g>
          </svg>                            </span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                                <form>
                                    <!--begin: Head -->
                                    <div class="kt-head kt-head--skin-dark" style="background-image: url(/dashboard/assets/media/misc/bg-1.jpg)">
                                        <h3 class="kt-head__title">
                                            منوی دسترسی سریع
                                            <span class="kt-space-15"></span>
                                            <a href="{{ route('charge.index') }}"><span class="btn btn-success btn-sm btn-bold btn-font-md">مشاهده پرداختی های امروز  </span></a>
                                        </h3>
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Grid Nav -->
                                    <div class="kt-grid-nav kt-grid-nav--skin-light">
                                        <div class="kt-grid-nav__row">
                                            <a href="{{ route('charge.report.index') }}" class="kt-grid-nav__item">
                  <span class="kt-grid-nav__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3"/>
                        <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000"/>
                      </g>
                    </svg>            </span>
                                                <span class="kt-grid-nav__title">حسابداری</span>
                                                <span class="kt-grid-nav__desc">گزارش واریزی های واحد</span>
                                            </a>
                                            <a href="{{ route('tickets.index') }}" class="kt-grid-nav__item">
                    <span class="kt-grid-nav__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"/>
                          <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3"/>
                          <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000"/>
                        </g>
                      </svg>            </span>
                                                <span class="kt-grid-nav__title">درخواست ها</span>
                                                <span class="kt-grid-nav__desc">لیست درخواست ها</span>
                                            </a>
                                        </div>
                                        <div class="kt-grid-nav__row">
                                            <a href="{{ route('votes.index') }}" class="kt-grid-nav__item">
                      <span class="kt-grid-nav__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"/>
                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"/>
                          </g>
                        </svg>            </span>
                                                <span class="kt-grid-nav__title">نظرسنجی</span>
                                                <span class="kt-grid-nav__desc">لیست نظرسنجی ها</span>
                                            </a>
                                            <a href="{{ route('units.index') }}" class="kt-grid-nav__item">
                        <span class="kt-grid-nav__icon">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24"/>
                              <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                              <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                          </svg>            </span>
                                                <span class="kt-grid-nav__title">واحد ها</span>
                                                <span class="kt-grid-nav__desc">مدیریت مالکین و ساکنین</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end: Grid Nav -->
                                </form>
                            </div>
                        </div>
                        <!--end: Quick Actions -->
                        <!--begin: My Cart -->
                        <div class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">

                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                                <form>
                                    <!-- begin:: Mycart -->
                                    <div class="kt-mycart">
                                        <div class="kt-mycart__head kt-head" style="background-image: url(/dashboard/assets/media/misc/bg-1.jpg);">
                                            <div class="kt-mycart__info">
                                                <span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
                                                <h3 class="kt-mycart__title">My Cart</h3>
                                            </div>
                                            <div class="kt-mycart__button">
                                                <button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
                                            <div class="kt-mycart__item">
                                                <div class="kt-mycart__container">
                                                    <div class="kt-mycart__info">
                                                        <a href="#" class="kt-mycart__title">
                                                            Samsung
                                                        </a>
                                                        <span class="kt-mycart__desc">
                                Profile info, Timeline etc
                              </span>

                                                        <div class="kt-mycart__action">
                                                            <span class="kt-mycart__price">$ 450</span>
                                                            <span class="kt-mycart__text">for</span>
                                                            <span class="kt-mycart__quantity">7</span>
                                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="kt-mycart__pic">
                                                        <img src="/dashboard/assets/media/products/product9.jpg" title="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="kt-mycart__item">
                                                <div class="kt-mycart__container">
                                                    <div class="kt-mycart__info">
                                                        <a href="#" class="kt-mycart__title">
                                                            Panasonic
                                                        </a>

                                                        <span class="kt-mycart__desc">
                                For PHoto & Others
                              </span>

                                                        <div class="kt-mycart__action">
                                                            <span class="kt-mycart__price">$ 329</span>
                                                            <span class="kt-mycart__text">for</span>
                                                            <span class="kt-mycart__quantity">1</span>
                                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="kt-mycart__pic">
                                                        <img src="/dashboard/assets/media/products/product13.jpg" title="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="kt-mycart__item">
                                                <div class="kt-mycart__container">
                                                    <div class="kt-mycart__info">
                                                        <a href="#" class="kt-mycart__title">
                                                            Fujifilm
                                                        </a>
                                                        <span class="kt-mycart__desc">
                                Profile info, Timeline etc
                              </span>

                                                        <div class="kt-mycart__action">
                                                            <span class="kt-mycart__price">$ 520</span>
                                                            <span class="kt-mycart__text">for</span>
                                                            <span class="kt-mycart__quantity">6</span>
                                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="kt-mycart__pic">
                                                        <img src="/dashboard/assets/media/products/product16.jpg" title="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="kt-mycart__item">
                                                <div class="kt-mycart__container">
                                                    <div class="kt-mycart__info">
                                                        <a href="#" class="kt-mycart__title">
                                                            Candy Machine
                                                        </a>

                                                        <span class="kt-mycart__desc">
                                For PHoto & Others
                              </span>

                                                        <div class="kt-mycart__action">
                                                            <span class="kt-mycart__price">$ 784</span>
                                                            <span class="kt-mycart__text">for</span>
                                                            <span class="kt-mycart__quantity">4</span>
                                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="kt-mycart__pic">
                                                        <img src="/dashboard/assets/media/products/product15.jpg" title="" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__footer">
                                            <div class="kt-mycart__section">
                                                <div class="kt-mycart__subtitel">
                                                    <span>Sub Total</span>
                                                    <span>Taxes</span>
                                                    <span>Total</span>
                                                </div>

                                                <div class="kt-mycart__prices">
                                                    <span>$ 840.00</span>
                                                    <span>$ 72.00</span>
                                                    <span class="kt-font-brand">$ 912.00</span>
                                                </div>
                                            </div>
                                            <div class="kt-mycart__button kt-align-right">
                                                <button type="button" class="btn btn-primary btn-sm">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end:: Mycart -->
                                </form>
                            </div>
                        </div>
                        <!--end: My Cart -->
                        <!--begin: Quick panel toggler -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">

                        </div>
                        <!--end: Quick panel toggler -->
                        <!--begin: Language bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--langs">

                        </div>
                        <!--end: Language bar -->
                        <!--begin: User Bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile">{{ \Auth::user()->fullName }}،</span>
                                    <span class="kt-header__topbar-username kt-hidden-mobile">خوش آمدید</span>
                                    <img class="kt-hidden" alt="Pic" src="/dashboard/assets/media/users/300_25.jpg" />
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">A</span>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(/dashboard/assets/media/misc/bg-1.jpg)">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden" alt="Pic" src="/dashboard/assets/media/users/300_25.jpg" />
                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">A</span>
                                    </div>
                                    <div class="kt-user-card__name">
                                        علی رحمانی
                                    </div>
                                    <div class="kt-user-card__badge">
                                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 پیام خوانده نشده</span>
                                    </div>
                                </div>
                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">

                                    <a href="" target="_blank" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                پنل شخصی
                                            </div>
                                            <div class="kt-notification__item-time">
                                                تنظیمات حساب و موارد دیگر

                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-mail kt-font-warning"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                پیام ها
                                            </div>
                                            <div class="kt-notification__item-time">
                                                صندوق ورودی

                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                فعالیتهای من

                                            </div>
                                            <div class="kt-notification__item-time">
                                                گزارش ها و اعلان ها

                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                وظایف من

                                            </div>
                                            <div class="kt-notification__item-time">
                                                آخرین پرداخت ها
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-cardiogram kt-font-warning"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                صورتحساب

                                            </div>
                                            <div class="kt-notification__item-time">
                                                صورتحساب و اظهارات
                                                <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 در انتظار
                          </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="{{ route('dashboard-logout') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">خروج
                                        </a>

                                        <a href="" target="_blank" class="btn btn-clean btn-sm btn-bold"> ارتقا
                                        </a>
                                    </div>
                                </div>
                                <!--end: Navigation -->
                            </div>
                        </div>
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Content Head -->

                    <!-- end:: Content Head -->
                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">









                            @yield('content')






                            <!--end::tab 2 content-->
                            <!--begin::tab 3 content-->

                        <!--End::Tab Content-->
                    </div>
                </div>


        </div>
    </div>
</div>


<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">تمامی حقوق محفوظ میباشد.</a>
        </div>
        <div class="kt-footer__menu">
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">درباره ما</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">لینک های سریع</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">راه های ارتباطی</a>
        </div>
    </div>
</div>
<!-- end:: Footer -->
</div>
</div>
</div>

<!-- end:: Page -->


<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
<!-- begin::Sticky Toolbar -->
<ul class="kt-sticky-toolbar" style="margin-top: 30px;">


    <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Example">
        <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
    </li>
</ul>
<!-- end::Sticky Toolbar -->




<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>
<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="/dashboard/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="/dashboard/assets/js/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->


<script src="/dashboard/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="/dashboard/assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>


<script src="/dashboard/assets/plugins/custom/amcharts/core.js"></script>
<script src="/dashboard/assets/plugins/custom/amcharts/charts.js"></script>
<script src="/dashboard/assets/plugins/custom/amcharts/animated.js"></script>



<script src="/dashboard/assets/plugins/custom/highcharts/highcharts.js"></script>
<script src="/dashboard/assets/plugins/custom/highcharts/exporting.js"></script>
<script src="/dashboard/assets/plugins/custom/highcharts/export-data.js"></script>gin
<script src="/dashboard/assets/plugins/custom/highcharts/accessibility.js"></script>
<script src="/dashboard/assets/plugins/custom/highcharts/highcharts-more.js"></script>
<script src="/dashboard/assets/plugins/custom/highcharts/drilldown.js"></script>
<script src="/dashboard/assets/plugins/custom/highcharts/solid-gauge.js"></script>

<script src="/dashboard/assets/js/sweetalert.min.js"></script>
<script src="/vendors/datepicker/js/persianDatepicker.js"></script>

<script>
    $(function() {
        $(".date").persianDatepicker();
    });

</script>
@include('sweet::alert')
@yield('footerScripts')

</body>
<!-- end::Body -->

</html>
