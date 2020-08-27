@extends('dashboard.layouts.master', ['title' => 'ویرایش درخواست'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                               در این قسمت جزییات درخواست شماره {{ $ticket->id }} مورد نظر را مشاهده مینمایید. 
                            </h3>
                        </div>




                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <form style="font-family:Byekan" action="{{ route('tickets.update', $ticket->id) }}"
                              enctype="multipart/form-data" method="post" class="form">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i>
                                    اطلاعات کلی درخواست

                                    <span style="color: red">
                                                 |   نام درخواست کننده: {{ $ticket->user->fullName }}
                                                </span>

                                    <span style="color: red">
                                                 |   کد واحد: {{ $ticket->user->email }}
                                                </span>

                                    <span style="color: red">
                                                 |   شماره تماس: {{ $ticket->user->mobile }}
                                                </span>

                                </h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">عنوان:</label>
                                            <input class="form-control" type="text"
                                                   placeholder="مثال: مشکل نما" value="{{ $ticket->title }}" name="title" id="">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">حوزه درخواست:</label>
                                            <select class="form-control" name="scope">
                                                <option {{ $ticket->scope == 'شارژ' ? 'selected' : '' }} value="شارژ">
                                                    شارژ
                                                </option>
                                                <option {{ $ticket->scope == 'نظافت' ? 'selected' : '' }} value="نظافت">
                                                    نظافت
                                                </option>
                                                <option {{ $ticket->scope == 'نگهبانی' ? 'selected' : '' }} value="نگهبانی">
                                                    نگهبانی
                                                </option>
                                                <option {{ $ticket->scope == 'فضای سبز' ? 'selected' : '' }} value="فضای سبز">
                                                    فضای سبز
                                                </option>
                                                <option {{ $ticket->scope == 'امنیت و ایمنی' ? 'selected' : '' }} value="امنیت و ایمنی">
                                                    امنیت و ایمنی
                                                </option>
                                                <option {{ $ticket->scope == 'تاسیسات' ? 'selected' : '' }} value="تاسیسات">
                                                    تاسیسات
                                                </option>
                                                <option {{ $ticket->scope == 'آسانسور' ? 'selected' : '' }} value="آسانسور">
                                                    آسانسور
                                                </option>
                                                <option {{ $ticket->scope == 'پیمانکاران' ? 'selected' : '' }} value="پیمانکاران">
                                                    پیمانکاران
                                                </option>
                                                <option {{ $ticket->scope == 'سایر' ? 'selected' : '' }} value="سایر">
                                                    سایر
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">درخواست شده از:</label>
                                            <select class="form-control" name="requestedFrom">
                                                <option {{ $ticket->requestedFrom == 'مدیر اجرایی' ? 'selected' : '' }} value="مدیر اجرایی">
                                                    مدیر اجرایی
                                                </option>
                                                <option {{ $ticket->requestedFrom == 'هیات مدیره' ? 'selected' : '' }}  value="هیات مدیره">
                                                    هیات مدیره
                                                </option>
                                                <option {{ $ticket->requestedFrom == 'خزانه دار' ? 'selected' : '' }} value="خزانه دار">
                                                    خزانه دار
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="form-section"><i class="fa fa-paperclip"></i> شرح درخواست</h4>

                                <div class="form-group">
                                    <label for="description">توضیحات مربوط به درخواست:</label>
                                    <textarea style="font-size: 18px" id="description" rows="3" class="form-control" name="description">{{ $ticket->description }}</textarea>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="attachment">ویرایش فایل ضمیمه:</label>
                                        <div class="custom-file">
                                            <input type="file" name="attachment" {{ $ticket->attachment }} class="custom-file-input"
                                                   id="attachment">
                                            <label class="custom-file-label"  for="attachment">جهت ضمیمه فایل
                                                یا تصویر کلیک کنید</label>
                                        </div>

                                    </fieldset>
                                </div>



                                <div class="col-md-6">

                                    @if($ticket->attachment == "storage/Requisitions/Nothing")
                                        <td style="text-align:center;color: #808080; padding-top:20px"> مشاهده فایل ضمیمه فعلی:  <i
                                                    style="font-size: 20px" class="ft-file-text"></i></td>
                                    @else
                                        <td style="text-align:center;color: #3BAFDA;padding-top:20px">مشاهده فایل ضمیمه فعلی: <a target="_blank"
                                                                                                                                 href="/{{ $ticket->attachment }}"><i
                                                        style="font-size: 20px"
                                                        class="ft-file-text"></i></a></td>
                                    @endif
                                </div>




                                @canany(['admin', 'boardMember'])
                                    <br><h4 style="color: red" class="form-section"><i class="fa fa-file"></i> پاسخ متولی</h4>

                                    <div class="form-group">
                                        <label for="description">توضیحات متولی:</label>
                                        <textarea id="description" rows="3" class="form-control"
                                                  name="doerDescription">{{$ticket->doerDescription}}</textarea>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">وضعیت درخواست:</label>
                                                <select class="form-control" name="status">
                                                    <option {{ $ticket->status == 'بررسی نشده' ? 'selected' : '' }} value="بررسی نشده">
                                                        بررسی نشده
                                                    </option>
                                                    <option {{ $ticket->status == 'درحال پیگیری' ? 'selected' : '' }}  value="درحال پیگیری">درحال پیگیری</option>
                                                    <option {{ $ticket->status == 'درحال انجام' ? 'selected' : '' }} value="درحال انجام">درحال انجام</option>
                                                    <option {{ $ticket->status == 'پاسخ داده شده' ? 'selected' : '' }} value="پاسخ داده شده">پاسخ داده شده</option>
                                                    <option {{ $ticket->status == 'انجام شده' ? 'selected' : '' }} value="انجام شده">انجام شده</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                @endcanany


                                @if($ticket->addedById == \Auth::user()->id)
                                    <br><h4 style="color: red" class="form-section"><i class="fa fa-file"></i> پاسخ متولی</h4>
                                    <div class="form-group">
                                        <label for="description">توضیحات متولی:</label>
                                        <textarea disabled id="description" rows="3" class="form-control"
                                                  name="doerDescription"
                                        >{{$ticket->doerDescription}}</textarea>
                                    </div>
                                @endif


                            </div>

                            <div class="form-actions text-center">
                                <button style="font-size: 15px" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> بروزرسانی</button>
                            </div>

                        </form>

{{--                        @if($ticket->addedById === \Auth::user()->id)--}}
                        <div class="form-actions">
                            <a href="{{ route('ticket.approve', $ticket->id) }}"><button style="font-size: 15px" class="btn btn-primary"><i class="fa fa-check-square-o"></i> ثبت تاییدیه انجام درخواست</button></a>
                        </div>
                        {{--@endif--}}
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