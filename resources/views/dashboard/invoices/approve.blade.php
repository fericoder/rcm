@extends('dashboard.layouts.master', ['title' => 'بررسی و تایید فایل اکسل'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                بررسی و تایید فایل اکسل
                            </h3>
                        </div>


                    </div>
                    <div class="kt-portlet__body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                            <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th>ردیف</th>
                                    <th>کد واحد</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>مبلغ</th>
                                    <th>بابت</th>
                                    <th>کد صورتحساب</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($invoices[0] as $invoice)
                                    @if (!$loop->first)
                                        <tr>
                                            <td>{{ $invoice[0] }}</td>
                                            <td>{{ $invoice[1] }}</td>
                                            <td>{{ $invoice[2] }}</td>
                                            <td>{{ $invoice[3] }}</td>
                                            <td>{{ $invoice[4] }}</td>
                                            <td>{{ $invoice[5] }}</td>
                                        </tr>
                                    @endif

                                @endforeach

                                </tbody>

                            </table>
                            <p class="text-center mt-4"><a href="{{ route('invoices.excelApprove', ['id' => $id]) }}"><button type="button" class="m-auto text-center btn btn-success btn-wide btn-elevate btn-elevate-air">تایید و ایجاد صورتحساب ها</button></a></p>
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