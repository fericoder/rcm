@extends('dashboard.layouts.master', ['title' => 'داشبورد اصلی'])


@section('content')

    <style>
        th,td{
            vertical-align: middle!important;
        }
    </style>
    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-lg">

                <div class="col-md-12 col-lg-6 col-xl-6">
                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    <i class="fa fa-wallet kt-font-danger mr-2"></i>
                                    بدهی سررسید شده شما
                                </h4>
                                <span class="kt-widget24__desc">
					            مربوط به تمامی صورتحساب ها
					        </span>
                            </div>
                            <h1 class="font-large-1 text-bold-300 text-danger float-right kt-font-bold borj-font mt-5">{{ number_format(\Auth::user()->invoices->where('status', 'notPaid')->sum('amount')) }} ریال </h1>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action pt-2">
                            <a href="#notPaid"><span class="kt-widget24__change kt-font-brand">جهت مشاهده لیست تمامی صورتحساب ها اینجا کلیک کنید</span></a>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>



                <div class="col-md-12 col-lg-6 col-xl-6">
                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    <i class="fa fa-vote-yea kt-font-success mr-2"></i>
                                    پرداختی این ماه شما
                                </h4>
                                <span class="kt-widget24__desc">
					            فقط این ماه
					        </span>
                            </div>

                            <h1 class="font-large-1 text-bold-300 text-success float-right kt-font-bold borj-font mt-5">{{ number_format(\Auth::user()->invoices->where('status', 'paid')->where('created_at', '>=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-1)->toDateString())->sum('amount')) }} ریال</h1>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="kt-widget24__action pt-2">
                            <a href="#paid"><span class="kt-widget24__change kt-font-brand">جهت مشاهده لیست تمامی صورتحساب ها اینجا کلیک کنید</span></a>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>

            </div>
        </div>
    </div>

    <div style="display: none;" id="description" class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-information kt-font-brand"></i></div>
        <div class="alert-text">
            {{ \Auth::user()->fullName }} <span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-success">(واحد {{ \Auth::user()->code }} )</span>
            ،
            به سامانه مدیریت مجتمع مسکونی خوش آمدید.
            در این صفحه میتوانید ضمن مشاهده تمامی پرداخت ها، بدهی های سررسید شده را مشاهده و نسبت به پرداخت با استفاده از درگاه آنلاین بانک اقدام نمایید. همچنین امکان شرکت در نظرسنجی ها، ارسال درخواست ها، انتقادات و پیشنهادات به مدیریت و هیئت مدیره برج فراهم است و میتوانید تمامی درآمدها و هزینه های برج در ماژول های دیگر این سامانه مشاهده نمایید.
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="color: #48465b" class="kt-portlet__head-title"><i style="color: #74788d" class="fa fa-home mr-2"></i>
                            اطلاعات واحد شما
                        </h3>
                        <button id="show" style="margin-right: 20px; font-size: 14px" type="button" class="btn btn-sm btn-outline-success">مشاهده توضیحات</button>
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
                                                <th style="min-width: 150px;"> نام و نام خانوادگی</th>
                                                <th>برج</th>
                                                <th>طبقه</th>
                                                <th> واحد</th>
                                                <th> کد سیستمی واحد</th>
                                                <th style="min-width: 80px;">متراژ واحد</th>
                                                <th style="min-width: 120px;" > شارژ ماهیانه</th>
                                                <th>شماره همراه</th>
                                                <th>تلفن منزل</th>
                                                <th style="min-width: 120px;">وضعیت سکونت</th>
                                                <th style="min-width: 120px;">نوع ساکن</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">{{ \Auth::user()->fullName  }}</th>
                                                <td>{{ \Auth::user()->tower }}</td>
                                                <td>{{ \Auth::user()->floor }}</td>
                                                <td>{{ \Auth::user()->unit }}</td>
                                                <td>{{ \Auth::user()->code }}</td>
                                                <td>{{ \Auth::user()->area }}</td>
                                                <td>{{ number_format(\Auth::user()->charge) }}</td>
                                                <td>{{ \Auth::user()->mobile }}</td>
                                                <td>{{ \Auth::user()->phone1 }}</td>
                                                <td>{{ \Auth::user()->propertyStatus == null || \Auth::user()->propertyStatus == 'empty' ? 'خالی' : 'ساکن' }} </td>
                                                <td>{{ \Auth::user()->residentType == null || \Auth::user()->residentType == 'empty' ? 'مالک' : 'مستاجر' }}</td>
                                            </tr>


                                            </tbody>
                                        </table>
                                        <span class="mt-2">درصورت وجود مغایرت اطلاعات فوق، میتوانید در قسمت درخواست ها، درخواست خودرا مبنی بر تغییر اطلاعات درج نمایید.</span>
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




    <div style="max-height: 400px; overflow: scroll; display: none" class="kt-portlet">
        <div class="kt-portlet__head">
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

                    <div  class="kt-portlet__body">
                        <div class="kt-notification kt-notification--fit">
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div  class="kt-notification__item-title">
                                        لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                    </div>
                                    <div class="kt-notification__item-time">
                                       ۲ روز پیش | علی رحمانی
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                    </div>
                                    <div class="kt-notification__item-time">
                                        ۲ روز پیش | علی رحمانی
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                    </div>
                                    <div class="kt-notification__item-time">
                                        ۲ روز پیش | علی رحمانی
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>



                </div>

                <div class="tab-pane" id="kt_tabs_3_3" role="tabpanel">


                    <div  class="kt-portlet__body">
                        <div class="kt-notification kt-notification--fit">
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div  class="kt-notification__item-title">
                                        لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                    </div>
                                    <div class="kt-notification__item-time">
                                        ۲ روز پیش | علی رحمانی
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-bell kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                    </div>
                                    <div class="kt-notification__item-time">
                                        ۲ روز پیش | علی رحمانی
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="notPaid" class="row">
        <div class="col-xl-12">
            <!--begin:: Widgets/New Users-->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <i class="fa fa-wallet kt-font-danger mr-2"></i>
                            صورتحساب های پرداخت نشده واحد شما
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th style="min-width: 120px;">لینک پرداخت</th>
                                <th style="min-width: 180px;">بابت</th>
                                <th style="min-width: 140px;">مبلغ (ریال) </th>
                                <th style="min-width: 150px;">کد</th>
                                <th style="min-width: 170px; direction: ltr">تاریخ ایجاد صورتحساب</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (\Auth::user()->invoices->where('status', 'notPaid') as $invoice)
                                <tr>
                                    <th scope="row"><a style="font-size: 16px" href="#" class="btn btn-sm btn-label-danger btn-bold"><i class="fa fa-credit-card"></i> پرداخت </a></th>
                                    <td>{{ $invoice->for }}</td>
                                    <td style="font-family: BYekan!important;">{{ number_format($invoice->amount) }}</td>
                                    <td>{{ $invoice->code }}</td>
                                    <td style="direction: ltr; font-family: BYekan!important;"> {{ jdate($invoice->created_at) }} </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/New Users-->
        </div>

    </div>



    <div id="paid" class="row">
        <div class="col-xl-12">
            <!--begin:: Widgets/New Users-->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <i class="fa fa-vote-yea kt-font-success mr-2"></i>
                            صورتحساب های پرداخت شده واحد شما
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th style="min-width: 170px;">لینک پرداخت</th>
                                <th style="min-width: 180px;">بابت</th>
                                <th style="min-width: 140px;">مبلغ (ریال) </th>
                                <th style="min-width: 150px;">کد</th>
                                <th style="min-width: 170px; direction: ltr">تاریخ ایجاد صورتحساب</th>
                                <th style="min-width: 170px; direction: ltr">تاریخ پرداخت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (\Auth::user()->invoices->where('status', 'paid') as $invoice)
                                <tr>
                                    <th scope="row"><a style="font-size: 16px" href="#" class="btn btn-sm btn-label-success btn-bold"><i class="fa fa-vote-yea"></i> پرداخت شده </a></th>
                                    <td>{{ $invoice->for }}</td>
                                    <td style="font-family: BYekan!important;">{{ number_format($invoice->amount) }}</td>
                                    <td>{{ $invoice->code }}</td>
                                    <td style="direction: ltr; font-family: BYekan!important;"> {{ jdate($invoice->created_at) }} </td>
                                    <td style="direction: ltr; font-family: BYekan!important;"> {{ jdate($invoice->updated_at) }} </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/New Users-->
        </div>

    </div>



    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Support Tickets -->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            اخطاریه های ثبت شده واحد شما
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget3">
                        <div class="kt-widget3__item">
                            <div class="kt-widget3__header">
                                <div class="kt-widget3__info">
                                    <a href="#" class="kt-widget3__username">عنوان: راندن دوچرخه</a><br>
                                    <span class="kt-widget3__time">10/11/11</span>
                                </div>
                                <span class="kt-widget3__status kt-font-danger">50000 تومان</span>
                            </div>
                            <div class="kt-widget3__body">
                                <p class="kt-widget3__text">جهت مشاهده تصویر اینجا کلیک کنید.</p>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            <!--end:: Widgets/Support Tickets -->
        </div>



        <div class="col-xl-6">
            <!--begin:: Widgets/Support Tickets -->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            تابلو اعلانات
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget3">
                        <div class="kt-widget3__item">
                            <div class="kt-widget3__header">
                                <div class="kt-widget3__info">
                                    <a href="#" class="kt-widget3__username">عنوان: پرداخت شارژ</a><br>
                                    <span class="kt-widget3__time">10/11/11</span>
                                </div>
                                <span class="kt-widget3__status kt-font-success">اعلان عمومی</span>
                            </div>
                            <div class="kt-widget3__body">
                                <p class="kt-widget3__text">
                                    لطفا نسبت به پرداخت شارژ دیماه از طریق درگاه اقدام نمایید.
                                </p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!--end:: Widgets/Support Tickets -->
        </div>


    </div>




@endsection

@section('footerScripts')
    <script>
        $("#show").click(function () {
            $("#description").toggle('slow');
        });
    </script>
@stop
