@extends('dashboard.layouts.master', ['title' => 'مدیریت شارژ'])


@section('content')

    <style>
        .kt-widget1__item{
            padding-top: 0px!important;
        }
    </style>
    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />


        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-xl">
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <!--begin:: Widgets/Stats2-1 -->
                        <div class="kt-widget1 bg">
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h4 class="kt-widget1__title">مجموع واریزی های امروز</h4>
                                    <span class="kt-widget1__desc">(ریال)</span>
                                </div>
                                <h1 class="kt-widget1__number kt-font-brand borj-font">{{ number_format($invoices->where('updated_at', '>=', \Carbon\Carbon::today()->toDateString())->where('status', 'paid')->sum('amount')) }}</h1>
                            </div>





                        </div>
                        <!--end:: Widgets/Stats2-1 -->            </div>
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1 bg2">
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h4 class="kt-widget1__title">مجموع واریزی های دیروز</h4>
                                    <span class="kt-widget1__desc">(ریال)</span>
                                </div>
                                <h1 class="kt-widget1__number kt-font-danger borj-font">{{ number_format($invoices->where('updated_at', '>=', \Carbon\Carbon::yesterday()->toDateString())->where('updated_at', '<', \Carbon\Carbon::today()->toDateString())->where('status', 'paid')->sum('amount')) }}</h1>
                            </div>




                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-4">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1 bg3">
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h4 class="kt-widget1__title">مجموع واریزی های این ماه:</h4>
                                    <span class="kt-widget1__desc">(ریال)</span>
                                </div>
                                <h1 class="kt-widget1__number kt-font-success borj-font">{{ number_format($invoices->where('updated_at', '>=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-1)->toDateString())->where('status', 'paid')->sum('amount')) }}</h1>
                            </div>



                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-solid-warning"  role="alert">
            <div class="alert-icon"><i class="fa fa-chart-pie"></i></div>
            <h3 class="alert-text borj-font text-dark">مجموع بدهی شارژ سررسید شده تا پایان
                {{ jdate()->now()->format('%B %Y') }}
            </h3>
            <h1 class="alert-text"> </h1>
            <h1 class="alert-text borj-font text-warning"> {{ number_format($invoices->where('status', 'notPaid')->sum('amount')) }}
            ریال</h1>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست ریز واریزی ها از طریق درگاه اینترنتی سامانه
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_1">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>تاریخ</th>
                                <th>مبلغ (ریال)</th>
                                <th>کد واحد</th>
                                <th>نام و نام خانوادگی</th>
                                <th>بابت</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($invoices->where('status', 'paid')->take(1000) as $invoice)
                                <tr>
                                    <td style="font-fami!important; direction: ltr">{{ jdate($invoice->updated_at) }}</td>
                                    <td style="font-family: BYekan!important;"> {{ number_format($invoice->amount) }} </td>
                                    <td>{{ $invoice->user->code }}</td>
                                    <td>{{ $invoice->user->fullName }}</td>
                                    <td>{{ $invoice->for }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست بدهی واحد ها<small>(به ترتیب بدهکار ترین)</small>
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>مبلغ</th>
                                <th>کد واحد</th>
                                <th>نام مالک</th>
                                <th>شماره موبایل</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($invoices->where('status', 'notPaid')->groupBy('user_id') as $invoice)
                                <tr>
                                    <td style="font-family: BYekan!important;"> {{ number_format($invoice->sum('amount')) }} </td>
                                    <td> {{ isset($invoice->first()->user) ?  $invoice->first()->user->code : ''  }} </td>
                                    <td> {{ isset($invoice->first()->user) ?  $invoice->first()->user->fullName : '' }} </td>
                                    <td style="font-family: BYekan!important;"> {{ isset($invoice->first()->user) ?  $invoice->first()->user->mobile : ''  }} </td>
                                </tr>

                            @endforeach

                            </tbody>

                        </table>
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


                // start data table m_table_1
                var f;
                f = $("#m_table_1").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0, order: ['0', 'desc'],


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
                // end data table m_table_1



                // start data table m_table_2
                var t;
                t = $("#m_table_2").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0, order: ['0', 'desc'],

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

    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>




@stop