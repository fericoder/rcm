@extends('dashboard.layouts.master', ['title' => 'اطلاعات کلی'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <div class="modal fade text-left" id="AddMonitoringReport" tabindex="-1" role="dialog" aria-labelledby="AddMonitoringReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن اطلاعات کلی</h4>
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

<<<<<<< Updated upstream
                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{route('notifications.store')}}" class="form form-horizontal form-bordered striped-rows">
=======
                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center"  method="post" action="{{ route('dashboard.notificationStore') }}" class="form form-horizontal form-bordered striped-rows">
>>>>>>> Stashed changes
                        @csrf
                        <div class="form-body">




                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">متن</label>
                                <div class="col-md-9">
                                    <textarea name="content" class="form-control" rows="5"></textarea>
                                </div>
                            </div>


<<<<<<< Updated upstream

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
=======
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
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن اساسنامه و سایر فایل های کاربردی</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('dashboard.fileStore') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">عنوان</label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control" style="" placeholder="عنوان فایل را وارد نمایید" name="title" type="text" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">فایل</label>
                                <div class="col-md-9">
                                    <div class="kt-input-icon">
                                        <input type="file" name="file" class="form-control" >
                                    </div>
>>>>>>> Stashed changes
                                </div>
                            </div>



<<<<<<< Updated upstream
=======


>>>>>>> Stashed changes
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

    <div class="modal fade text-left" id="AddEttelaateTamas" tabindex="-1" role="dialog" aria-labelledby="AddEttelaateTamas" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن اطلاعات تماس کاربردی</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('dashboard.contactStore') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">عنوان</label>
                                <div class="col-md-9">
                                    <input class="form-control" style="" placeholder="مثال: مدیر اجرایی" name="title" type="text" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">شماره تماس</label>
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
                    @can('admin', 'boardMember')
                        <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddMonitoringReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن اعلان  </span></button>
                    @endcan
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست اعلانات و اخبار ثبت شده را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                    <thead>
                    <tr>
                        <th>متن</th>
                        <th>توسط</th>
                        <th>تاریخ ثبت </th>
                        @can('admin')
                            <th>حذف </th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($notifications as $notification)
                        <tr>
                            <td>{{ $notification->content }}</td>
                            <td>{{ $notification->user->fullName }}</td>
                            <td style="direction: ltr; font-family: BYekan">{{ jdate($notification->created_at) }}</td>
<<<<<<< Updated upstream
                            <td>ویرایش</td>
=======
                            <td>
                                @can('admin')
                                    <a href="{{ route('dashboard.NotificationDestroy', ['id' => $notification->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف مشتری "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                @endcan

                            </td>
>>>>>>> Stashed changes
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
                    @can('admin', 'boardMember')
                        <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddAsasnameReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن اساسنامه، آیین نامه  </span></button>
                    @endcan
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست اساسنامه، آیین نامه و سایر فایل های کاربردی ثبت شده را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal" id="m_table_3">
                    <thead>
                    <tr style="text-align:center" >
                        <th>عنوان</th>
                        <th> توسط</th>
                        <th>لینک دریافت</th>
                        <th>زمان ثبت</th>
                        @can('admin')
                            <th>حذف </th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($informations->where('type', 'file') as $information)
                        <tr>
                            <td>{{ $information->title }}</td>
                            <td>{{ $information->user->fullName }}</td>
                            <td><a target="_blank" href="{{ url($information->content) }}"><i class="fa fa-file"></i></a></td>
                            <td style="direction: ltr;">{{ jdate($information->created_at) }}</td>
                            <td>
                                @can('admin')
                                    <a href="{{ route('dashboard.fileDestroy', ['id' => $information->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف مشتری "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                @endcan

                            </td>
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
                        @can('admin', 'boardMember')
                            <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddEttelaateTamas" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  اطلاعات تماس  </span></button>
                        @endcan


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
                            @can('admin')
                                <th>حذف </th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($informations->where('type', 'contact') as $information)
                            <tr>
                                <td>{{ $information->id }}</td>
                                <td>{{ $information->title }}</td>
                                <td>{{ $information->content }}</td>
                                <td style="direction: ltr;">{{ jdate($information->created_at) }}</td>
                                <td>
                                    @can('admin')
                                        <a href="{{ route('dashboard.contactDestroy', ['id' => $information->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف مشتری "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                    @endcan

                                </td>
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
