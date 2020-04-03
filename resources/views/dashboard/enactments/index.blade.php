@extends('dashboard.layouts.master', ['title' => 'مصوبات'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />


    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="add">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modall">افزودن مصوبه</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('enactments.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>انتخاب صورتجلسه:</label>
                                <div class="kt-input-icon">

                                <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_1" name="proceeding_id">
                                  @foreach (enactments as enactmenting)
                                        <option value="{{ enactments->id }}">{{ ' شماره جلسه: ' .  $proceeding->number . ' | ' . ' تاریخ جلسه: ' . $proceeding->date }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="">اقدام کننده:</label>

                                <div class="kt-input-icon">
                                    <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_2" name="user_id">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->fullName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>شماره مصوبه:</label>
                                <div class="kt-input-icon">
                                    <input type="text" name="number" class="form-control" placeholder="مثال: ۱ ">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="">مهلت اقدام:</label>
                                <div class="kt-input-icon">
                                    <input class="form-control dp" >
                                    <input type="hidden" name="deadline" class="observer" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>شرح مصوبه:</label>
                                <div class="kt-input-icon">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن مصوبه</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                </form>
            </div>
        </div>
    </div>
    </div>


    <!--end::Modal-->

        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <div class="kt-pricing-1">
                    <div class="kt-pricing-1__items row">
                        <div class="kt-pricing-1__item col-lg-4 border-right-blue-grey border-right-lighten-5">
                            <div class="kt-pricing-1__visual">
                                <div class="kt-pricing-1__hexagon1"></div>
                                <div class="kt-pricing-1__hexagon2"></div>
                                <span class="kt-pricing-1__icon kt-font-brand"><i class="fa fa-clipboard-list
                              " style="font-size:3rem;"></i></span>
                            </div>

                            <h2 class="kt-pricing-1__subtitle mt-4">تعداد مصوبات درحال انجام</h2>

                            <div class="kt-pricing-1__btn">
                                <h1 class="text-primary borj-font">
                                    {{ $enactments->where('status', 'درحال انجام')->count() }} مصوبه
                                </h1>
                            </div>
                        </div>
                        <div class="kt-pricing-1__item col-lg-4 border-right-blue-grey border-right-lighten-5">
                            <div class="kt-pricing-1__visual">
                                <div class="kt-pricing-1__hexagon1"></div>
                                <div class="kt-pricing-1__hexagon2"></div>
                                <span class="kt-pricing-1__icon kt-font-success"><i class="fa fa-clipboard-check
                                " style="font-size:3rem;"></i></span>
                            </div>

                            <h2 class="kt-pricing-1__subtitle mt-4">تعداد مصوبات انجام شده</h2>

                            <div class="kt-pricing-1__btn">
                                <h1 class="text-success borj-font">
                                    {{ $enactments->where('status', 'انجام شده')->count() }} مصوبه
                                </h1>
                            </div>
                        </div>
                        <div class="kt-pricing-1__item col-lg-4 ">
                            <div class="kt-pricing-1__visual">
                                <div class="kt-pricing-1__hexagon1"></div>
                                <div class="kt-pricing-1__hexagon2"></div>
                                <span class="kt-pricing-1__icon kt-font-danger"><i class="fa fa-clipboard
                                  " style="font-size:3rem;"></i></span>
                            </div>

                            <h2 class="kt-pricing-1__subtitle mt-4">تعداد مصوبات بررسی نشده</h2>

                            <div class="kt-pricing-1__btn">
                                <h1 class="text-danger borj-font">
                                    {{ $enactments->where('status', 'بررسی نشده')->count() }} مصوبه
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                مصوبات هیات مدیره
                            </h3>
                            @if($proceedings->count() == 0)
                                <a href="{{ route('proceedings.index') }}"><p class="text-danger" style="margin: auto;margin-right: 10px;">جهت افزودن مصوبه، ابتدا صورتجلسه اضافه نمایید</p></a>
                            @else
                                <button data-toggle="modal" data-target=" #add" style="margin-right: 20px;font-size: 13px" type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن مصوبه</button>
                            @endif
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

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

                        @if(count($errors) > 0 )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <!--begin: Datatable -->
                        <table style="" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead>
                            <tr>
                                <th>شماره مصوبه</th>
                                <th style="min-width: 140px">تاریخ جلسه</th>
                                <th>شماره جلسه</th>
                                <th>نوع جلسه</th>
                                <th>شرح مصوبه</th>
                                <th>اقدام کننده</th>
                                <th style="min-width: 140px">مهلت اقدام</th>
                                <th>وضعیت</th>
                                <th>نتیجه</th>
                                <th>حذف | ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($enactments as $enactment)
                                <tr>
                                    <td>{{ $enactment->number }}</td>
                                    <td style="font-family: BYekan; direction: ltr; min-width: 140px">{{ jdate($enactment->proceeding->date) }}</td>
                                    <td>{{ $enactment->proceeding->number }}</td>
                                    <td>{{ $enactment->proceeding->type }}</td>
                                    <td>{{ $enactment->description }}</td>
                                    <td>{{ $enactment->user->fullName }}</td>
                                    <td style="font-family: BYekan; direction: ltr;min-width: 140px">{{ jdate($enactment->deadline) }}</td>
                                    <td class="{{ $enactment->status == "معلق" ? "badge badge-warning" : '' }} {{ $enactment->status == "درحال انجام" ? "badge badge-primary" : '' }} {{ $enactment->status == "انجام شده" ? "badge badge-success" : '' }}    {{ $enactment->status == "بررسی نشده" ? "badge badge-danger" : '' }} {{ $enactment->status == "لغو شده" ? "badge badge-danger" : '' }} ">{{ $enactment->status }}</td>
                                    <td>{{ $enactment->resualt }}</td>
                                    <td>
                                        @can('admin')
                                            <a href="{{ route('enactments.delete', ['id' => $enactment->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف مشتری "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                        @endcan
                                            <a href="{{ route('enactments.edit', $enactment->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="ویرایش"> <i style="color: green" class="la la-edit"></i> </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-lg-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                پراکندگی مصوبات بین اعضا (اسامی)
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div style="min-width: auto!important; max-width: 100%!important; height: 400px!important; margin: 0 auto!important;" id="members"></div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                پراکندگی وضعیت مصوبات (انجام شده، درحال انجام، معلق)
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                            <div style="min-width: auto!important; max-width: 100%!important; height: 400px!important; margin: 0 auto!important;" id="status"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection


@section('footerScripts')
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>



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

    <script>
        // Create the chart
        Highcharts.chart('members', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "names",
                    colorByPoint: true,
                    data: [
                            @foreach($members as $member)
                        {
                            name: "{{ $users->where('id', $member->user_id)->pluck('fullName')->first() }}", y: {{$member->count}}
                        },
                        @endforeach
                    ]
                }
            ],
        });
    </script>
    <script>
        // Create the chart
        Highcharts.chart('status', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "status",
                    colorByPoint: true,
                    data: [
                            @foreach($status as $sta)
                        {
                            name: "{{ $sta->status }}", y: {{ $sta->count }}
                        },
                        @endforeach
                    ]

                }
            ],

        });
    </script>
    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>



@stop
