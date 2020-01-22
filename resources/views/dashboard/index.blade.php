@extends('dashboard.layouts.master')


@section('content')


    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <!--begin:: Widgets/Daily Sales-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header kt-margin-b-30">
                        <h2 class="kt-widget14__title"><i class="fa fa-wallet kt-font-danger"></i>
                            بدهی سررسید شده شما
                        </h2>
                        <h1 class="font-large-1 text-bold-300 text-danger float-right kt-font-bold borj-font mt-5">0 ریال</h1>
                    </div>


                    <div class="alert alert-outline-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                        <strong>توجه! </strong><hr>
                        <h5>

                            جهت پرداخت آنلاین بدهی کلیک کنید
                        </h5>
                    </div>

                </div>
            </div>
            <!--end:: Widgets/Daily Sales-->    </div>
        <div class="col-xl-4 col-lg-4">
            <!--begin:: Widgets/Profit Share-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header">


                    </div>
                    <div class="kt-portlet kt-portlet--head-noborder kt-portlet--height-fluid ">

                        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                            <div class="kt-widget4 kt-widget4--sticky">
                                <div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--logo">
                                            <img src="/metronic/themes/metronic/theme/default/demo2/dist//dashboard/assets/media/client-logos/logo3.png" alt="">
                                        </div>
                                        <div class="kt-widget4__info">

                                            <h5 class="kt-widget4__text">
                                                نام و نام خانوادگی مالک:
                                            </h5>
                                        </div>
                                        <span class="kt-widget4__number kt-font-brand kt-font-bold">احمد رحمانی</span>
                                    </div>

                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--logo">
                                            <img src="/metronic/themes/metronic/theme/default/demo2/dist//dashboard/assets/media/client-logos/logo1.png" alt="">
                                        </div>
                                        <div class="kt-widget4__info">

                                            <h5 class="kt-widget4__text">
                                                کد واحد:
                                            </h5>
                                        </div>
                                        <span class="kt-widget4__number kt-font-success kt-font-bold borj-font">E201</span>
                                    </div>

                                    <div class="kt-widget4__item">
                                        <div class="kt-widget4__pic kt-widget4__pic--logo">
                                            <img src="/metronic/themes/metronic/theme/default/demo2/dist//dashboard/assets/media/client-logos/logo4.png" alt="">
                                        </div>
                                        <div class="kt-widget4__info">

                                            <h5 class="kt-widget4__text borj-font">
                                                برج شرقی، طبقه20، واحد1
                                            </h5>
                                        </div>
                                        <span class="kt-widget4__number kt-font-danger kt-font-bold borj-font">E/20/1</span>
                                    </div>
                                </div>
                                <div class="kt-widget4__chart kt-margin-t-15"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Profit Share-->    </div>
        <div class="col-xl-4 col-lg-4">
            <!--begin:: Widgets/Revenue Change-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title"><i class="fa fa-vote-yea kt-font-success"></i>
                            پرداختی این ماه شما
                        </h3>
                        <h1 class="font-large-1 text-bold-300 text-success float-right kt-font-bold borj-font mt-5">5681900 ریال</h1>
                    </div>

                    <div class="alert alert-outline-success" role="alert">
                        <strong>توجه!</strong><hr>
                        <h5>
                            جهت مشاهده کل پرداختی ها کلیک کنید
                        </h5>
                    </div>



                </div>
            </div>



            <!--end:: Widgets/Revenue Change-->
        </div>
    </div>

    <div class="accordion accordion-solid accordion-toggle-plus mb-5" id="accordionExample6">
        <div class="card">
            <div class="card-header" id="headingOne6">
                <div class="card-title" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6"><h5>
                        <i class="fa fa-handshake mr-3 borj-size"></i>جناب آقای/خانم احمد رحمانی، به سامانه برج المپیک خوش آمدید.</h5>
                </div>
            </div>
            <div id="collapseOne6" class="collapse show" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                <div class="card-body">

                    در این صفحه میتوانید ضمن مشاهده تمامی پرداخت ها، بدهی های سررسید شده را مشاهده و نسبت به پرداخت با استفاده از درگاه آنلاین بانک اقدام نمایید. همچنین امکان شرکت در نظرسنجی ها، ارسال درخواست ها، انتقادات و پیشنهادات به مدیریت و هیئت مدیره برج فراهم است و میتوانید تمامی درآمدها و هزینه های برج در ماژول های دیگر این سامانه مشاهده نمایید.

                </div>

            </div>
        </div>




    </div>


    <div class="row">
        <div class="col-lg-12">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head bg-primary">
                    <div class="kt-portlet__head-label">
                        <h5 class="kt-portlet__head-title"><i class="fa fa-home mr-2"></i>
                            اطلاعات واحد شما
                        </h5>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1">
                                <i class="fa fa-building kt-font-success"><span class="kt--visible-desktop-inline-block kt-font-info ml-2">اطلاعات ملک</span></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_2">
                                <i class="fa fa-car-alt kt-font-danger"><span class="kt--visible-desktop-inline-block kt-font-info ml-2">اطلاعات وسایل نقلیه</span></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_3">
                                <i class="fa fa-users kt-font-success"> <span class="kt--visible-desktop-inline-block kt-font-info ml-2">اطلاعات ساکنین</span></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_4">
                                <i class="fa fa-thumbs-up kt-font-danger"> <span class="kt--visible-desktop-inline-block kt-font-info ml-2">درخواست مجوز ها</span></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_5">
                                <i class="fa fa-parking kt-font-success"> <span class="kt--visible-desktop-inline-block kt-font-info ml-2">هماهنگی تردد</span></i>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content mt-4">
                        <div class="tab-pane active" id="kt_tabs_1" role="tabpanel">
                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped borj-font">
                                            <thead>
                                            <tr>
                                                <th> نام و نام خانوادگی</th>
                                                <th>برج</th>
                                                <th>طبقه</th>
                                                <th>کد واحد</th>
                                                <th>کد پارکینگ</th>
                                                <th>کد انباری</th>
                                                <th>متراژ واحد</th>
                                                <th>متراژ تراس روباز</th>
                                                <th> مبلغ شارژ ماهیانه</th>
                                                <th>شماره همراه</th>
                                                <th>تلفن منزل1</th>
                                                <th>تلفن منزل2</th>
                                                <th>پلاک خودرو1</th>
                                                <th>نوع خودرو1</th>
                                                <th>رنگ خودرو1</th>
                                                <th>پلاک خودرو2</th>
                                                <th>نوع خودرو2</th>
                                                <th>رنگ خودرو2</th>
                                                <th>نام مستاجر</th>
                                                <th>تلفن همراه مستاجر</th>
                                                <th>وضعیت سکونت</th>
                                                <th>تاریخ اسکان</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">احمد رحمانی</th>
                                                <td>شرقی</td>
                                                <td>20</td>
                                                <td>E/20/1</td>
                                                <td>E_2/37</td>
                                                <td>E_2/17</td>
                                                <td>162.34</td>
                                                <td>0</td>
                                                <td>5681900</td>
                                                <td>09121010328</td>
                                                <td>40445649</td>
                                                <td>40445644</td>
                                                <td>15م 125_ایران44</td>
                                                <td>تویوتا کرونا</td>
                                                <td>سفید</td>
                                                <td>32ه315_ ایران99</td>
                                                <td>هیوندای آی30</td>
                                                <td>سفید</td>
                                                <td>_</td>
                                                <td>_</td>
                                                <td>ساکن</td>
                                                <td>تاریخ سکونت</td>
                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="tab-pane" id="kt_tabs_2" role="tabpanel">


                            <!--begin::Section-->
                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped borj-font">
                                            <thead>
                                            <tr>
                                                <th> کد پارکینگ</th>
                                                <th>نوع وسیله نقلیه</th>
                                                <th>سازنده</th>
                                                <th>مدل</th>
                                                <th>سال تولید</th>
                                                <th>شماره پلاک</th>
                                                <th>حذف</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">E_2/37</th>
                                                <td>شرقی</td>
                                                <td>خودرو</td>
                                                <td>تویوتا</td>
                                                <td>کرونا</td>
                                                <td>1991</td>

                                                <td><i class="fa fa-window-close kt-font-danger"></i></td>

                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="modall" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modall">افزودن خودرو</h5>
                                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>کد پارکینگ:</label>
                                                        <input type="email" class="form-control" placeholder="مثال: E_2/37">
                                                        <span class="form-text text-muted">لطفا کد پارکینگ خود را وارد کنید</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">نوع وسیله نقلیه:</label>

                                                        <div class="kt-input-icon">
                                                            <select class="form-control" id="exampleSelect1">
                                                                <option>خودرو</option>
                                                                <option>موتور سیکلت</option>


                                                            </select>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا نوع وسیله نقلیه خود را وارد کنید</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>سازنده:</label>
                                                        <div class="kt-input-icon">
                                                            <input type="text" class="form-control" placeholder="مثال:هیوندای">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا سازنده ی خودرو را مشخص کنید</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">مدل:</label>
                                                        <div class="kt-input-icon">
                                                            <input type="text" class="form-control" placeholder="مثال i30">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا مدل خودرو خود را مشخص کنید</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>سال تولید:</label>
                                                        <input type="text" class="form-control" placeholder="مثال:2012">
                                                        <span class="form-text text-muted">لطفا سال تولید خودرو خود را وارد کنید</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">شماره پلاک:</label>
                                                        <input type="text" class="form-control" placeholder="ایران33 333ن33">
                                                        <span class="form-text text-muted">لطفا شماره پلاک خود را وارد کنید</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">افزودن وسایل نقلیه</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--end::Section-->
                            </div>
                            <p class=text-center>
                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">افزودن وسیله نقلیه</button>
                            </p>
                        </div>

                        <div class="tab-pane" id="kt_tabs_3" role="tabpanel">
                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped borj-font">
                                            <thead>
                                            <tr>
                                                <th>نام و نام خانوادگی</th>
                                                <th>جنسیت</th>
                                                <th>سن</th>
                                                <th>تلفن همراه</th>
                                                <th>خذف</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <div class="modal" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mymodal">اطلاعات ساکنین</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>نام و نام خانوادگی:</label>
                                                        <input type="email" class="form-control" placeholder="مثال: علی رحمانی">
                                                        <span class="form-text text-muted">لطفا نام و نام خانوادگی خود را وارد کنید</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">جنسیت:</label>

                                                        <div class="kt-input-icon">
                                                            <select class="form-control" id="exampleSelect1">
                                                                <option>مرد</option>
                                                                <option>زن</option>


                                                            </select>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا جنسیت را وارد کنید</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>سن:</label>
                                                        <div class="kt-input-icon">
                                                            <input type="text" class="form-control borj-font" placeholder="مثال: 18">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا سن خود را وارد کنید</span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">تلفن همراه:</label>
                                                        <div class="kt-input-icon">
                                                            <input type="text" class="form-control borj-font" placeholder="مثال: 09201010328">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا مدل خودرو خود را مشخص کنید</span>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">افزودن ساکن</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p class=text-center>
                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #mymodal">افزودن ساکن</button></p>
                        </div>

                        <div class="tab-pane" id="kt_tabs_4" role="tabpanel">

                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped borj-font">
                                            <thead>
                                            <tr>

                                                <th>عنوان</th>
                                                <th>تاریخ اجرای درخواست</th>
                                                <th>تاریخ ثبت درخواست</th>
                                                <th>وضعیت</th>
                                                <th>حذف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">اثاث کشی</th>
                                                <td>1398/7/14</td>
                                                <td>1398_07_13  23:18:59</td>
                                                <td>تایید شده</td>
                                                <td><i class="fa fa-window-close kt-font-danger"></i></td>

                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal2">ثبت درخواست مجوز</h5>
                                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label class="">عنوان مجوز:</label>

                                                        <div class="kt-input-icon">
                                                            <select class="form-control" id="exampleSelect1">
                                                                <option>اثاث کشی</option>
                                                                <option>اجاره و فروش</option>
                                                                <option>تغییرات در واحد</option>


                                                            </select>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا عنوان مجوز را وارد کنید</span>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <label>تاریخ موردنظر</label>
                                                        <div class="kt-input-icon">
                                                            <input type="text" class="form-control" placeholder="مثال: کلیک کنید">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                        </div>
                                                        <span class="form-text text-muted">لطفا تاریخ موردنظر خود را وارد کنید</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">ثبت درخواست</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>



                            <p class=text-center>
                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modal2">درخواست مجوز</button></p>
                        </div>



                        <div class="tab-pane" id="kt_tabs_5" role="tabpanel">

                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped borj-font">
                                            <thead>
                                            <tr>
                                                <th>نام و نام خانوادگی</th>
                                                <th>پلاک خودرو</th>
                                                <th>تاریخ</th>
                                                <th>بازه زمانی</th>
                                                <th>خذف</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modall" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal3">ثبت تردد</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>نام و نام خانوادگی:</label>
                                                    <input type="email" class="form-control" placeholder="مثال: علی رحمانی">
                                                    <span class="form-text text-muted">لطفا نام و نام خانوادگی خود را وارد کنید</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>پلاک خودرو(در صورت وجود)</label>
                                                    <div class="kt-input-icon">
                                                        <input type="text" class="form-control borj-font" placeholder="مثال:333ن33 _ایران33">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                    </div>
                                                    <span class="form-text text-muted">لطفا پلاک خودرو خود را وارد کنید</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>تاریخ</label>
                                                    <div class="kt-input-icon">
                                                        <input type="text" class="form-control" placeholder="مثال: کلیک کنید">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span></span></span>
                                                    </div>
                                                    <span class="form-text text-muted">لطفا تاریخ را وارد کنید</span>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="">بازه زمانی</label>

                                                    <div class="kt-input-icon">
                                                        <select class="form-control" id="exampleSelect1">
                                                            <option>صبح</option>
                                                            <option>ظهر</option>
                                                            <option>عصر</option>
                                                            <option>شب</option>


                                                        </select>
                                                    </div>
                                                    <span class="form-text text-muted">لطفا بازه زمانی را وارد کنید</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">ثبت تردد</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class=text-center>
                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modal3">درخواست تردد</button></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-portlet">
        <div class="kt-portlet__head bg-success">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title"><i class="fa fa-file-alt mr-2 borj-size"></i>
                    تابلو اعلانات
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1"><i class="fa fa-user kt-font-success"></i>اعلان های عمومی</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_3_3"><i class="fa fa-user-friends kt-font-danger"></i>اعلان های شخصی</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget3_tab1_content">
                                <!--Begin::Timeline 3 -->
                                <div class="kt-timeline-v3">
                                    <div class="kt-timeline-v3__items">



                                        <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                                            <span class="kt-timeline-v3__item-time  borj-font">12:00</span>
                                            <div class="kt-timeline-v3__item-desc">
                                      <span class="kt-timeline-v3__item-text">
                                        اضافه شده توسط:
                                      </span><br>
                                                <span class="kt-timeline-v3__item-user-name">


                                      </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--End::Timeline 3 -->
                            </div>
                            <div class="tab-pane" id="kt_widget3_tab2_content">
                                <!--Begin::Timeline 3 -->
                                <div class="kt-timeline-v3">
                                    <div class="kt-timeline-v3__items">



                                        <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                                            <span class="kt-timeline-v3__item-time kt-font-success  borj-font">12:00</span>
                                            <div class="kt-timeline-v3__item-desc">
                                      <span class="kt-timeline-v3__item-text">
                                        اضافه شده توسط:
                                      </span><br>
                                                <span class="kt-timeline-v3__item-user-name">

                                      </span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!--End::Timeline 3 -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="kt_tabs_3_3" role="tabpanel">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=col-lg-4>

            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">

                            <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                JM
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <h3 class="kt-widget__username"><i class="flaticon2-correct"></i>
                                        بدهی سررسید شده شما

                                    </h3>

                                    <div class="kt-widget__action">
                                        <button type="button" class="btn btn-primary btn-sm btn-icon"><i class="la la-arrows"></i></button>
                                        <button type="button" class="btn btn-primary btn-sm btn-icon"><i class="flaticon2-delete"></i></button>
                                    </div>
                                </div>

                                <h5 class="kt-widget__subhead">
                                    <a href="#"><i class="fa fa-credit-card kt-font-danger mt-5"></i>پرداخت بدهی به صورت آنلاین</a>
                                    <br>
                                    <a href="#"><i class="fa fa-file-alt kt-font-danger mt-4"></i>مشاهده لیست کامل بدهی ها </a>

                                </h5>

                                <div class="kt-widget__info">


                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__bottom">
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-coins"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">مبلغ (ریال)</span>
                                    <span class="kt-widget__value borj-font">2,549,500</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-info"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">بابت</span>
                                    <span class="kt-widget__value borj-font">بدهی تا پایان دی ماه 1398</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-chat-1"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">کد صورتحساب</span>
                                    <span class="kt-widget__value kt-font-primary">CH-E201-139809-end</span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="flaticon-time-2"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__title">تاریخ سررسید</span>
                                    <span class="kt-widget__value kt-font-brand kt-font-danger borj-font">1398/9/30</span>
                                </div>
                            </div>



                            <div class="kt-widget__item">

                                <div class="kt-widget__details">
                                    <div class="kt-section__content kt-section__content--solid">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-8">


            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Sales Reports
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
                                    Last Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
                                    All Time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--Begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::tab 1 content-->
                        <div class="tab-pane active" id="kt_widget11_tab1_content">
                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td style="width:1%">#</td>
                                            <td style="width:40%">Application</td>
                                            <td style="width:14%">Sales</td>
                                            <td style="width:15%">Change</td>
                                            <td style="width:15%">Status</td>
                                            <td style="width:15%" class="kt-align-right">Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Loop</a>
                                                <span class="kt-widget11__sub">CRM System</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>$63</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Selto</a>
                                                <span class="kt-widget11__sub">Powerful Website Builder</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>$39</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Jippo</a>
                                                <span class="kt-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>$105</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Verto</a>
                                                <span class="kt-widget11__sub">Web Development Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>$16</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <!--end::tab 1 content-->

@endsection