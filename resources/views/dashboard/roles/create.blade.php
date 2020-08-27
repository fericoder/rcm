@extends('.dashboard.layouts.master',  ['title' => 'افزودن گروه کاربری'])

@section('headerScripts')
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile p-4">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">افزودن گروه کاربری</h3>
                    </div>

                </div>

                <!--begin::Form-->
                <form action="{{ route('roles.store')  }}" method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">عنوان:</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control m-input"
                                       placeholder="عنوان گروه کاربری را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">دسترسی ها:</label>
                            <div class="col-lg-6">
                                <select style="width: 100%" class="form-control m-select2" id="m_select2_1" name="permission_id[]" multiple>
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->id }}"> {{ $permission->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">توضیحات :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('label') }}" name="label" class="form-control m-input"
                                       placeholder="توضیحات گروه کاربری را وارد نمایید">
                            </div>
                        </div>



                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">افزودن گروه کاربری</button>
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