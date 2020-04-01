@extends('dashboard.layouts.master', [ 'title' => 'ویرایش قرارداد'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">ویرایش قرارداد</h3>
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
                        <form action="{{ route('contracts.update', $contract->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">


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

@stop
