@extends('dashboard.layouts.master', [ 'title' => 'ویرایش مصوبه'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">ویرایش مصوبه</h3>
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
                        <form action="{{ route('enactments.update', $enactment->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>انتخاب صورتجلسه:</label>
                                        <div class="kt-input-icon">

                                            <select  style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_1" name="proceeding_id">
                                                @foreach ($proceedings as $proceeding)
                                                    <option {{ $enactment->proceeding_id == $proceeding->id ? 'selected' : '' }} value="{{ $proceeding->id }}">{{ ' شماره جلسه: ' .  $proceeding->number . ' | ' . ' تاریخ جلسه: ' . $proceeding->date }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">اقدام کننده:</label>

                                        <div class="kt-input-icon">
                                            <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_2" name="user_id">
                                                @foreach ($users as $user)
                                                    <option {{ $enactment->user_id == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->fullName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>شماره مصوبه:</label>
                                        <div class="kt-input-icon">
                                            <input type="text" name="number" class="form-control" value="{{ $enactment->number }}" placeholder="مثال: ۱ ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="">مهلت اقدام:</label>
                                        <div class="kt-input-icon">
                                            <input class="form-control dp" >
                                            <input type="hidden" name="deadline" value="{{ $enactment->deadline }}" class="observer" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>شرح مصوبه:</label>
                                        <div class="kt-input-icon">
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $enactment->description }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="text-danger">نتیجه:</label>
                                        <div class="kt-input-icon">
                                            <textarea name="resualt" class="form-control" id="" cols="30" rows="5">{{ $enactment->resualt }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <label class="text-danger">وضعیت:</label>

                                    <div class="kt-input-icon">
                                        <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_4" name="status">
                                                <option {{ $enactment->status == 'بررسی نشده' ? 'selected' : '' }} value="بررسی نشده">بررسی نشده</option>
                                                <option {{ $enactment->status == 'درحال انجام' ? 'selected' : '' }} value="درحال انجام">درحال انجام</option>
                                                <option {{ $enactment->status == 'معلق' ? 'selected' : '' }} value="معلق">معلق</option>
                                                <option {{ $enactment->status == 'لغو شده' ? 'selected' : '' }} value="لغو شده">لغو شده</option>
                                                <option {{ $enactment->status == 'انجام شده' ? 'selected' : '' }} value="انجام شده">انجام شده</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ویرایش مصوبه</button>
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

@stop