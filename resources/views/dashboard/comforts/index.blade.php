@extends('dashboard.layouts.master', ['title' => 'خدمات رفاهی'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    @canany(['admin', 'boardMember'])
        <div class="modal fade text-left" id="AddUnit" tabindex="-1" role="dialog" aria-labelledby="AddUnit" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="AddMonitoringReport">افزودن واحد</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('comfort.store') }}" class="form form-horizontal form-bordered striped-rows">
                            @csrf
                            <div class="form-body">


                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="date">نام واحد</label>
                                    <div class="col-md-9">
                                        <input class="form-control" placeholder="مثال: سوپر مارکت" name="title" type="text" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="name">موقعیت</label>
                                    <div class="col-md-9">
                                        <input type="text" id="location" placeholder="مثال: طبقه منفی ۱" class="form-control" name="location">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="name">نام مدیر</label>
                                    <div class="col-md-9">
                                        <input type="text" id="responsible" placeholder="مثال: رضا رضایی" class="form-control" name="responsible">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="name">تلفن تماس</label>
                                    <div class="col-md-9">
                                        <input type="text" id="location" placeholder="مثال: 40441414" class="form-control" name="phone">
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
        @endcanany


    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست واحد های تجاری و خدمات رفاهی
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            @canany(['admin', 'boardMember'])
                            <button  style="float: right;"   class="btn btn-sm btn-success mr-1  ladda-button"  data-target="#AddUnit" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن واحد  </span></button>
                            @endcanany
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

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="kt-portlet__body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>نام</th>
                                <th>موقعیت</th>
                                {{--<th>مدیر</th>--}}
                                <th>تلفن تماس</th>
                                <th>حذف | ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($comforts as $comfort)
                                <tr>
                                    <td>{{ $comfort->title }}</td>
                                    <td>{{ $comfort->location }}</td>
{{--                                    <td>{{ $comfort->responsible }}</td>--}}
                                    <td style="font-family: BYekan!important;"><a style="font-family: BYekan!important;" href="tel:9821{{ $comfort->phone }}">{{ $comfort->phone }}</td></a>
                                    <td>
                                      @can('admin')
                                          <a href="{{ route('comfort.delete', ['id' => $comfort->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف قرارداد "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                      @endcan
                                      @can('admin', 'boardMember')
                                          <a href="{{ route('comfort.edit', $comfort->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="ویرایش"> <i style="color: green" class="la la-edit"></i> </a>
                                      @endcan

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
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
