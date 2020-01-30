@extends('dashboard.layouts.master', ['title' => 'مدیریت مالکین و ساکنین'])


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

    </style>


<div class="text-right mb-3 mt-3 mr-3">
    <a href="{{ route('units.index') }}"><span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-danger "><i class="flaticon-reply mr-3"></i>بازگشت به لیست وحد ها</span></a>
</div>


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



    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-xl">
                <div class="col-md-12 col-lg-12 col-xl-4">
                    <!--begin:: Widgets/Stats2-1 -->
                    <div class="kt-widget1">
                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">نام و نام خانوادگی مالک:</h3>
                            </div>
                            <span class="kt-widget1__number kt-font-brand">{{ $unit->fullName }}</span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">متراژ</h3>
                            </div>
                            <span style="font-family: BYekan!important;" class="kt-widget1__number kt-font-danger">{{ $unit->area }} متر مربع</span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">شماره موبایل</h3>
                            </div>
                            <span style="font-family: BYekan!important;" class="kt-widget1__number kt-font-success">{{ $unit->mobile }}</span>
                        </div>

                    </div>
                    <!--end:: Widgets/Stats2-1 -->
                </div>
                <div class="col-md-12 col-lg-12 col-xl-4">
                    <!--begin:: Widgets/Stats2-2 -->
                    <div class="kt-widget1">
                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">کد واحد</h3>
                            </div>
                            <span class="kt-widget1__number kt-font-success">{{ $unit->code }}</span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">مبلغ ماهیانه شارژ</h3>
                            </div>
                            <span style="font-family: BYekan!important;" class="kt-widget1__number kt-font-info">{{ number_format($unit->charge) }} ریال </span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">تلفن ثابت</h3>
                            </div>
                            <span style="font-family: BYekan!important;" class="kt-widget1__number kt-font-warning">{{ $unit->phone1 }} | {{ $unit->phone1 }}</span>
                        </div>

                    </div>
                    <!--end:: Widgets/Stats2-2 -->
                </div>
                <div class="col-md-12 col-lg-12 col-xl-4">
                    <!--begin:: Widgets/Stats2-3 -->
                    <div class="kt-widget1">
                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">اطلاعات واحد</h3>
                            </div>
                            <span style="font-family: BYekan!important;" class="kt-widget1__number kt-font-success">
                            برج:
                                {{ $unit->tower }}،

                                                            طبقه:
                                {{ $unit->floor }}،

                                                            واحد:
                                {{ $unit->unit }}


                            </span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">وضعیت سکونت</h3>
                            </div>
                            <span class="kt-widget1__number kt-font-danger">{{ $unit->propertyStatus == null || $unit->propertyStatus == 'empty' ? 'خالی' : 'ساکن' }}</span>
                        </div>

                        <div class="kt-widget1__item">
                            <div class="kt-widget1__info">
                                <h3 class="kt-widget1__title">نوع ساکن</h3>
                            </div>
                            <span class="kt-widget1__number kt-font-primary">{{ $unit->residentType == null || $unit->residentType == 'empty' ? 'مالک' : 'مستاجر' }}</span>
                        </div>

                    </div>
                    <!--end:: Widgets/Stats2-3 -->
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title kt-font-danger"><i class="fa fa-wallet kt-font-danger mr-2"></i>
                            لیست بدهی های پرداخت نشده واحد
                        </h3>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover  display nowrap " id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th style="min-width: 150px">عنوان صورتحساب</th>
                                <th>مبلغ (ریال)</th>
                                <th>کد</th>
                                <th>تاریخ ایجاد</th>
                                <th>تاریخ آخرین ویرایش</th>
                                <th style="min-width: 90px;">ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($invoices->where('status', 'notPaid') as $invoice)
                                <tr>
                                    <td>{{ $invoice->for }}</td>
                                    <td style="font-family: BYekan!important;">{{ number_format($invoice->amount) }}</td>
                                    <td>{{ $invoice->code }}</td>
                                    <td style="font-family: BYekan!important; direction: ltr">{{ jdate($invoice->created_at) }}</td>
                                    <td style="font-family: BYekan!important; direction: ltr">{{ jdate($invoice->updated_at) }}</td>
                                    <td><a href="{{ route('invoices.edit', $invoice->id) }}"><i class="flaticon-edit"></i></a></td>
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
                        <h3 class="kt-portlet__head-title kt-font-success"><i class="fa fa-vote-yea kt-font-success mr-2"></i>
                            لیست پرداختی های واحد
                        </h3>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                    <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover  display nowrap " id="m_table_3">
                        <thead style="font-family: BYekan">
                        <tr>
                            <th style="min-width: 150px">عنوان صورتحساب</th>
                            <th>مبلغ (ریال)</th>
                            <th>کد</th>
                            <th>تاریخ ایجاد</th>
                            <th>تاریخ پرداخت</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($invoices->where('status', 'paid') as $invoice)
                            <tr>
                                <td>{{ $invoice->for }}</td>
                                <td style="font-family: BYekan!important;">{{ number_format($invoice->amount) }}</td>
                                <td>{{ $invoice->code }}</td>
                                <td style="font-family: BYekan!important; direction: ltr">{{ jdate($invoice->created_at) }}</td>
                                <td style="font-family: BYekan!important;direction: ltr">{{ jdate($invoice->updated_at) }}</td>
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
                        <h3 class="kt-portlet__head-title kt-font-warning"><i class="la la-warning kt-font-warning mr-2"></i>
                            لیست اخطاریه های واحد
                        </h3>
                        <button style="margin-right: 20px; font-size: 14px" type="button" class="btn btn-sm btn-outline-success">ثبت اخطاریه</button>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                    <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover  display nowrap " id="m_table_4">
                        <thead style="font-family: BYekan">
                        <tr>
                            <th style="min-width: 150px">حوزه اخطاریه</th>
                            <th>ارسال کتبی</th>
                            <th>تاریخ ایجاد</th>
                            <th>تاریخ آخرین ویرایش</th>
                            <th style="min-width: 90px;">ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($warnings as $warning)
                            <tr>
                                <td>{{ $warning->for }}</td>
                                <td>{{ $warning->amount }}</td>
                                <td>{{ $warning->code }}</td>
                                <td>{{ $warning->created_at }}</td>
                                <td>{{ $warning->updated_at }}</td>
                                <td><a href="{{ route('warnings.edit', $warning->id) }}"><i class="flaticon-edit"></i></a></td>
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