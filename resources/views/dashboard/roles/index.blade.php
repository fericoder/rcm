@extends('dashboard.layouts.master', [ 'title' => 'لیست گروه کاربری'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">لیست گروه کاربری</h3>
                        <a href="{{ route('roles.create') }}"><button data-toggle="modal" data-target=" #add" style="margin-right: 20px;font-size: 13px" type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن گروه کاربری</button></a>
                    </div>

                    <div style="" class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-toolbar-wrapper">
                            <div class="dropdown dropdown-inline">
                                <button  style="font-size: 14px;" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <th title="Field #1" data-field="OrderID">ردیف</th>
                            <th title="Field #2" data-field="Owner">نام گروه کاربری</th>
                            <th title="Field #3" data-field="Contact">توضیحات</th>
                            <th title="Field #8" data-field="OrderDate">تاریخ ایجاد</th>
                            <th title="Field #8" data-field="lastaction">آخرین ویرایش</th>
                            <th title="Field #9" data-field="Actions">تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id  }}</td>
                                <td>{{ $role->name  }}</td>
                                <td>{{ $role->label  }}</td>
                                <td>{{ jdate($role->LastAction)  }}</td>
                                <td>{{ jdate($role->created_at)  }}</td>
                                <td>
                                    <a href=""
                                       data-id="{{$role->id}}"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button"
                                       title="View "> <i style="color: darkred" class="fa fa-times"></i> </a>

                                    <a href="{{ route('roles.edit', $role->id ) }}"
                                       class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                       title="View "> <i style="color: green" class="la la-edit"></i> </a></td>
                            </tr>

                        @endforeach


                        </tbody>

                    </table>
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
                        "order": [[ 0,  "desc" ]],
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
            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>


@stop