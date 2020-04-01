@extends('dashboard.layouts.master', ['title' => 'شرکت در نظرسنجی'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />





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
            <a href="{{ route('votes.index') }}"><span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-primary "><i class="flaticon-reply mr-3"></i>درحال شرکت در نظرسنجی {{ $vote->title }}</span></a>
        </div>




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                         شرکت در نظرسنجی {{ $vote->title }}
                    </h3>
                </div>

            </div>



            <div class="kt-portlet__body">
                جهت ثبت رای در نظرسنجی {{ $vote->title }} لطفا گزینه مورد نظر را انتخاب و برروی گزینه ثبت رای کلیک نمایید.

                <form method="post" action="{{ route('vote.submit', $vote->id) }}" class="kt-form m-5">
                    @csrf
                    <div class="form-group">
                        <label>{{ $vote->question }}</label>
                        <div class="kt-radio-list m-5">
                            @foreach ($vote->options as $option)
                                <label class="kt-radio"><input type="radio" name="selectedOption" value="{{ $option->id }}">{{ $option->title }}<span></span></label>
                            @endforeach
                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button style="font-size: 15px" type="submit" class="btn btn-success">ثبت رای و مشاهده گزارش</button>
                        </div>
                    </div>

                </form>


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




    </script>
@stop