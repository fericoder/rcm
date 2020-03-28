@extends('dashboard.layouts.master', ['title' => 'نظارت و امنیت'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">



            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                دوربین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <center><img id="stream" src="http://miskolcwebcam.axiscam.net/mjpg/video.mjpg" width="520" height="300" border="0" alt=""></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                دوربین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <center><img id="stream" src="http://miskolcwebcam.axiscam.net/mjpg/video.mjpg" width="520" height="300" border="0" alt=""></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                دوربین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <center><img id="stream" src="http://miskolcwebcam.axiscam.net/mjpg/video.mjpg" width="520" height="300" border="0" alt=""></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                دوربین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <center><img id="stream" src="http://miskolcwebcam.axiscam.net/mjpg/video.mjpg" width="520" height="300" border="0" alt=""></center>
                    </div>
                </div>
            </div>




        </div>
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


    </script>
@stop