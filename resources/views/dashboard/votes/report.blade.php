@extends('dashboard.layouts.master', ['title' => 'گزارش نظرسنجی'])


@section('content')




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

            <div class="text-right m-4">
                <a href="{{ route('votes.index') }}"><span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-primary "><i class="flaticon-reply mr-3"></i>درحال مشاهده گزارش نظرسنجی {{ $vote->title }}</span></a>
            </div>




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                         گزارش نظرسنجی {{ $vote->title }}
                    </h3>
                </div>
            </div>



            <div class="kt-portlet__body">
                <p>سوال نظرسنجی: {{ $vote->question }}</p>
                <p>تعداد کل رای های ثبت شده تاکنون : {{ $pollsCount }}</p>
                <!--begin::Accordion-->
                <div id="polls" style="min-width: 100%; max-width: 100%; height: 450px; margin: 0 auto"></div>
            </div>
        </div>




            @canany(['admin', 'boardMember'])
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                شرکت کنندگان در نظرسنجی
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddVote" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن نظرسنجی جدید  </span></button>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <p class="card-text">در این قسمت لیست ساکنین شرکت کننده در نظرسنجی را مشاهده میکنید.</p>

                        <table style="font-family:Byekan; width: 100% !important;" class="table display nowrap table-striped table-bordered scroll-horizontal " id="m_table_2">
                            <thead>
                            <tr>
                                <th>کد واحد</th>
                                <th>نام و نام خانوادگی</th>
                                <th>نظر</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($pollsUsers as $pollsUser)
                                <tr>
                                    <td>{{ $pollsUser->user->code }}</td>
                                    <td>{{ $pollsUser->user->fullName }}</td>
                                    <td>{{ $pollsUser->option->title }}</td>

                                </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div>
                </div>
                @endcan









    </div>


@endsection


@section('footerScripts')
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
        var chart = am4core.create("polls", am4charts.PieChart);
        chart.rtl = true;
        // Add data
        chart.data = [

                @foreach ($polls as $poll)
                    {
                        "hazine": "{{ $vote->options->where('id', $poll->option_id)->pluck('title')->first()  }}",
                        "mablaq": {{ $poll->total }}
                    },
                @endforeach
                {

                },
            ];

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
@stop