@extends('dashboard.layouts.master', ['title' => 'درخواست ها'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="modal fade text-left" id="AddTicket" tabindex="-1" role="dialog" aria-labelledby="AddTicket" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddTicket">افزودن درخواست</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('tickets.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">حوزه درخواست:</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="scope">
                                        <option {{ old('scope') == 'شارژ' ? 'selected' : '' }} value="شارژ">
                                            شارژ
                                        </option>
                                        <option {{ old('scope') == 'نظافت' ? 'selected' : '' }} value="نظافت">
                                            نظافت
                                        </option>
                                        <option {{ old('scope') == 'نگهبانی' ? 'selected' : '' }} value="نگهبانی">
                                            نگهبانی
                                        </option>
                                        <option {{ old('scope') == 'فضای سبز' ? 'selected' : '' }} value="فضای سبز">
                                            فضای سبز
                                        </option>
                                        <option {{ old('scope') == 'امنیت و ایمنی' ? 'selected' : '' }} value="امنیت و ایمنی">
                                            امنیت و ایمنی
                                        </option>
                                        <option {{ old('scope') == 'تاسیسات' ? 'selected' : '' }} value="تاسیسات">
                                            تاسیسات
                                        </option>
                                        <option {{ old('scope') == 'آسانسور' ? 'selected' : '' }} value="آسانسور">
                                            آسانسور
                                        </option>
                                        <option {{ old('scope') == 'پیمانکاران' ? 'selected' : '' }} value="پیمانکاران">
                                            پیمانکاران
                                        </option>
                                        <option {{ old('scope') == 'سایر' ? 'selected' : '' }} value="سایر">
                                            سایر
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">عنوان درخواست:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" placeholder="مثال: مشکل نما" value="{{old('title')}}" name="title" id="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">درخواست شده از:</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="requestedFrom">
                                        <option {{ old('requestedFrom') == 'مدیر اجرایی' ? 'selected' : '' }} value="مدیر اجرایی">
                                            مدیر اجرایی
                                        </option>
                                        <option {{ old('requestedFrom') == 'هیات مدیره' ? 'selected' : '' }}  value="هیات مدیره">
                                            هیات مدیره
                                        </option>
                                        <option {{ old('requestedFrom') == 'خزانه دار' ? 'selected' : '' }} value="خزانه دار">
                                            خزانه دار
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">توضیحات مربوط به درخواست:</label>
                                <div class="col-md-9">
                                    <textarea id="description" rows="3" class="form-control"
                                              name="description"
                                              placeholder="توضیحات">{{old('description')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">ضمیمه فایل:</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="attachment" {{old('attachment')}} class="custom-file-input"
                                               id="attachment">
                                        <label class="custom-file-label"  for="attachment">جهت ضمیمه فایل
                                            یا تصویر کلیک کنید</label>
                                    </div>
                                </div>
                            </div>






                        </div>

                        <div class="form-actions">
                            <center>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check-square-o"></i> ثبت
                                </button>

                                <button data-dismiss="modal" type="button" class="btn btn-warning mr-1"><i class="ft-x"></i> لغو</button>
                            </center>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>




    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-lg">

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">تعداد کل درخواست ها:</h4>
                            </div>

                            <span class="kt-widget24__stats kt-font-brand">{{ $tickets->count()  }}</span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title"> بررسی نشده:</h4>

                            </div>

                            <span class="kt-widget24__stats kt-font-warning">{{ $tickets->where('status', 'بررسی نشده')->count() }}</span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>


                    </div>
                    <!--end::New Feedbacks-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">درحال انجام:</h4>

                            </div>

                            <span class="kt-widget24__stats kt-font-danger">{{ $tickets->where('status', 'درحال انجام')->count() }}</span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>


                    </div>
                    <!--end::New Orders-->
                </div>

                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">تایید شده:</h4>

                            </div>

                            <span class="kt-widget24__stats kt-font-success">{{ $tickets->where('status', 'تایید شده')->count() }}</span>
                        </div>

                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
                    <!--end::New Users-->
                </div>

            </div>
        </div>
    </div>



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">




        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست درخواست های شما
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <button  style="float: right;"   class="btn btn-sm btn-success mr-1  ladda-button"  data-target="#AddTicket" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  ثبت درخواست جدید  </span></button>

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
                        <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                            <thead style="text-align:center">
                            <tr style="text-align:center">
                                <th>عنوان درخواست</th>
                                <th>درخواست شده از</th>
                                <th>درخواست توسط</th>
                                <th>حوزه درخواست</th>
                                <th>آخرین وضعیت</th>
                                <th>فایل ضمیمه</th>
                                <th>تاریخ ایجاد</th>
                                <th>تاریخ آخرین بازنگری</th>
                                <th>مشاهده جزییات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->requestedFrom }}</td>
                                    <td>{{ $ticket->addedByName }}</td>
                                    <td>{{ $ticket->scope }}</td>
                                    <td><span class=" {{ $ticket->status == "درحال پیگیری" ? "badge badge-info" : '' }} {{ $ticket->status == "درحال انجام" ? "badge badge-primary" : '' }} {{ $ticket->status == "پاسخ داده شده" ? "badge badge-success" : '' }} {{ $ticket->status == "انجام شده" ? "badge badge-success" : '' }}  {{ $ticket->status == "تایید شده" ? "badge badge-success" : '' }}  {{ $ticket->status == "بررسی نشده" ? "badge badge-warning" : '' }} " >{{ $ticket->status }}</span></td>
                                    @if($ticket->attachment == "storage/tickets/Nothing")
                                        <td style="color: #808080"><i style="font-size: 20px" class="fa fa-text"></i></td>
                                    @else
                                        <td style="color: #3BAFDA"><a target="_blank" href="{{ $ticket->attachment }}"><i style="font-size: 20px" class="fa fa-file"></i></a></td>
                                    @endif
                                    <td style="direction: ltr!important;">{{ jdate($ticket->created_at) }}</td>
                                    <td style="direction: ltr!important;">{{ jdate($ticket->updated_at) }}</td>
                                    <td style="color: #3BAFDA"><a href="{{ route('tickets.edit', $ticket->id) }}"><i style="font-size: 20px" class="fa fa-edit"></i></a></td>
                                </tr>
                            @endforeach
                            <tfoot>
                            <tr>
                                <th>عنوان درخواست</th>
                                <th>درخواست شده از</th>
                                <th>درخواست توسط</th>
                                <th>حوزه درخواست</th>
                                <th>آخرین وضعیت</th>
                                <th>فایل ضمیمه</th>
                                <th>تاریخ ایجاد</th>
                                <th>تاریخ آخرین بازنگری</th>
                                <th>مشاهده جزییات</th>
                            </tr>
                            </tfoot>
                        </table>
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