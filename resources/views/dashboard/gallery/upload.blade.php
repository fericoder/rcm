@extends('dashboard.layouts.master', ['title' => 'گالری تصاویر | بارگذاری تصویر'])

@section('headerScripts')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow, .select2-container--default .select2-selection--multiple .select2-selection__arrow{
            font-family: "LineAwesome"!important;
        }

    </style>

    <link rel="stylesheet" href="/dashboard/assets/css/dropzone.css">

    <style>
        .dropzone{
            min-height: 550px!important;
        }
    </style>


@stop


@section('content')

    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                    <div class="alert-text">
                        جهت باگذاری تصویر، ابتدا دسته بندی و توضیحات را وارد نموده و سپس برروی آیکون زیر متن کلیک نمایید و تصاویر را انتخاب کنید. شایان ذکر است که میتوانید چندین تصویر را بصورت یکجا بارگذاری نمایید.
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آپلود فایل در گالری
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <form  action="{{ route('gallery.store') }}" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
                            @csrf
                            <div style="font-family: Arial!important;" class="row justify-content-md-center">



                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">دسته بندی: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_1" name="category">
                                            <option value="نمای کلی مجتمع">نمای کلی مجتمع</option>
                                            <option value="حیاط">حیاط</option>
                                            <option value="بالکن">بالکن</option>
                                            <option value="لابی">لابی</option>
                                            <option value="سایر">سایر</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div  class="form-group margin-top-30 ">
                                        <center>  <label style="direction:rtl;font-family:Byekan" class="control-label">توضیحات تصویر:</label> </center>
                                        <input style="direction:rtl;font-family:Byekan" type="text" placeholder="مثال: تهران از دید طبقه ۲۰ " name="description" class="form-control">
                                    </div>
                                </div>

                            </div>





                            <div style="margin-top: 1px" class="dz-default dz-message"><span>جهت بارگذاری تصویر یا ویدیو، اینجا کلیک کنید.</span></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>







    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')
    <script src="/dashboard/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <!--begin::Page Scripts -->
    <script>
        var DatatablesExtensionButtons = {
            init: function () {
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

                var b;
                b = $("#m_table_3").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

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

            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->
    <script src="/dashboard/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="/dashboard/assets/js/dropzone.min.js" type="text/javascript"></script>

@stop
