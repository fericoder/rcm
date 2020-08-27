@extends('dashboard.layouts.master', ['title' => 'تنظیمات وبسایت'])


@section('content')


    <div class="modal fade text-left" id="AddPersonnel" tabindex="-1" role="dialog" aria-labelledby="AddPersonnel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن پرسنل</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('personnel.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">





                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نام و نام خانوادگی</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" placeholder="مثال: رضا رضایی" class="form-control" name="fullName">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">سمت</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" placeholder="مثال: مدیر اجرایی" class="form-control" name="position">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">ترتیب (عدد)</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" placeholder="مثال: 1" class="form-control" name="order">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تصویر</label>
                                <div class="col-md-9">
                                    <input type="file"  class="form-control" name="picture">
                                </div>
                            </div>



                        </div>

                        <div class="form-actions">
                            <center>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check-square-o"></i> ثبت
                                </button>

                                <button type="button" data-dismiss="modal" class="btn btn-warning mr-1"><i class="ft-x"></i> لغو
                                </button>
                            </center>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-danger"></i></div>
            <div class="alert-text">
                جهت استفاده از وبسایت مجتمع مسکونی خود، ثبت اطلاعات الزامی میباشد.
            </div>
    </div>




    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    اطلاعات وبسایت
                </h3>
            </div>
            <div style="" class="kt-portlet__head-toolbar">
                <a target="_blank" href=""><button style="float: left;" class="btn btn-sm btn-info mr-1  ladda-button" ><span class="ladda-label">  <i class="fa fa-search"></i>  مشاهده وبسایت   </span></button></a>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{ route('configuration.WebsiteFormstore', \Auth::user()->complex->id) }}" method="post" class="kt-form kt-form--fit kt-form--label-right">
            @csrf
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




                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">نام مجتمع:</label>
                    <div class="col-lg-3">
                        <input type="text" disabled class="form-control" value="{{ $complex->name }}">
                        <span class="form-text text-muted">جهت تغییر با پشتیبانی تماس بگیرید</span>
                    </div>
                    <label class="col-lg-2 col-form-label">شعار</label>
                    <div class="col-lg-3">
                        <input type="text" name="slogan" class="form-control" value="{{ $website->slogan }}" placeholder="مثال: آرامش در {{ $complex->name }}">
                        <span class="form-text text-muted">شعار مجتمع خودرا وارد نمایید.</span>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <label class="col-lg-2 col-form-label">توضیحات:</label>
                    <div class="col-lg-8">
                        <div class="kt-input-icon">
                            <textarea class="form-control" name="description" cols="30" rows="5">{{$website->description}}</textarea>
                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-file"></i></span></span>
                        </div>
                        <span class="form-text text-muted">توضیحات مجتمع را وارد نمایید، بین ۳۰ تا ۱۰۰ کلمه</span>
                    </div>

                </div>


                    <div class="form-group row mt-5">

                        <label class="col-lg-2 col-form-label">امکانات :</label>
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <div class="col-9">
                                    <div class="kt-checkbox-inline">
                                        <label class="kt-checkbox"><input {{ $website->hypermarket == 'on' ? 'checked' : '' }} name="hypermarket" type="checkbox"> هایپرمارکت<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->cinema == 'on' ? 'checked' : '' }} name="cinema" type="checkbox"> سینما<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->salonbadansazi == 'on' ? 'checked' : '' }} name="salonbadansazi" type="checkbox"> سالن بدنسازی<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->mahdekoodak == 'on' ? 'checked' : '' }} name="mahdekoodak" type="checkbox"> مهدکودک<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->barghezterari == 'on' ? 'checked' : '' }} name="barghezterari" type="checkbox"> برق اضطراری<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->coffeshop == 'on' ? 'checked' : '' }} name="coffeshop" type="checkbox"> کافی شاپ<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->labi == 'on' ? 'checked' : '' }} name="labi" type="checkbox"> لابی مجلل<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->arayeshgahzanane == 'on' ? 'checked' : '' }} name="arayeshgahzanane" type="checkbox"> آرایشگاه زنانه<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->arayeshgahmardane == 'on' ? 'checked' : '' }} name="arayeshgahmardane" type="checkbox"> آرایشگاه مردانه<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->masaj == 'on' ? 'checked' : '' }} name="masaj" type="checkbox"> اتاق ماساژ<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->pent == 'on' ? 'checked' : '' }} name="pent" type="checkbox"> پنت هاوس<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->salontadris == 'on' ? 'checked' : '' }} name="salontadris" type="checkbox"> سالن تدریس خصوصی<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->charge == 'on' ? 'checked' : '' }} name="charge" type="checkbox"> پرداخت شارژ از طریق موبایل<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->amfi == 'on' ? 'checked' : '' }} name="amfi" type="checkbox"> سالن آمفی تئاتر<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->ketabkhune == 'on' ? 'checked' : '' }} name="ketabkhune" type="checkbox"> کتابخانه عمومی<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->asansor == 'on' ? 'checked' : '' }} name="asansor" type="checkbox"> آسانسور باربری<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->bms == 'on' ? 'checked' : '' }} name="bms" type="checkbox"> سیستم BMS<span></span></label>
                                        <label class="kt-checkbox"><input {{ $website->harigh == 'on' ? 'checked' : '' }} name="harigh" type="checkbox"> سیستم اعلام و اطفا حریق<span></span></label>

                                    </div>
                                    <span class="form-text text-muted">امکانات مجتمع مسکونی خودرا علامت بزنید.</span>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions center">
                    <div class="row">
                            <button style="font-size: 13px" type="submit" class="btn btn-success">بروزرسانی اطلاعات پایه وبسایت</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>





        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست نفرات تیم اجرایی
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <button  style="float: right;"   class="btn btn-sm btn-success mr-1  ladda-button"  data-target="#AddPersonnel" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن   </span></button>

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
                                <th>نام و نام خانوادگی</th>
                                <th>سمت</th>
                                <th>تصویر</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($personnels as $personnel)
                                    <tr>
                                        <td>{{ $personnel->fullName }}</td>
                                        <td>{{ $personnel->position }}</td>
                                        <td><a target="_blank" href="{{ $personnel->picture }}"><i class="fa fa-image"></i></a></td>
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