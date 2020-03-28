@extends('dashboard.layouts.master', ['title' => 'مانیتورینگ'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <div class="modal fade text-left" id="AddMonitoringReport" tabindex="-1" role="dialog" aria-labelledby="AddMonitoringReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن گزارش مانیتورینگ</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="monitoring/store" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">تاریخ</label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control date" style="" placeholder="کلیک کنید" name="date" type="text" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">ساعت شروع شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_from" class="form-control" name="hour_from">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">ساعت پایان شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="hour_to">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد دوربین های فعال در شروع شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_active_before">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد دوربین های غیرفعال شروع شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_deactive_before">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد دوربین های فعال در پایان شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_active_after">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد دوربین های غیرفعال پایان شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_deactive_after">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">زمان و دلیل ازکارافتادگی دوربین ها</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_fault">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">اقدامات انجام شده جهت رفع خرابی</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="camera_actions">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">وضعیت پلاک خوان شروع شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="pelak_before">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">وضعیت پلاک خوان پایان شیفت</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="pelak_after">
                                </div>
                            </div>

                            <div class="form-group row last">
                                <label class="col-md-3 label-control" for="description">اقدامات پلاک خوان</label>
                                <div class="col-md-9">
                                    <input type="text" id="description" class="form-control" placeholder=" " name="pelak_actions">
                                </div>
                            </div>





                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد داکتور فعال</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="detectors_enable">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد داکتور غیر فعال</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="detectors_disable">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد دفعات آژیر</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="sound_count">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">علل</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="detector_cause">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">محل وقوع</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="detector_location">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">اقدامات انجام شده</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="detector_actions">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تعداد جرایم ثبت شده</label>
                                <div class="col-md-9">
                                    <input type="text" id="hour_to" class="form-control" name="penalty_count">
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
                                <label class="col-md-3 label-control" for="name">واحد</label>
                                <div class="col-md-9">

                                    <select style="width: 300px!important;" class="form-control kt-select2" id="kt_select2_1" name="user_id">
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->fullName . ' - ' .  str_replace('/', '', $unit->code )}}</option>
                                        @endforeach
                                    </select>

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

        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">گزارشات ثبت شده:</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">{{ $monitorings->count()  }}</span>
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
                                    <h4 class="kt-widget24__title">دوربین های خراب:</h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-warning">{{ isset($last->camera_deactive_after) ? $last->camera_deactive_after : ''  }}</span>
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
                                    <h4 class="kt-widget24__title">وضعیت پلاک خوان:</h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-danger">{{ isset($last->pelak_after) ? $last->pelak_after : '' }}</span>
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
                                    <h4 class="kt-widget24__title">گزارش توسط:</h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-success">{{ isset($last->user->fullName) ? $last->user->fullName : '' }}</span>
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




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        لیست گزارشات مانیتورینگ ثبت شده
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddMonitoringReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن گزارش مانیتورینگ  </span></button>
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست گزارشات مانیتورینگ ثبت شده برج را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>تاریخ</th>
                        <th>نام و نام خانوادگی</th>
                        <th>آغاز شیفت</th>
                        <th>پایان شیفت</th>
                        <th>دوربین های فعال شروع شیفت</th>
                        <th>دوربین های غیرفعال شروع شیفت</th>
                        <th>دوربین های فعال پایان شیفت</th>
                        <th>دوربین های غیرفعال پایان شیفت</th>
                        <th>زمان و دلیل ازکارافتادگی دوربین ها</th>
                        <th>اقدامات</th>
                        <th>وضعیت پلاک خوان شروع شیفت</th>
                        <th>وضعیت پلاک خوان پایان شیفت</th>
                        <th>اقدامات</th>
                        <th> دتکتور های فعال</th>
                        <th> دتکتور های غیرفعال</th>
                        <th> دفعات آژیر</th>
                        <th>علت</th>
                        <th>محل</th>
                        <th>اقدامات</th>
                        <th>تعداد جرایم </th>
                        <th>تاریخ و زمان ثبت </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($monitorings as $monitoring)
                        <tr>
                            <td>{{ $monitoring->id }}</td>
                            <td>{{ $monitoring->date }}</td>
                            <td>{{ $monitoring->user->fullName }}</td>
                            <td>{{ $monitoring->hour_from }}</td>
                            <td>{{ $monitoring->hour_to }}</td>
                            <td>{{ $monitoring->camera_active_before }}</td>
                            <td>{{ $monitoring->camera_deactive_before }}</td>
                            <td>{{ $monitoring->camera_active_after }}</td>
                            <td>{{ $monitoring->camera_deactive_after }}</td>
                            <td>{{ $monitoring->camera_fault }}</td>
                            <td>{{ $monitoring->camera_actions }}</td>
                            <td>{{ $monitoring->pelak_before }}</td>
                            <td>{{ $monitoring->pelak_after }}</td>
                            <td>{{ $monitoring->pelak_actions }}</td>
                            <td>{{ $monitoring->detectors_enable }}</td>
                            <td>{{ $monitoring->detectors_disable }}</td>
                            <td>{{ $monitoring->sound_count }}</td>
                            <td>{{ $monitoring->detector_cause }}</td>
                            <td>{{ $monitoring->detector_location }}</td>
                            <td>{{ $monitoring->detector_actions }}</td>
                            <td>{{ $monitoring->penalty_count }}</td>
                            <td>{{ jdate($monitoring->created_at) }}</td>
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
                        لیست جرایم عدم رعایت اساسنامه
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddAsasnameReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن گزارش عدم رعایت اساسنامه  </span></button>

                </div>
            </div>

            <div class="kt-portlet__body">
               <p class="card-text">در این قسمت لیست گزارشات عدم رعایت اساسنامه ثبت شده برج را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal" id="m_table_3">
                    <thead>
                    <tr style="text-align:center" >
                        <th style="width: 50px!important;">ردیف</th>
                        <th style="width: 50px!important;">تاریخ</th>
                        <th style="width: 50px!important;">ساعت</th>
                        <th style="width: 50px!important;">واحد</th>
                        <th style="width: 50px!important;">نوع</th>
                        <th style="width: 50px!important;">شرح</th>
                        <th style="width: 50px!important;">زمان ثبت</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($penalties as $penalty)
                        <tr>
                            <td style="width: 50px!important;">{{ $penalty->id }}</td>
                            <td style="width: 50px!important;">{{ $penalty->date }}</td>
                            <td style="width: 50px!important;">{{ $penalty->time }}</td>
                            <td style="width: 50px!important;">{{ $penalty->user->fullName . " | " . $penalty->user->email }}</td>
                            <td style="width: 50px!important;">{{ $penalty->type }}</td>
                            <td style="width: 50px!important;">{{ $penalty->description }}</td>
                            <td style="direction: ltr;width: 50px!important;">{{ jdate($penalty->created_at) }}</td>
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
            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );




    </script>
@stop