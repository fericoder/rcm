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
                        <h3 class="kt-portlet__head-title borj-color">افزودن کاربر جدید</h3>
                    </div>

                </div>

                @if ($errors->any())
                    <div style="font-family: byekan; color: white!important;" class="alert alert-danger">
                        <ul style="font-family: byekan;color: white!important;" >
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif


            <!--begin::Form-->
                <form action="{{ route('users.store')  }}"z method="post" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    @csrf
                    <div class="m-portlet__body mt-5">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نام و نام خانوادگی:</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('fullName') }}" name="fullName" class="form-control m-input"
                                       placeholder="نام و نام خانوادگی را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">کد کاربر :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('email') }}" name="email" class="form-control m-input" placeholder="کد کاربر را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نوع کاربر :</label>
                            <div class="col-lg-6">
                                <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_1" name="role_id[]" multiple>
                                @foreach (\App\Role::all() as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">شماره موبایل :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ old('mobile') }}" name="mobile" class="form-control m-input" placeholder="شماره موبایل را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">رمز عبور :</label>
                            <div class="col-lg-6">
                                <input type="password" name="password" class="form-control m-input" placeholder="رمز عبور را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">تکرار رمز عبور :</label>
                            <div class="col-lg-6">
                                <input type="password" name="password_confirmation" class="form-control m-input" placeholder="مجددا رمز عبور را وارد نمایید">
                            </div>
                        </div>


                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success">افزودن کاربر</button>
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
    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>
    <script src="/admin/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
@stop