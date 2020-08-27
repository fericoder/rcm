@extends('.dashboard.layouts.master',  ['title' => 'ویرایش کاربر'])

@section('headerScripts')
    <link href="/admin/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                ویرایش کاربر: {{ $user->fullName }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form action="{{ route('users.update', $user->id)  }}" method="POST" enctype="multipart/form-data"
                      class="m-form m-form--fit m-form--label-align-right m-form--group-seperator">
                    @csrf
                    @method('PUT')
                    <div class="m-portlet__body mt-5">

                        @if ($errors->any())
                            <div style="font-family: byekan; color: white!important;" class="alert alert-danger">
                                <ul style="font-family: byekan;color: white!important;" >
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نام و نام خانوادگی:</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ $user->fullName }}" name="fullName" class="form-control m-input" placeholder="نام و نام خانوادگی را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">کد کاربر :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ $user->email }}" name="email" class="form-control m-input" placeholder="کد کاربر را وارد نمایید">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">نوع کاربر :</label>
                            <div class="col-lg-6">
                                <select style="direction: rtl; text-align: right;width: 100%;" class="form-control m-select2" id="m_select2_1" name="role_id[]" multiple>
                                    @foreach (\App\Role::all() as $role)
                                        <option {{ in_array(trim($role->id) , $user->roles->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">شماره موبایل :</label>
                            <div class="col-lg-6">
                                <input type="text" value="{{ $user->mobile }}" name="mobile" class="form-control m-input" placeholder="شماره موبایل را وارد نمایید">
                            </div>
                        </div>

                        <span class="">درصورتی که قصد تغییر رمز عبور برای کاربر مورد نظر دارید، رمز عبور جدید کاربر را وارد نمایید. در غیر اینصورت نیازی به وارد کردن رمز عبور نیست.</span>
                        <div style="margin-top: 20px!important;"  class="form-group m-form__group mt-2 row">
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
                                        <button type="submit" class="btn btn-success">ویرایش کاربر</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
        </div>

    </div>
    </div>

@stop


@section('footerScripts')

    <!--begin::Page Vendors -->
    <script src="/admin/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/admin/assets/demo/default/custom/crud/datatables/basic/basic.js" type="text/javascript"></script>
    <script src="/admin/assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop