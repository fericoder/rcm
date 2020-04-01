@extends('dashboard.layouts.master', ['title' => 'مدیریت قرارداد ها'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <div class="modal fade text-left" id="AddContract" tabindex="-1" role="dialog" aria-labelledby="AddContract" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddMonitoringReport">افزودن قرارداد</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form style="font-family:Byekan" style="vertical-align:center;text-align:center" enctype="multipart/form-data" method="post" action="{{ route('contracts.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="date">نوع قرارداد</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="type" id="">
                                        <option class="form-control" value="هزینه ای">هزینه ای</option>
                                        <option class="form-control" value="درامدی">درامدی</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نام</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" placeholder="مثال: قرارداد سوپر مارکت" class="form-control" name="name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">توضیحات</label>
                                <div class="col-md-9">
                                    <input type="text" id="responsible" placeholder="مثال: توضیحات" class="form-control" name="description">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نام طرف قرارداد</label>
                                <div class="col-md-9">
                                    <input type="text" id="location" placeholder="مثال: آقای رضایی" class="form-control" name="contractor">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تاریخ شروع</label>
                                <div class="col-md-9">
                                    <input type="text" id="from" placeholder="کلیک کنید" class="form-control date" name="from">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">تاریخ خاتمه</label>
                                <div class="col-md-9">
                                    <input type="text" id="to" placeholder="کلیک کنید" class="form-control date" name="to">
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
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                لیست قرارداد های منعقد شده
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <button  style="float: right;"   class="btn btn-sm btn-success mr-1  ladda-button"  data-target="#AddContract" data-toggle="modal" ><span class="ladda-label">  <i class="la la-plus"></i>  افزودن قرارداد  </span></button>

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
                        <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>نام قرارداد</th>
                                <th>نوع قرارداد</th>
                                <th>توضیحات</th>
                                <th>پیمانکار</th>
                                <th>تاریخ شروع</th>
                                <th>تاریخ پایان</th>
                                <th>فایل قرارداد</th>
                                <th>حذف | ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($contracts as $contract)
                                <tr>
                                    <td>{{ $contract->name }}</td>
                                    <td>{{ $contract->type }}</td>
                                    <td>{{ $contract->description }}</td>
                                    <td>{{ $contract->contractor }}</td>
                                    <td>{{ $contract->from }}</td>
                                    <td>{{ $contract->to }}</td>
                                    <td>فایل</td>
                                    <td>
                                      @can('admin')
                                          <a href="{{ route('contracts.delete', ['id' => $contract->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف قرارداد "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                      @endcan
                                      @can('admin', 'boardMember')
                                          <a href="{{ route('contracts.edit', $contract->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="ویرایش"> <i style="color: green" class="la la-edit"></i> </a>
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
