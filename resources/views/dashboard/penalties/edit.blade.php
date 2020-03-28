@extends('dashboard.layouts.master', ['title' => 'ویرایش جریمه'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                ویرایش جریمه
                            </h3>
                            <span class="badge badge-success ml-3">نوع :‌{{ $penalty->type }}</span>
                            <span class="badge badge-danger ml-3">نام مالک :‌{{ $penalty->user->fullName }}</span>
                            <span class="badge badge-primary ml-3">واحد :‌{{ $penalty->user->code }}</span>
                            <span class="badge badge-warning ml-3">تاریخ ثبت در سامانه :‌{{ $penalty->created_at }}</span>

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


                        <form action="{{ route('penalty.update', $penalty->id) }}" method="post" class="form-body">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>نوع:</label>
                                        <select class="form-control" name="type">
                                            <option {{ $penalty->type == 'راندن دوچرخه و...' ? 'selected' : '' }} class="form-control" value="راندن دوچرخه و...">راندن دوچرخه و...</option>
                                            <option {{ $penalty->type == 'رها سازی چرخ فروشگاهی داخل آسانسور' ? 'selected' : '' }} class="form-control" value="رها سازی چرخ فروشگاهی داخل آسانسور">رها سازی چرخ فروشگاهی داخل آسانسور </option>
                                            <option {{ $penalty->type == 'رها سازی چرخ فروشگاهی در فضای مشاعات(غیر از مکان مشخص شده)' ? 'selected' : '' }} class="form-control" value="رها سازی چرخ فروشگاهی در فضای مشاعات(غیر از مکان مشخص شده)">رها سازی چرخ فروشگاهی در فضای مشاعات(غیر از مکان مشخص شده)</option>
                                            <option {{ $penalty->type == 'قراردادن کفش جلوی درب واحد ها' ? 'selected' : '' }} class="form-control" value="قراردادن کفش جلوی درب واحد ها">قراردادن کفش جلوی درب واحد ها</option>
                                            <option {{ $penalty->type == 'آویزان کردن فرش و پتو و ... از تراس واحد ها' ? 'selected' : '' }} class="form-control" value="آویزان کردن فرش و پتو و ... از تراس واحد ها">آویزان کردن فرش و پتو و ... از تراس واحد ها</option>
                                            <option {{ $penalty->type == 'انداختن فیلتر سیگار و زباله و ... از پنجره و تراس واحد ها' ? 'selected' : '' }} class="form-control" value="انداختن فیلتر سیگار و زباله و ... از پنجره و تراس واحد ها">انداختن فیلتر سیگار و زباله و ... از پنجره و تراس واحد ها</option>
                                            <option {{ $penalty->type == 'تغییر در نمای واحد ها' ? 'selected' : '' }} class="form-control" value="تغییر در نمای واحد ها">تغییر در نمای واحد ها</option>
                                            <option {{ $penalty->type == 'گذاشتن اشیا در مشاعات' ? 'selected' : '' }} class="form-control" value="گذاشتن اشیا در مشاعات">گذاشتن اشیا در مشاعات</option>
                                            <option {{ $penalty->type == 'روغن ریزی خودرو ها در پارکینگ' ? 'selected' : '' }} class="form-control" value="روغن ریزی خودرو ها در پارکینگ">روغن ریزی خودرو ها در پارکینگ</option>
                                            <option {{ $penalty->type == 'پارک نمودن خودرو در پارکینگ سایرین و در مشاعات و محل های پارک ممنوع' ? 'selected' : '' }} class="form-control" value="پارک نمودن خودرو در پارکینگ سایرین و در مشاعات و محل های پارک ممنوع">پارک نمودن خودرو در پارکینگ سایرین و در مشاعات و محل های پارک ممنوع</option>
                                            <option {{ $penalty->type == 'شارژ موتور برقی با برق مشاعات' ? 'selected' : '' }} class="form-control" value="شارژ موتور برقی با برق مشاعات">شارژ موتور برقی با برق مشاعات ￼</option>
                                        </select>
                                </div>

                                <div class="col-lg-6">
                                    <label>تاریخ:</label>
                                    <input type="text" name="date" class="form-control" value="{{ $penalty->date }}">
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>ساعت</label>
                                    <input type="text" name="time" class="form-control" value="{{ $penalty->time }}">
                                </div>

                                <div class="col-lg-6">
                                    <label class="">تاریخ ثبت در سامانه:</label>
                                    <input disabled type="text" name="created_at" class="form-control" value="{{ $penalty->created_at }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>توضیحات</label>
                                    <input type="text" name="description" class="form-control" value="{{ $penalty->description }}">
                                </div>

                                <div class="col-lg-6">
                                    <label class="">فایل تصویر:</label>
                                </div>
                            </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ثبت تغییرات</button>
                            <a href="{{ route('units.show', $penalty->user_id) }}"><button type="button" class="btn btn-warning">انصراف و بازگشت به صفحه واحد</button></a>
                        </div>


                        </form>

                        @can('admin')
                            <p>حذف جریمه:
                                <br>
                                درصورت کلیک برروی دکمه حذف، جریمه از سیستم حذف خواهد شد و راه برگردادن وجود ندارد. بدیعیست درصورت نیاز به حذف میبایست صورحساب آنرا نیز حذف نمایید.
                            </p>
                                <a href="{{ route('penalty.delete', $penalty->id) }}"><button type="button" class="btn btn-danger">حذف </button></a>
                        @endcan

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