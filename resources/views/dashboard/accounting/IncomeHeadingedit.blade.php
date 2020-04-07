@extends('dashboard.layouts.master', [ 'title' => 'ویرایش هزینه ها'])


@section('content')

<link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />






<div class="row">
  <div class="col-lg-12">
    <div class="kt-portlet kt-portlet--mobile">
      <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title borj-color">ویرایش هزینه</h3>
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
        <form action="{{ route('incomeHeading.update', $incomeHeading->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="modal-body">

            <div class="form-group row">
              <div class="col-lg-6">
                <label>نام سرفصل درآمد:</label>
                <div class="kt-input-icon">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <label class="">کد سرفصل درآمد:</label>
                <div class="kt-input-icon">
                  <input type="text" name="code" class="form-control">
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ویرایش خدمات</button>
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
