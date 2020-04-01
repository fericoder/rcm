@extends('dashboard.layouts.master', ['title' => 'ایجاد صورتحساب'])


@section('content')


    <style>
        .select2-selection__choice{
            font-size: 16px!important;
        }
    </style>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">



        <div class="row">

            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ایجاد صورتحساب جدید
                            </h3>
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



                        <!--begin::Accordion-->
                        <div class="accordion" id="accordionExample1">
                            <div class="card ">
                                <div class="card-header" id="headingOne">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        ایجاد صورتحساب برای یک یا چند واحد
                                    </div>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <form action="{{ route('invoices.store') }}" method="post" class="form-body">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>کد صورتحساب:</label>
                                                    <input type="text" name="code" class="form-control">
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>بابت:</label>
                                                    <input type="text" name="for" class="form-control">
                                                </div>


                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label>مبلغ: (ریال)</label>
                                                    <input type="text" name="amount" class="form-control">
                                                </div>


                                                <div class="col-lg-6">
                                                    <label>انتخاب واحد:</label><br>
                                                        <select style="width: 100%;" class="form-control m-select2" id="m_select2_1" multiple name="units[]">
                                                            @foreach ($units as $unit)
                                                                <option value="{{ $unit->id }}">{{ $unit->fullName . ' - ' .  str_replace('/', '', $unit->code )}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>

                                            </div>



                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">ثبت تغییرات</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingThree1">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                        صدور صورتحساب براساس فایل اکسل
                                    </div>
                                </div>
                                <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
                                    <div class="card-body">

                                        <div class="form-group form-group-last">
                                            <div class="alert alert-secondary" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                                <div class="alert-text">
                                                    جهت بارگذاری فایل اکسل ابتدا فایل را با کلیک برروی گزینه سبز رنگ دانلود کرده و سپس بعد از تکمیل در فرم زیر بارگذاری نمایید.
                                                </div>
                                            </div>
                                        </div>


                                        <p class="text-center">
                                            <a style="text-align: center" class="text-center" href="{{ route('invoices.downloadExcel') }}"><button type="button" class="m-auto text-center btn btn-primary btn-wide btn-elevate btn-elevate-air">دانلود فایل نمونه اکسل</button></a>
                                            <a style="text-align: center" class="text-center" href=""><button type="button" class="m-auto text-center btn btn-info btn-wide btn-elevate btn-elevate-air">مشاهده آموزش</button></a>
                                        </p>

                                        <form action="{{ route('invoices.uploadExcel') }}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div style="width: 400px" class="form-group m-auto">
                                                <label>بارگذاری فایل اکسل:</label>
                                                <div></div>
                                                <div class="custom-file">
                                                    <input type="file" name="excel" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="excel">انتخاب فایل</label>
                                                </div>
                                            </div>
                                            <p class="text-center mt-4"><button type="submit" class="m-auto text-center btn btn-success btn-wide btn-elevate btn-elevate-air">آپلود فایل اکسل</button></p>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div style="display: none;" class="card">
                                <div class="card-header" id="headingFour1">
                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                        زمانبندی ایجاد خودکار صورتحساب
                                    </div>
                                </div>
                                <div id="collapseFour1" class="collapse" aria-labelledby="headingFour1" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        فرم ایجاد
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!--end::Accordion-->
                    </div>
                </div>
            </div>


        </div>



    </div>


@endsection


@section('footerScripts')
    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>

@stop