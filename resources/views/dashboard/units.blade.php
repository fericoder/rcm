@extends('dashboard.layouts.master')


@section('content')


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
                                    347
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
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>ردیف</th>
                                <th>تاریخ جلسه</th>
                                <th>شماره جلسه</th>
                                <th>مشاهده مصوبات</th>
                                <th>header</th>
                                <th>header</th>
                                <th>header</th>
                                <th>header</th>
                                <th>header</th>
                                <th>header</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

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

                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">


                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                                This pie chart shows how the chart legend can be used to provide
                                information about the individual slices.
                            </p>
                        </figure>


                    </div>
                </div>
            </div>




            <div class="col-lg-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title ">

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







        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
        <script src="assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors(used by this page) -->
        <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
        <script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
        <!--end::Page Scripts -->

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
            // Build the chart
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares in January, 2018'
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
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Chrome',
                        y: 61.41,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Internet Explorer',
                        y: 11.84
                    }, {
                        name: 'Firefox',
                        y: 10.85
                    }, {
                        name: 'Edge',
                        y: 4.67
                    }, {
                        name: 'Safari',
                        y: 4.18
                    }, {
                        name: 'Other',
                        y: 7.05
                    }]
                }]
            });
        </script>
        <script>
            // Uncomment to style it like Apple Watch
            /*
            if (!Highcharts.theme) {
            Highcharts.setOptions({
            chart: {
            backgroundColor: 'black'
            },
            colors: ['#F62366', '#9DFF02', '#0CCDD6'],
            title: {
            style: {
            color: 'silver'
            }
            },
            tooltip: {
            style: {
            color: 'silver'
            }
            }
            });
            }
            // */

            /**
             * In the chart render event, add icons on top of the circular shapes
             */
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
                    text: 'Activity',
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
@endsection