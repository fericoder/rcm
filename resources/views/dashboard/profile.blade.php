@extends('dashboard.layouts.master', ['title' => 'تنظیمات کاربری'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />




    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif






                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    پروفایل کاربری
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin::Accordion-->
                            <div class="accordion" id="accordionExample1">
                                <div style="display:none;" class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            تغییر اطلاعات کلی
                                        </div>
                                    </div>
                                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                        <div class="card-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                            تغییر رمز عبور
                                        </div>
                                    </div>
                                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
                                        <div class="card-body">
                                            <form method="post" action="{{ route('profile.password') }}" class="kt-form">
                                                @csrf
                                                <div class="kt-portlet__body">
                                                    <div style="margin-right: 20%; margin-left: 20%" class="kt-section kt-section--first">

                                                        <div class="form-group">
                                                            <label>رمز عبور فعلی:</label>
                                                            <input type="password" name="password" class="form-control">
                                                            <span class="form-text text-muted">بدلیل مسایل امنیتی، لطفا رمز عبور فعلی خودرا وارد نمایید.</span>
                                                        </div>

                                                        <div class="form-group mt-4">
                                                            <label>رمز عبور جدید:</label>
                                                            <input type="password" name="new_password" class="form-control">
                                                            <span class="form-text text-muted">رمز عبور جدید خودرا وارد نمایید.</span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>تکرار رمز عبور جدید:</label>
                                                            <input type="password" name="new_password_confirmation" class="form-control" >
                                                            <span class="form-text text-muted">جهت تطبیق، لطفا مجددا رمز عبور خودرا وارد نمایید.</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <p class="text-center"><button type="submit" style="font-size: 15px" class="btn btn-success">تغییر رمز عبور</button></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree1">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                            تغییر تصویر پروفایل
                                        </div>
                                    </div>
                                    <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
                                        <div class="card-body">
                                            <form method="post" action="{{ route('profile.avatar') }}" enctype="multipart/form-data" class="kt-form">
                                                @csrf
                                                <div class="kt-portlet__body">
                                                    <div style="margin-right: 20%; margin-left: 20%" class="kt-section kt-section--first">
                                                        <div class="custom-file">
                                                            <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                                            <label class="custom-file-label"  for="attachment">جهت انتخاب تصویر، کلیک نمایید.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <p class="text-center"><button type="submit" style="font-size: 15px" class="btn btn-success">تغییر تصویر پروفایل</button></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Accordion-->
                        </div>
                    </div>
                </div>
            </div>










    </div>


@endsection


@section('footerScripts')
    <script src="/dashboard/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

    <script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
    <script>
        var DatatablesExtensionButtons = {
            init: function () {




                // start data table m_table_2
                var t;
                t = $("#m_table_2").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

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
                var g;
                g = $("#m_table_3").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), g.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), g.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), g.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), g.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), g.button(4).trigger()
                        }
                    )
// end data table m_table_3



                // start data table m_table_4
                var f;
                f = $("#m_table_4").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), f.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), f.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), f.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), f.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), f.button(4).trigger()
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
