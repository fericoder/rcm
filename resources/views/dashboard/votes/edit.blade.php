@extends('dashboard.layouts.master')


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />


        <div class="kt-portlet">

            <div class="row">
                <div class="col-lg-7 border-right-blue-grey border-right-lighten-5">

                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h3 class="kt-widget24__title">
                                    ریز هزینه های پرداخت شده برج المپیک
                                </h3>
                                <br>
                                <h3 class="kt-widget24__title borj-font">
                                    از تاریخ 98/01/01 تا 98/06/31
                                </h3>

                                <h5 class="kt-widget24__desc mt-4">
                                    (ریال)
                                </h5>
                            </div>

                            <h1 class="kt-widget24__stats kt-font-danger borj-font">
                                11,356,223,286
                            </h1>
                        </div>

                        <div class="progress load progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-5">
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">

                                <h3 class="kt-widget24__title">
                                    پر هزینه ترین سرفصل:
                                </h3>
                                <h5 class="kt-widget24__desc mt-4">
                                    نیروی انسانی
                                </h5>
                            </div>

                            <h1 class="kt-widget24__stats kt-font-success borj-font mt-5">
                                4,616,893,041
                            </h1>
                        </div>

                        <div class="progress progress--sm borj-top">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                                هزینه ها بر اساس سرفصل <small>(ریال)</small>
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="chartdiv"></div>
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
                                هزینه ها بر اساس سرفصل <small>(ریال)</small>
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div style="font-family: iranyekan!important" id="container"></div>
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
                                هزینه ها بر اساس سرفصل <small>(ریال)</small>
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

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <div class="kt-portlet__body">
                            <!--begin: Datatable -->
                            <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_1">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th>نام سرفصل هزینه</th>
                                    <th>توضیحات</th>
                                    <th>مبلغ</th>
                                    <th>نحوه پرداخت</th>
                                    <th>شماره فاکتور/ سند</th>
                                    <th>تاریخ</th>
                                    <th>مستندات</th>
                                    <th>حذف</th>
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
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                هزینه ها بر اساس سرفصل <small>(ریال)</small>
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
                                <th>نام سرفصل هزینه</th>
                                <th>کد سرفصل هزینه</th>
                                <th>header</th>
                                <th>header</th>
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






@endsection


@section('footerScripts')

    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>

        /**
         * ---------------------------------------
         * This demo was created using amCharts 4.
         *
         * For more information visit:
         * https://www.amcharts.com/
         *
         * Documentation is available at:
         * https://www.amcharts.com/docs/v4/
         * ---------------------------------------
         */

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.PieChart);
        chart.rtl = true;
        // Add data
        chart.data = [ {
            "hazine": "نیروی انسانی",
            "mablaq": 501.9
        }, {
            "hazine": "نگهداری تاسیسات",
            "mablaq": 301.9
        }, {
            "hazine": "نگهداری آسانسورها",
            "mablaq": 201.1
        }, {
            "hazine": "آب، برق و گاز مصرفی",
            "mablaq": 165.8
        }, {
            "hazine": "نگهداری فضای سبز",
            "mablaq": 139.9
        }, {
            "hazine": "انواع بیمه های مورد نیاز",
            "mablaq": 128.3
        }, {
            "hazine": "سرویس و نگهداری ژنراتور",
            "mablaq": 99
        }, {
            "hazine": "اقلام مصرفی",
            "mablaq": 60
        }, {
            "hazine": "اقلام شوینده",
            "mablaq": 50
        },{
            "hazine": "آنتن مرکزی",
            "mablaq": 50},{
            "hazine": "سایر هزینه ها",
            "mablaq": 50} ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "mablaq";
        pieSeries.dataFields.category = "hazine";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeWidth = 2;
        pieSeries.slices.template.strokeOpacity = 1;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

    </script>

    <script>

        // Create the chart
        Highcharts.chart('container', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','rgb(156, 99, 212)', '#4572A7', '#84d6f4', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],

            chart: {
                type: 'column'
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
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'مقدار هزینه'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [
                {
                    name: "Browsers",
                    colorByPoint: true,
                    data: [
                        {
                            name: "تیر ماه",
                            y: 62.74,
                            drilldown: "تیر ماه"
                        },
                        {
                            name: "مرداد ماه",
                            y: 10.57,
                            drilldown: "مرداد ماه"
                        },
                        {
                            name: "شهریور ماه",
                            y: 7.23,
                            drilldown: "شهریور ماه"
                        },
                        {
                            name: "مهر ماه",
                            y: 5.58,
                            drilldown: "مهر ماه"
                        },
                        {
                            name: "آبان ماه",
                            y: 4.02,
                            drilldown: "آبان ماه"
                        },
                        {
                            name: "آذر ماه",
                            y: 1.92,
                            drilldown: "آذر ماه"
                        },
                        {
                            name: "فعلی",
                            y: 7.62,
                            drilldown: null
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "تیر ماه",
                        id: "تیر ماه",
                        data: [
                            [
                                "v65.0",
                                0.1
                            ],
                            [
                                "v64.0",
                                1.3
                            ],
                            [
                                "v63.0",
                                53.02
                            ],
                            [
                                "v62.0",
                                1.4
                            ],
                            [
                                "v61.0",
                                0.88
                            ],
                            [
                                "v60.0",
                                0.56
                            ],
                            [
                                "v59.0",
                                0.45
                            ],
                            [
                                "v58.0",
                                0.49
                            ],
                            [
                                "v57.0",
                                0.32
                            ],
                            [
                                "v56.0",
                                0.29
                            ],
                            [
                                "v55.0",
                                0.79
                            ],
                            [
                                "v54.0",
                                0.18
                            ],
                            [
                                "v51.0",
                                0.13
                            ],
                            [
                                "v49.0",
                                2.16
                            ],
                            [
                                "v48.0",
                                0.13
                            ],
                            [
                                "v47.0",
                                0.11
                            ],
                            [
                                "v43.0",
                                0.17
                            ],
                            [
                                "v29.0",
                                0.26
                            ]
                        ]
                    },
                    {
                        name: "مرداد ماه",
                        id: "مرداد ماه",
                        data: [
                            [
                                "v58.0",
                                1.02
                            ],
                            [
                                "v57.0",
                                7.36
                            ],
                            [
                                "v56.0",
                                0.35
                            ],
                            [
                                "v55.0",
                                0.11
                            ],
                            [
                                "v54.0",
                                0.1
                            ],
                            [
                                "v52.0",
                                0.95
                            ],
                            [
                                "v51.0",
                                0.15
                            ],
                            [
                                "v50.0",
                                0.1
                            ],
                            [
                                "v48.0",
                                0.31
                            ],
                            [
                                "v47.0",
                                0.12
                            ]
                        ]
                    },
                    {
                        name: "شهریور ماه",
                        id: "شهریور ماه",
                        data: [
                            [
                                "v11.0",
                                6.2
                            ],
                            [
                                "v10.0",
                                0.29
                            ],
                            [
                                "v9.0",
                                0.27
                            ],
                            [
                                "v8.0",
                                0.47
                            ]
                        ]
                    },
                    {
                        name: "مهر ماه",
                        id: "مهر ماه",
                        data: [
                            [
                                "v11.0",
                                3.39
                            ],
                            [
                                "v10.1",
                                0.96
                            ],
                            [
                                "v10.0",
                                0.36
                            ],
                            [
                                "v9.1",
                                0.54
                            ],
                            [
                                "v9.0",
                                0.13
                            ],
                            [
                                "v5.1",
                                0.2
                            ]
                        ]
                    },
                    {
                        name: "آبان ماه",
                        id: "آبان ماه",
                        data: [
                            [
                                "v16",
                                2.6
                            ],
                            [
                                "v15",
                                0.92
                            ],
                            [
                                "v14",
                                0.4
                            ],
                            [
                                "v13",
                                0.1
                            ]
                        ]
                    },
                    {
                        name: "آذر ماه",
                        id: "آذر ماه",
                        data: [
                            [
                                "v50.0",
                                0.96
                            ],
                            [
                                "v49.0",
                                0.82
                            ],
                            [
                                "v12.1",
                                0.14
                            ]
                        ]
                    }
                ]
            }
        });

    </script>

    <script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>


    <script>
        var DatatablesExtensionButtons = {
            init: function () {




                // start data table m_table_1
                var f;
                f = $("#m_table_1").DataTable({

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
                // end data table m_table_1



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