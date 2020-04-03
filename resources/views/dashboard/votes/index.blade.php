@extends('dashboard.layouts.master', ['title' => 'نظرسنجی ها'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    


    <div class="modal fade text-left" id="AddVote" tabindex="-1" role="dialog" aria-labelledby="AddVote" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">۸
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddVoteReport">افزودن نظرسنجی</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('votes.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">عنوان نظرسنجی: </label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control" placeholder="مثال: رنگ درب آسانسور" name="title" type="text" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">سوال نظرسنجی: </label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control" style="" placeholder="مثال: بنظرشما رنگ درب آسانسور چه رنگی شود؟" name="question" type="text" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">تاریخ انقضا نظرسنجی: </label>
                                <div class="col-lg-9">
                                    <input class="form-control dp" value="" >
                                    <input type="hidden" name="expired_at" class="observer" >
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

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">کل نظرسنجی ها:</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">{{ $votes->count()  }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">نظرسنجی های فعال:</h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-warning">{{ $votes->count()  }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">نظرسنجی های غیرفعال:</h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-danger">{{ $votes->count() }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
                    </div>


                </div>
            </div>
        </div>




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        لیست نظرسنجی ها
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddVote" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن نظرسنجی جدید  </span></button>
                </div>
            </div>

            <div class="kt-portlet__body">
                <p class="card-text">در این قسمت لیست نظرسنجی ها را مشاهده میکنید.</p>

                <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                    <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>تاریخ ایجاد</th>
                        <th>تاریخ انقضا</th>
                        <th>شرکت در نظرسنجی</th>
                        <th>گزارش</th>
                        @canany(['boardMember', 'admin'])
                            <th>گزینه ها</th>
                        @endcan

                        @can('admin')
                            <th>حذف</th>
                        @endcan


                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($votes as $vote)
                        <tr>
                            <td>{{ $vote->title }}</td>
                            <td style="direction: ltr">{{ jdate($vote->created_at) }}</td>
                            <td style="direction: ltr">{{ jdate($vote->expired_at) }}</td>
                            <td><a href="{{ route('votes.show', $vote->id) }}"><i class="fa fa-check"></i></a></td>
                            <td><a href="{{ route('votes.report', $vote->id) }}"><i class="flaticon2-line-chart"></i></a></td>

                            @canany(['boardMember', 'admin'])
                                <td><a href="{{ route('options.index', $vote->id) }}"><i class="flaticon-list-2"></i></a></td>
                            @endcan

                            @can('admin')
                                <td><a href="{{ route('vote.delete', $vote->id) }}"><i class="flaticon-delete"></i></a></td>
                            @endcan


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






            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );



        $(document).ready(function() {
            $(".dp").attr("value", "{{ Carbon\Carbon::now()->add(1,'month')->format('Y-m-d') }}");

            $(".dp").pDatepicker({
                altField: '.observer',
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }

            });

        });


    </script>
@stop