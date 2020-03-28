@extends('dashboard.layouts.master', [ 'title' => 'ویرایش صورتحلسه'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">ویرایش صورتجلسه</h3>
                    </div>

                </div>
                <div class="kt-portlet__body">

                    @if(count($errors) > 0 )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif


                <!--begin: Datatable -->
                        <form action="{{ route('proceedings.update', $proceeding->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>تاریخ جلسه:</label>
                                        <input class="form-control dp" >
                                        <input type="hidden" value="{{ $proceeding->date }}" name="date" class="observer" >
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">نوع جلسه:</label>

                                        <div class="kt-input-icon">
                                            <select name="type" class="form-control" id="type">
                                                <option value="هیات مدیره">هیات مدیره</option>
                                                <option value="مجمع">مجمع</option>
                                                <option value="سایر">سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>شماره جلسه:</label>
                                        <div class="kt-input-icon">
                                            <input type="text" name="number" class="form-control" placeholder="مثال: ۱۰۱ ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">فایل:</label>
                                        <div class="kt-input-icon">
                                            <input type="file" name="file" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ویرایش صورتجلسه</button>
                        </form>
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
                    }
                };


                jQuery(document).ready(function () {
                        DatatablesExtensionButtons.init()
                    }
                );


            </script>

            <link rel="stylesheet" href="/dashboard/assets/css/persian-datepicker.min.css"/>
            <script src="/dashboard/assets/js/persian-date.min.js"></script>
            <script src="/dashboard/assets/js/persian-datepicker.min.js"></script>
            <script src="/dashboard/assets/js/persian-date.min.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    $(".dp").pDatepicker({
                        altField: '.observer'
                    });
                });
            </script>

@stop