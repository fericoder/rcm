@extends('.dashboard.layouts.master',  ['title' => 'افزودن سطح دسترسی'])

@section('headerScripts')
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--mobile p-4">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">افزودن گروه کاربری</h3>
                    </div>

                </div>
                <!--begin::Form-->
                <form action="{{ route('permissions.store')  }}"z method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">عنوان:</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control m-input"
                                       placeholder="عنوان سطح دسترسی را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">توضیحات :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('label') }}" name="label" class="form-control m-input"
                                       placeholder="توضیحات سطح دسترسی را وارد نمایید">
                            </div>
                        </div>



                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">افزودن سطح دسترسی</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <!--end::Form-->
            </div>
        </div>

    </div>
    </div>

@stop


@section('footerScripts')
    <!--begin::Page Vendors -->
    <script src="/admin/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
@stop