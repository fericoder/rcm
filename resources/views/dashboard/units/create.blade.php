@extends('dashboard.layouts.master', ['title' => 'افزودن واحد جدید'])


@section('content')
    <style>
        th,td{
            width: 100px!important;
        }
        .kt-widget1__title{
            font-size: 1.3rem!important;
        }

        .kt-widget1__number{
            font-size: 1.7rem!important;
        }
        label{
            text-align: right!important;
        }

    </style>


<div class="text-right mb-3 mt-3 mr-3">
    <a href="{{ route('units.index') }}"><span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-danger "><i class="flaticon-reply mr-3"></i>بازگشت به لیست اطلاعات واحد</span></a>
</div>



    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        افزودن واحد جدید به {{ \Auth::user()->complex->name }}
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form action="{{ route('units.store') }}" method="POST" class="kt-form kt-form--label-right">
                @csrf
                <div class="kt-portlet__body">

                    <div class="kt-section kt-section--first">
                        <h3 class="kt-section__title">۱. اطلاعات واحد:</h3>
                        <div class="kt-section__body">
                            @if (\Auth::user()->complex->type == 'multiBlock')
                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label">برج یا بلوک:<span style="color: red">*</span></label>
                                    <div class="col-lg-3">
                                        <input type="text" name="tower" class="form-control" placeholder="مثلا: شرقی یا E یا A1">
                                        <span class="form-text text-muted">باتوجه به چند بلوکه بودن مجتمع شما، لطفا نام بلوک را وارد نمایید.</span>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label">طبقه:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" name="floor" class="form-control" placeholder="مثال: ۱۰">
                                    <span class="form-text text-muted">طبقه این واحد را بصورت عددی وارد نمایید.</span>
                                </div>

                                <label class="col-lg-1 col-form-label">شماره واحد:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <input type="number" name="unit" class="form-control" placeholder="مثال: ۱">
                                    <span class="form-text text-muted">شماره واحد در طبقه را بصورت عددی وارد نمایید</span>
                                </div>


                                <label class="col-lg-1 col-form-label">کد واحد:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <input type="text" name="code" class="form-control" placeholder="مثال: E101">
                                    <span class="form-text text-muted">کد واحد در مجتمع را وارد نمایید</span>
                                </div>


                            </div>





                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label">متراژ:<span style="color: red">*</span></label>
                                    <div class="col-lg-3">
                                        <input type="number" name="area" class="form-control" placeholder="مثال: ۱۲۰">
                                        <span class="form-text text-muted">متراژ واحد را بصورت عددی وارد نمایید</span>
                                    </div>

                                    <label class="col-lg-1 col-form-label"> شارژ ماهیانه:<span style="color: red">*</span></label>
                                    <div class="col-lg-3">
                                        <input type="text" name="charge" class="form-control" placeholder="مثال: ۵۰۰۰۰۰۰">
                                        <span class="form-text text-muted">مبلغ را به ریال وارد نمایید</span>
                                    </div>



                                </div>


                        </div>

                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                        <h3 class="kt-section__title">۲. اطلاعت مالک</h3>
                        <div class="kt-section__body">
                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label">نام و نام خانوادگی:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <input type="text" name="fullName" class="form-control" placeholder="مثال: علی رحمانی">
                                    <span class="form-text text-muted">نام و نام خانوادگی مالک را وارد نمایید</span>
                                </div>


                                <label class="col-lg-1 col-form-label">شماره موبایل:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                        <input type="text" name="mobile" class="form-control" placeholder="مثال:‌۰۹۲۰۱۰۱۰۳۲۸">
                                    </div>
                                </div>


                                <label class="col-lg-1 col-form-label">تلفن ثابت:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                        <input type="text" name="phone1" class="form-control" placeholder="مثال:۰۲۱-۲۲۳۲۳۳۲۲">
                                    </div>
                                </div>



                            </div>



                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label">نوع حساب کاربری:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <select class="form-control" name="userType" id="exampleSelect1">
                                            <option name="user" >ساکن</option>
                                            <option name="boardMember" >هیات مدیره</option>
                                            <option name="admin" >مدیر</option>
                                        </select>
                                    </div>
                                </div>


                                <label class="col-lg-1 col-form-label">وضعیت حساب کاربری:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <select class="form-control" name="userStatus" id="exampleSelect1">
                                            <option name="enable" >فعال</option>
                                            <option name="disable" >غیرفعال</option>
                                        </select>
                                    </div>
                                </div>


                                <label class="col-lg-1 col-form-label">وضعیت سکونت:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <select class="form-control" name="propertyStatus" id="exampleSelect1">
                                            <option name="resident" >ساکن</option>
                                            <option name="empty" >خالی</option>
                                        </select>
                                    </div>
                                </div>


                            </div>




                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label">نوع ساکن:<span style="color: red">*</span></label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <select class="form-control" name="residentType" id="exampleSelect1">
                                            <option name="owner" >مالک</option>
                                            <option name="tenant" >مستاجر</option>
                                        </select>
                                    </div>
                                </div>


                                <label class="col-lg-1 col-form-label">آدرس ایمیل:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control" placeholder="مثال: rahmani@test.com">
                                    </div>
                                </div>


                                <label class="col-lg-1 col-form-label">تصویر حساب کاربری:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                </div>


                            </div>




                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success">افزودن واحد</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
</div>






@endsection


@section('footerScripts')



    <script>
        var DatatablesExtensionButtons = {
            init: function () {

                // start data table m_table_2
                var t;
                t = $("#m_table_2").DataTable({

                        scrollY: "", scrollX: true,
                        responsive: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), t.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), t.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), t.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), t.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), t.button(4).trigger()
                        }
                    )
                // end data table m_table_2





                // start data table m_table_3
                var b;
                t = $("#m_table_3").DataTable({

                        scrollY: "", scrollX: true,
                        responsive: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), b.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), b.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), b.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), b.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), b.button(4).trigger()
                        }
                    )
                // end data table m_table_3




                // start data table m_table_4
                var c;
                t = $("#m_table_4").DataTable({

                        scrollY: "", scrollX: true,
                        responsive: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), c.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), c.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), c.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), c.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), c.button(4).trigger()
                        }
                    )
                // end data table m_table_4






            }

        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );



    </script>
@stop