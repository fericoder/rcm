@extends('dashboard.layouts.master', ['title' => 'گزینه های نظرسنجی'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    


    <div class="modal fade text-left" id="AddOption" tabindex="-1" role="dialog" aria-labelledby="AddOption" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">افزودن گزینه</h4>
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

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="penalty/store" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">عنوان گزینه: </label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control" style="" placeholder="مثال: رنگ درب آسانسور" name="date" type="text" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">تاریخ انقضا گزینه: </label>
                                <div class="col-md-9">
                                    <input style="font-family:Byekan" class="form-control date" style="" placeholder="کلیک کنید" name="date" type="text" />
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

            <div class="text-right m-4">
                <a href="{{ route('votes.index') }}"><span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-primary "><i class="flaticon-reply mr-3"></i>درحال مشاهده گزینه های نظرسنجی {{ $vote->title }}</span></a>
            </div>




        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        لیست گزینه های نظرسنجی {{ $vote->title }}
                    </h3>
                </div>

                <div style="" class="kt-portlet__head-toolbar">
                    <button  style="float: right;margin-right: 40px!important;"   class="btn btn-success btn-min-width mr-1 mb-1 ladda-button"  data-target="#AddOption" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن گزینه جدید  </span></button>
                </div>
            </div>



            <div class="kt-portlet__body">
                <p>جهت افزودن گزینه به نظرسنجی، برروی گزینه سبز رنگ بالا کلیک نمایید.</p>
                <!--begin::Accordion-->
                <div class="accordion" id="accordionExample1">


                    @foreach ($vote->options as $option)
                        <div class="card">
                            <div class="card-header" id="heading{{ $option->id }}">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse{{$option->id}}" aria-expanded="true" aria-controls="collapse{{$option->id}}">
                                  عنوان گزینه:   {{ $option->title }}
                                </div>
                            </div>
                            <div id="collapse{{$option->id}}" class="collapse" aria-labelledby="heading{{$option->id}}" data-parent="#accordionExample{{$option->id}}">
                                <div class="card-body">
                                    <ul>
                                        <li style="padding: 10px"> عنوان گزینه: {{ $option->title }}</li>
                                        <li style="padding: 10px"> نوع: {{ $option->title }} </li>
                                    </ul>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ویرایش</button>
                                        <a href=""><button type="button" class="btn btn-danger">حذف</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>
                <!--end::Accordion-->
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