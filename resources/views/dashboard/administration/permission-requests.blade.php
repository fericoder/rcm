@extends('dashboard.layouts.master', ['title' => 'مدیریت قرارداد ها'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="row">
        <div class="col-lg-12">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h5 class="kt-portlet__head-title">
                            لیست درخواست مجوزها

                        </h5>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1">
                                <i class="fa fa-clipboard-check kt-font-success"><span class="kt--visible-desktop-inline-block kt-font-info ml-2">درخواست های در انتظار تایید</span></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_4">
                                <i class="fa fa-check-circle kt-font-danger"><span class="kt--visible-desktop-inline-block kt-font-info ml-2">درخواست های تایید شده</span></i>
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
                                                <th>عنوان</th>
                                                <th>تاریخ اجرا</th>
                                                <th>آخرین وضعیت</th>
                                                <th>واحد درخواست کننده</th>
                                                <th>تایید درخواست</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"> علی رحمانی</th>
                                                <td>تغییرات در واحد</td>
                                                <td>1398/1/5</td>
                                                <td>در دست بررسی</td>
                                                <td>برج شرقی، طبقه20، واحد1_ E/20/1</td>
                                                <td>
                                                    <i class="fa fa-check-square kt-font-success"></i>
                                                </td>

                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="tab-pane" id="kt_tabs_2" role="tabpanel">

                            <div class="kt-portlet__body">
                                <!--begin::Section-->
                                <div class="kt-section">
                                    <div class="kt-section__content">
                                        <div class="table-responsive">
                                            <t>
                                            </t><table class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th> نام و نام خانوادگی</th>
                                                    <th>پلاک خودرو</th>
                                                    <th>تاریخ</th>
                                                    <th>بازه زمانی</th>
                                                    <th>واحد درخواست کننده</th>
                                                    <th>شماره همراه</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row"> علی رحمانی</th>
                                                    <td>33 ن 333 ایران 33</td>
                                                    <td>1398/1/5</td>
                                                    <td>عصر</td>
                                                    <td>برج شرقی، طبقه20، واحد1_ E/20/1</td>
                                                    <td>09121212121</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <br>

                                <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">اضافه کردن وسیله نقلیه</button>

                                <div class="modal fade show" id="modall" tabindex="-1" role="dialog" style="padding-right: 16px; display: block;">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">New message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="form-control-label">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--end::Section-->
                            </div>


                        </div>

                        <div class="tab-pane" id="kt_tabs_3" role="tabpanel">
                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
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
                            </div>




                            <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">افزودن ساکن</button>
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
                            </div>

                        </div>



                        <div class="tab-pane" id="kt_tabs_5" role="tabpanel">

                            <div class="kt-section">
                                <div class="kt-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
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




                            <button type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air" data-toggle="modal" data-target=" #modall">ثبت تردد</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


@section('footerScripts')
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






            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>
@stop