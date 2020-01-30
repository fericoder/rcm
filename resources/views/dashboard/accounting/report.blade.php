@extends('dashboard.layouts.master', ['title' => 'گزارش براساس واحد'])


@section('content')

    <style>
        .kt-widget1__item{
            padding-top: 0px!important;
        }
    </style>
    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        مشاهده وضعیت واریزی بر اساس هر واحد

                    </h3>
                </div>
            </div>

            <div class="kt-portlet__body">
                <h4 class="kt-portlet__head-title text-dark mb-5">
                    جهت مشاهده وضعیت شارژ، واحد مورد نظر را انتخاب نمایید.</h4>


                <div class=" col-lg-4 col-md-9 col-sm-12">

                    <form action="{{ route('charge.report.show') }}" method="post">
                        @csrf
                        <select class="form-control m-select2" id="m_select2_1" name="id">
                            @foreach ($units as $unit)
                                <option
                                        @if (isset($unit)){{ $unit->code == $unit->code ? 'selected' : '' }} @endif value="{{ $unit->id }}">{{ $unit->fullName . ' - ' .  str_replace('/', '', $unit->code )}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-brand btn-min-width m-5 ladda-button "  ><span class="ladda-label">  <i class="icon-plus"></i>  مشاهده وضعیت شارژ واحد  </span></button>
                    </form>
                </div>






                @if (isset($invoices))



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
                                                    بدهی سررسید پرداخت نشده
                                                </h4>
                                            </div>
                                            <h1 class="font-large-1 text-bold-300 text-danger float-right kt-font-bold borj-font mt-5">{{ number_format($invoices->where('status' ,'notPaid')->sum('amount')) }} ریال </h1>
                                        </div>

                                        <div class="progress progress--sm">
                                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    مجموع پرداختی
                                                </h4>

                                            </div>

                                            <h1 class="font-large-1 text-bold-300 text-success float-right kt-font-bold borj-font mt-5">{{ number_format($invoices->where('status' ,'paid')->sum('amount')) }} ریال</h1>
                                        </div>

                                        <div class="progress progress--sm">
                                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <div class="kt-widget24__action pt-2">

                                        </div>
                                    </div>
                                    <!--end::New Users-->
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
                                            کل صورت حساب های واحد
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
                                        <thead>
                                        <tr style="text-align:center" >
                                            <th>تاریخ آخرین ویرایش</th>
                                            <th>مبلغ</th>
                                            <th>کد واحد</th>
                                            <th>بابت</th>
                                            <th>نام</th>
                                            <th>شماره همراه</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($invoices as $invoice)
                                            <tr style="text-align:center" >
                                                <td style="direction: ltr; font-family: BYekan!important;">{{ jdate($invoice->updated_at) }}</td>
                                                <td style="font-family: BYekan!important;">{{ number_format($invoice->amount)  }}</td>
                                                <td>{{ $invoice->user->code }}</td>
                                                <td>{{ $invoice->for }}</td>
                                                <td>{{ $invoice->user->fullName }}</td>
                                                <td style="font-family: BYekan!important;">{{ $invoice->user->mobile }}</td>
                                                <td>
                                                    @if ($invoice->status == 'paid')
                                                        <span class='badge badge-success'>پرداخت شده</span>
                                                    @elseif($invoice->status == 'notPaid')
                                                        <span class='badge badge-danger'>پرداخت نشده</span>
                                                    @endif
                                                </td>
                                        @endforeach




                                        </tbody>
                                        <tfoot>
                                        <tr style="text-align:center" >
                                            <th>تاریخ آخرین ویرایش</th>
                                            <th>مبلغ</th>
                                            <th>کد واحد</th>
                                            <th>بابت</th>
                                            <th>نام</th>
                                            <th>شماره همراه</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                @endif





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






            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>

    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>




@stop