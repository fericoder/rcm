@extends('dashboard.layouts.master', ['title' => 'ویرایش صورتحساب'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                ویرایش صورتحساب
                            </h3>
                            <span class="badge badge-success ml-3">کد :‌{{ $invoice->code }}</span>
                            <span class="badge badge-danger ml-3">نام مالک :‌{{ $invoice->user->fullName }}</span>
                            <span class="badge badge-primary ml-3">واحد :‌{{ $invoice->user->code }}</span>
                            <span class="badge badge-warning ml-3">بابت :‌{{ $invoice->for }}</span>

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


                        <form action="{{ route('invoices.update', $invoice->id) }}" method="post" class="form-body">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>کد صورتحساب:</label>
                                    <input type="text" disabled class="form-control" value="{{ $invoice->code }}">
                                </div>

                                <div class="col-lg-6">
                                    <label>بابت:</label>
                                    <input type="text" disabled name="for" class="form-control" value="{{ $invoice->for }}">
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>مبلغ: (ریال)</label>
                                    <input type="text" disabled name="amount" class="form-control" value="{{ number_format($invoice->amount) }}">
                                </div>
                                <div class="col-lg-6">
                                    <label class="">وضعیت:</label>
                                    <div class="kt-input-icon">
                                        <select class="form-control" name="status" id="">
                                            <option {{ $invoice->status == 'notPaid' ? 'selected' : '' }} value="notPaid">پرداخت نشده</option>
                                            <option {{ $invoice->status == 'paid' ? 'selected' : '' }} value="paid">پرداخت شده</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ثبت تغییرات</button>
                            <a href="{{ route('units.show', $invoice->user_id) }}"><button type="button" class="btn btn-danger">انصراف و بازگشت به صفحه واحد</button></a>
                        </div>
                        </form>

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