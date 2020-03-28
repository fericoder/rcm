@extends('dashboard.layouts.master', ['title' => 'نگهداری تاسیسات'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <div class="modal fade text-left" id="AddFacilityReport" tabindex="-1" role="dialog" aria-labelledby="AddFacilityReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddFacilityReport">افزودن گزارش نگهداری تاسیسات</h4>
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



                            @foreach ($equipments as $equipment)
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="{{ $equipment->name }}">{{ $equipment->name }}:</label>
                                    <div class="col-md-9">
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <div class="input-group-append"><span class="input-group-text">دما:</span></div>
                                                <input type="text" class="form-control" name="{{ $equipment->id }}" >
                                            </div>
                                        </div>

                                    </div>
                                </div>




                            @endforeach







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









    <div class="modal fade text-left" id="AddEquipmentReport" tabindex="-1" role="dialog" aria-labelledby="AddEquipmentReport" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddFacilityReport">افزودن تجهیز</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center"
                          method="post" action="{{ route('maintenance.facility.store') }}"
                          class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نام تجهیز:</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" class="form-control" name="name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">لوکیشن تجهیز:</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" class="form-control" name="location">
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

                                <span class="kt-widget24__stats kt-font-brand">{{ $maintnances->count()  }}</span>
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
                        لیست گزارشات نگهداری تاسیسات ثبت شده
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddFacilityReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن گزارش نگهداری تاسیسات  </span></button>
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست گزارشات نگهداری تاسیسات ثبت شده برج را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>تاریخ</th>
                        <th>تاریخ</th>
                        <th>تاریخ</th>
                        <th>تاریخ و زمان ثبت </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($maintnances as $maintnance)
                        <tr>
                            <td>{{ $maintnance->id }}</td>
                            <td>{{ $maintnance->date }}</td>
                            <td>{{ $maintnance->user->fullName }}</td>
                            <td>{{ $maintnance->hour_from }}</td>
                            <td>{{ jdate($maintnance->created_at) }}</td>
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
                        لیست تجهیزات ثبت شده
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddEquipmentReport" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن تجهیز  </span></button>

                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست تجهیزات ثبت شده برج را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal" id="m_table_3">
                    <thead>
                    <tr style="text-align:center" >
                        <th style="width: 50px!important;">نام</th>
                        <th style="width: 50px!important;">لوکیشن</th>
                        <th style="width: 50px!important;">زمان ثبت</th>
                        <th style="width: 50px!important;">تغییرات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($equipments as $equipment)
                        <tr>
                            <td style="width: 50px!important;">{{ $equipment->name }}</td>
                            <td style="width: 50px!important;">{{ $equipment->location }}</td>
                            <td style="direction: ltr;width: 50px!important;">{{ jdate($equipment->created_at) }}</td>
                            <td style="width: 50px!important;"></td>
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