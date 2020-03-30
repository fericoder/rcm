@extends('dashboard.layouts.master', ['title' => 'اطلاعات کلی'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <div class="modal fade text-left" id="AddMonitoringReport" tabindex="-1" role="dialog" aria-labelledby="AddMonitoringReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن گزارش اطلاعات کلی</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{route('notifications.store')}}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">تاریخ</label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control date" style="" placeholder="کلیک کنید" name="date" type="text" />
                                </div>
                            </div>



                              <div class="form-group row">
                                  <label class="col-md-3 label-control" for="content">نوع</label>
                                  <div class="col-md-9">
                                    <select class="form-control" name="type">
                                        <option value="private">خصوصی</option>
                                        <option value="public">عمومی</option>
                                      </select>
                                  </div>
                              </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="content">متن اعلان</label>
                                <div class="col-md-9">
                                    <input type="text" id="content" class="form-control" name="content">
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









    <div class="modal fade text-left" id="AddAsasnameReport" tabindex="-1" role="dialog" aria-labelledby="AddAsasnameReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن گزارش عدم رعایت اساسنامه</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="penalty/store" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">تاریخ</label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control date" style="" placeholder="کلیک کنید" name="date" type="text" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">ساعت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_from" class="form-control" name="time">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نوع</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="type">
                                        <option value="راندن دوچرخه و...">راندن دوچرخه و...</option>
                                        <option value="رها سازی چرخ فروشگاهی داخل آسانسور">رها سازی چرخ فروشگاهی داخل آسانسور </option>
                                        <option value="رها سازی چرخ فروشگاهی در فضای مشاعات(غیر از مکان مشخص شده)">رها سازی چرخ فروشگاهی در فضای مشاعات(غیر از مکان مشخص شده)</option>
                                        <option value="قراردادن کفش جلوی درب واحد ها">قراردادن کفش جلوی درب واحد ها</option>
                                        <option value="آویزان کردن فرش و پتو و ... از تراس واحد ها">آویزان کردن فرش و پتو و ... از تراس واحد ها</option>
                                        <option value="انداختن فیلتر سیگار و زباله و ... از پنجره و تراس واحد ها">انداختن فیلتر سیگار و زباله و ... از پنجره و تراس واحد ها</option>
                                        <option value="تغییر در نمای واحد ها">تغییر در نمای واحد ها</option>
                                        <option value="گذاشتن اشیا در مشاعات">گذاشتن اشیا در مشاعات</option>
                                        <option value="روغن ریزی خودرو ها در پارکینگ">روغن ریزی خودرو ها در پارکینگ</option>
                                        <option value="پارک نمودن خودرو در پارکینگ سایرین و در مشاعات و محل های پارک ممنوع">پارک نمودن خودرو در پارکینگ سایرین و در مشاعات و محل های پارک ممنوع</option>
                                        <option value="شارژ موتور برقی با برق مشاعات">شارژ موتور برقی با برق مشاعات ￼</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">توضیحات</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_from" class="form-control" name="description">
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

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        تابلو اعلانات و اخبار
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddMonitoringReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن اعلان  </span></button>
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست اعلانات و اخبار ثبت شده را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>متن</th>
                        <th>توسط</th>
                        <th>تاریخ ثبت </th>
                        <th>ویرایش </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($notifications as $notification)
                        <tr>
                            <td>{{ $notification->id }}</td>
                            <td>{{ $notification->content }}</td>
                            <td>{{ $notification->user->fullName }}</td>
                            <td style="direction: ltr; font-family: BYekan">{{ jdate($notification->created_at) }}</td>
                            <td>ویرایش</td>
                        </tr>
                    @endforeach


                    </tbody>

                </table>

            </div>
        </div>






        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        اساسنامه، آیین نامه و سایر فایل های کاربردی
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddAsasnameReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن اساسنامه، آیین نامه  </span></button>

                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست اساسنامه، آیین نامه و سایر فایل های کاربردی ثبت شده را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal" id="m_table_3">
                    <thead>
                    <tr style="text-align:center" >
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th> توسط</th>
                        <th>لینک دریافت</th>
                        <th>زمان ثبت</th>
                        <th>ویرایش</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($informations->where('type', 'file') as $information)
                        <tr>
                            <td>{{ $information->id }}</td>
                            <td>{{ $information->title }}</td>
                            <td>{{ $information->user->fullName }}</td>
                            <td>{{ $information->type }}</td>
                            <td style="direction: ltr;">{{ jdate($information->created_at) }}</td>
                            <td>ویرایش</td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>

            </div>
        </div>





            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            اطلاعات تماس کاربردی
                        </h3>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddAsasnameReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  اطلاعات تماس  </span></button>

                    </div>
                </div>

                <div class="kt-portlet__body">
                    <p class="card-text">در این قسمت اطلاعات تماس کاربردی ثبت شده را مشاهده میکنید.</p>

                    <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal" id="m_table_4">
                        <thead>
                        <tr style="text-align:center" >
                            <th>ردیف</th>
                            <th>عنوان</th>
                            <th>شماره تماس</th>
                            <th>زمان ثبت</th>
                            <th>ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($informations->where('type', 'contact') as $information)
                            <tr>
                                <td>{{ $information->id }}</td>
                                <td>{{ $information->title }}</td>
                                <td>{{ $information->content }}</td>
                                <td style="direction: ltr;">{{ jdate($information->created_at) }}</td>
                                <td>ویرایش</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>






    </div>


@endsection


@section('footerScripts')
    <script src="/dashboard/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

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







                // start data table m_table_3
                var g;
                g = $("#m_table_3").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), g.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), g.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), g.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), g.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), g.button(4).trigger()
                        }
                    )
// end data table m_table_3



                // start data table m_table_4
                var f;
                f = $("#m_table_4").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

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
// end data table m_table_4




            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );




    </script>
@stop
