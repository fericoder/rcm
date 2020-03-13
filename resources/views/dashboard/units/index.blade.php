@extends('dashboard.layouts.master', ['title' => 'مدیریت مالکین و ساکنین'])


@section('content')
    <style>
        th,td{
            width: 100px!important;
        }
    </style>


        <div class="alert alert-light alert-elevate" role="alert">
            <div class="alert-icon"><i class="flaticon-warning kt-font-danger"></i></div>
            <div class="alert-text">
                <a href="{{ route('units.create') }}"> در این ماژول میتوانید واحد های متجمع خود را مدیریت نمایید. جهت افزودن واحد اینجا کلیک نمایید.</a>
            </div>
        </div>


    <div class="kt-portlet">

        <div class="kt-portlet__body">
            <div class="kt-pricing-1">
                <div class="kt-pricing-1__items row">
                    <div class="kt-pricing-1__item col-lg-3 border-right-blue-grey border-right-lighten-5">
                        <div class="kt-pricing-1__visual">
                            <div class="kt-pricing-1__hexagon1"></div>
                            <div class="kt-pricing-1__hexagon2"></div>
                            <span class="kt-pricing-1__icon kt-font-brand"><i class="la la-building"></i></span>
                        </div>

                        <h2 class="kt-pricing-1__subtitle mt-4">تعداد کل واحدها</h2>

                        <div class="kt-pricing-1__btn">
                            <h1 class="text-primary borj-font">
                                {{ $units->count() }}
                            </h1>
                        </div>
                    </div>
                    <div class="kt-pricing-1__item col-lg-3 border-right-blue-grey border-right-lighten-5">
                        <div class="kt-pricing-1__visual">
                            <div class="kt-pricing-1__hexagon1"></div>
                            <div class="kt-pricing-1__hexagon2"></div>
                            <span class="kt-pricing-1__icon kt-font-success"><i class="la la-users"></i></span>
                        </div>

                        <h2 class="kt-pricing-1__subtitle mt-4">تعداد کل ساکنین</h2>

                        <div class="kt-pricing-1__btn">
                            <h1 class="text-success borj-font">
                                100
                            </h1>
                        </div>
                    </div>
                    <div class="kt-pricing-1__item col-lg-3 border-right-blue-grey border-right-lighten-5">
                        <div class="kt-pricing-1__visual">
                            <div class="kt-pricing-1__hexagon1"></div>
                            <div class="kt-pricing-1__hexagon2"></div>
                            <span class="kt-pricing-1__icon kt-font-danger"><i class="fa fa-home"></i></span>
                        </div>

                        <h2 class="kt-pricing-1__subtitle mt-4">واحدهای دارای سکونت</h2>

                        <div class="kt-pricing-1__btn">
                            <h1 class="text-danger borj-font">
                                100
                            </h1>
                        </div>
                    </div>
                    <div class="kt-pricing-1__item col-lg-3">
                        <div class="kt-pricing-1__visual">
                            <div class="kt-pricing-1__hexagon1"></div>
                            <div class="kt-pricing-1__hexagon2"></div>
                            <span class="kt-pricing-1__icon kt-font-warning"><i class="la la-home"></i></span>
                        </div>

                        <h2 class="kt-pricing-1__subtitle mt-4">واحدهای تخلیه</h2>

                        <div class="kt-pricing-1__btn">
                            <h1 class="text-warning borj-font">
                                100
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
                            لیست واحد ها و کارتابل شخصی
                        </h3>
                        <a href="{{ route('units.create') }}"><button data-toggle="modal" data-target=" #add" style="margin-right: 20px;font-size: 13px" type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن واحد</button></a>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button style="font-size: 14px" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
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
                    <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover  display nowrap " id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th style="min-width: 150px">نام و نام خانوادگی</th>
                                <th>برج</th>
                                <th>طبقه</th>
                                <th>واحد</th>
                                <th>کد</th>
                                <th style="min-width: 90px; font-family: Byekan!important;">متراژ واحد</th>
                                <th style="min-width: 150px;font-family: Byekan!important;">مبلغ شارژ ماهیانه</th>
                                <th style="min-width: 120px;font-family: Byekan!important;">شماره همراه</th>
                                <th style="min-width: 120px;font-family: Byekan!important;">تلفن منزل</th>
                                <th style="min-width: 150px">نام مستاجر</th>
                                <th style="min-width: 150px;font-family: Byekan!important;">تلفن همراه مستاجر</th>
                                <th style="min-width: 150px;font-family: Byekan!important;">وضعیت سکونت</th>
                                <th style="min-width: 150px;font-family: Byekan!important;">مشاهده جزییات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $unit->fullName }}</td>
                                    <td>{{ $unit->tower }}</td>
                                    <td style="font-family: BYekan">{{ $unit->floor }}</td>
                                    <td style="font-family: BYekan">{{ $unit->unit }}</td>
                                    <td >{{ $unit->code }}</td>
                                    <td style="font-family: BYekan">{{ $unit->area }}</td>
                                    <td style="font-family: BYekan">{{ $unit->charge }}</td>
                                    <td style="font-family: BYekan">{{ $unit->mobile }}</td>
                                    <td style="font-family: BYekan">{{ $unit->phone1 }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ route('units.show', $unit->id) }}"><i class="flaticon-reply"></i></a></td>

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
                            پراکندگی ساکنین
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">


                    <figure class="highcharts-figure">
                        <div id="container"></div>
                    </figure>


                </div>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title ">
                            وضعیت سکونت واحد ها
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">


                    <figure class="highcharts-figure">
                        <div id="container2"></div>
                    </figure>
                </div>
            </div>
        </div>

    </div>








@endsection


@section('footerScripts')



    <script>
        var DatatablesExtensionButtons = {
            init: function () {

                // start data table m_table_2
                var t;
                t = $("#m_table_2").DataTable({

                        scrollY: "", scrollX: true,
                        responsive: true,

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


        // Build the chart
        Highcharts.chart('container', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'ساکن',
                colorByPoint: true,
                data: [{
                    name: 'مالک',
                    y: 61,
                    sliced: true,
                    selected: true
                }, {
                    name: 'مستاجر',
                    y: 11
                }]
            }]
        });

        function renderIcons() {

            // Move icon
            if (!this.series[0].icon) {
                this.series[0].icon = this.renderer.path(['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8])
                    .attr({
                        stroke: '#303030',
                        'stroke-linecap': 'round',
                        'stroke-linejoin': 'round',
                        'stroke-width': 2,
                        zIndex: 10
                    })
                    .add(this.series[2].group);
            }
            this.series[0].icon.translate(
                this.chartWidth / 2 - 10,
                this.plotHeight / 2 - this.series[0].points[0].shapeArgs.innerR -
                (this.series[0].points[0].shapeArgs.r - this.series[0].points[0].shapeArgs.innerR) / 2
            );

            // Exercise icon
            if (!this.series[1].icon) {
                this.series[1].icon = this.renderer.path(
                    ['M', -8, 0, 'L', 8, 0, 'M', 0, -8, 'L', 8, 0, 0, 8,
                        'M', 8, -8, 'L', 16, 0, 8, 8]
                )
                    .attr({
                        stroke: '#ffffff',
                        'stroke-linecap': 'round',
                        'stroke-linejoin': 'round',
                        'stroke-width': 2,
                        zIndex: 10
                    })
                    .add(this.series[2].group);
            }
            this.series[1].icon.translate(
                this.chartWidth / 2 - 10,
                this.plotHeight / 2 - this.series[1].points[0].shapeArgs.innerR -
                (this.series[1].points[0].shapeArgs.r - this.series[1].points[0].shapeArgs.innerR) / 2
            );

            // Stand icon
            if (!this.series[2].icon) {
                this.series[2].icon = this.renderer.path(['M', 0, 8, 'L', 0, -8, 'M', -8, 0, 'L', 0, -8, 8, 0])
                    .attr({
                        stroke: '#303030',
                        'stroke-linecap': 'round',
                        'stroke-linejoin': 'round',
                        'stroke-width': 2,
                        zIndex: 10
                    })
                    .add(this.series[2].group);
            }

            this.series[2].icon.translate(
                this.chartWidth / 2 - 10,
                this.plotHeight / 2 - this.series[2].points[0].shapeArgs.innerR -
                (this.series[2].points[0].shapeArgs.r - this.series[2].points[0].shapeArgs.innerR) / 2
            );
        }

        Highcharts.chart('container2', {

            chart: {
                type: 'solidgauge',
                height: '110%',
                events: {
                    render: renderIcons
                }
            },

            title: {
                text: '',
                style: {
                    fontSize: '24px'
                }
            },

            tooltip: {
                borderWidth: 0,
                backgroundColor: 'none',
                shadow: false,
                style: {
                    fontSize: '16px'
                },
                valueSuffix: '%',
                pointFormat: '{series.name}<br><span style="font-size:2em; color: {point.color}; font-weight: bold">{point.y}</span>',
                positioner: function (labelWidth) {
                    return {
                        x: (this.chart.chartWidth - labelWidth) / 2,
                        y: (this.chart.plotHeight / 2) + 15
                    };
                }
            },

            pane: {
                startAngle: 0,
                endAngle: 360,
                background: [{ // Track for Move
                    outerRadius: '112%',
                    innerRadius: '88%',
                    backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[0])
                        .setOpacity(0.3)
                        .get(),
                    borderWidth: 0
                }, { // Track for Exercise
                    outerRadius: '87%',
                    innerRadius: '63%',
                    backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[1])
                        .setOpacity(0.3)
                        .get(),
                    borderWidth: 0
                }, { // Track for Stand
                    outerRadius: '62%',
                    innerRadius: '38%',
                    backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[2])
                        .setOpacity(0.3)
                        .get(),
                    borderWidth: 0
                }]
            },

            yAxis: {
                min: 0,
                max: 100,
                lineWidth: 0,
                tickPositions: []
            },

            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        enabled: false
                    },
                    linecap: 'round',
                    stickyTracking: false,
                    rounded: true
                }
            },

            series: [{
                name: 'Move',
                data: [{
                    color: Highcharts.getOptions().colors[0],
                    radius: '112%',
                    innerRadius: '88%',
                    y: 80
                }]
            }, {
                name: 'Exercise',
                data: [{
                    color: Highcharts.getOptions().colors[1],
                    radius: '87%',
                    innerRadius: '63%',
                    y: 65
                }]
            }, {
                name: 'Stand',
                data: [{
                    color: Highcharts.getOptions().colors[2],
                    radius: '62%',
                    innerRadius: '38%',
                    y: 50
                }]
            }]
        });

    </script>
@stop