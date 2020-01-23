@extends('dashboard.layouts.master')


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />


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
                                    10 مصوبه
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
                                    10 مصوبه
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

                            <h2 class="kt-pricing-1__subtitle mt-4">تعداد مصوبات معلق</h2>

                            <div class="kt-pricing-1__btn">
                                <h1 class="text-danger borj-font">
                                    10 مصوبه
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
                                <th>شماره مصوبه</th>
                                <th>تاریخ جلسه</th>
                                <th>شماره جلسه</th>
                                <th>نوع جلسه</th>
                                <th>شرح مصوبه</th>
                                <th>اقدام کننده</th>
                                <th>مهلت اقدام</th>
                                <th>نتیجه</th>
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
                                پراکندگی مصوبات بین اعضا (اسامی)
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
                            <h3 class="kt-portlet__head-title borj-color">
                                پراکندگی وضعیت مصوبات (انجام شده، درحال انجام، معلق)
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
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>


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

    </script>
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
        Highcharts.chart('container', {
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
                        format: '{point.name}: {point.y:.1f}%'
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
                            name: "Chrome",
                            y: 62.74,
                            drilldown: "Chrome"
                        },
                        {
                            name: "Firefox",
                            y: 10.57,
                            drilldown: "Firefox"
                        },
                        {
                            name: "Internet Explorer",
                            y: 7.23,
                            drilldown: "Internet Explorer"
                        },
                        {
                            name: "Safari",
                            y: 5.58,
                            drilldown: "Safari"
                        },
                        {
                            name: "Edge",
                            y: 4.02,
                            drilldown: "Edge"
                        },
                        {
                            name: "Opera",
                            y: 1.92,
                            drilldown: "Opera"
                        },
                        {
                            name: "Other",
                            y: 7.62,
                            drilldown: null
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Chrome",
                        id: "Chrome",
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
                        name: "Firefox",
                        id: "Firefox",
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
                        name: "Internet Explorer",
                        id: "Internet Explorer",
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
                        name: "Safari",
                        id: "Safari",
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
                        name: "Edge",
                        id: "Edge",
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
                        name: "Opera",
                        id: "Opera",
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
    <script>
        // Create the chart
        Highcharts.chart('container2', {
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
                        format: '{point.name}: {point.y:.1f}%'
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
                            name: "Chrome",
                            y: 62.74,
                            drilldown: "Chrome"
                        },
                        {
                            name: "Firefox",
                            y: 10.57,
                            drilldown: "Firefox"
                        },
                        {
                            name: "Internet Explorer",
                            y: 7.23,
                            drilldown: "Internet Explorer"
                        },
                        {
                            name: "Safari",
                            y: 5.58,
                            drilldown: "Safari"
                        },
                        {
                            name: "Edge",
                            y: 4.02,
                            drilldown: "Edge"
                        },
                        {
                            name: "Opera",
                            y: 1.92,
                            drilldown: "Opera"
                        },
                        {
                            name: "Other",
                            y: 7.62,
                            drilldown: null
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Chrome",
                        id: "Chrome",
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
                        name: "Firefox",
                        id: "Firefox",
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
                        name: "Internet Explorer",
                        id: "Internet Explorer",
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
                        name: "Safari",
                        id: "Safari",
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
                        name: "Edge",
                        id: "Edge",
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
                        name: "Opera",
                        id: "Opera",
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

@stop