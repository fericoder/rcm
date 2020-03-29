@extends('dashboard.layouts.master', ['title' => 'تنظیمات وبسایت'])


@section('content')


    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-danger"></i></div>
            <div class="alert-text">
                جهت استفاده از وبسایت مجتمع مسکونی خود، ثبت اطلاعات الزامی میباشد.
            </div>
    </div>




    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    اطلاعات وبسایت
                </h3>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{ route('configuration.update', \Auth::user()->complex->id) }}" method="post" class="kt-form kt-form--fit kt-form--label-right">
            @csrf
            @method('PATCH')
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




                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">نام مجتمع:</label>
                    <div class="col-lg-3">
                        <input type="text" disabled class="form-control" value="{{ $complex->name }}">
                        <input type="text" style="display: none" hidden name="id" class="form-control" value="{{ $complex->id }}">
                        <span class="form-text text-muted">جهت تغییر با پشتیبانی تماس بگیرید</span>
                    </div>
                    <label class="col-lg-2 col-form-label">تعداد کل واحد ها: (عدد)</label>
                    <div class="col-lg-3">
                        <input type="text" name="units" class="form-control" placeholder="مثال: ۲۰">
                        <span class="form-text text-muted">تعداد کل واحد های مجتمع را وارد نمایید</span>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <label class="col-lg-2 col-form-label">آدرس:</label>
                    <div class="col-lg-8">
                        <div class="kt-input-icon">
                            <input type="text" name="address" class="form-control" placeholder="مثال: تهران - میدان المپیک - برج مسکونی المپیک">
                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                        </div>
                        <span class="form-text text-muted">آدرس مجتمع را وارد نمایید</span>
                    </div>

                </div>
                <div class="form-group row mt-3">
                    <label class="col-lg-2 col-form-label">نوع مجتمع:</label>
                    <div class="col-lg-10">
                        <div class="kt-radio-inline">
                            <label class="kt-radio kt-radio--solid">
                                <img style="width: 30px" src="/dashboard/assets/img/buiding.png" alt="">
                                <input type="radio" name="type" checked="" value="normal"> آپارتمان یک بلوکه
                                <span></span>
                            </label>
                            <label class="kt-radio kt-radio--solid">
                                <img style="width: 40px" src="/dashboard/assets/img/towers.png" alt="">
                                <input type="radio" name="type" value="multiBlock"> برج چند بلوکه
                                <span></span>
                            </label>
                        </div>
                        <span class="form-text text-muted">در انتخاب نوع مجتمع دقت فرمایید. ساختار سامانه براساس نوع انتخابی شکل خواهد گرفت و تغییر آن امکان پذیر نمیباشد.</span>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <button style="font-size: 13px" type="submit" class="btn btn-success">ثبت و ورود به قسمت افزودن اطلاعات واحدها</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>




@endsection


@section('footerScripts')

@stop