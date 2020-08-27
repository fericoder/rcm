@extends('dashboard.layouts.master', ['title' => 'فرمول محاسبه شارژ'])


@section('content')

    <style>
        .form-group{
            margin-bottom: 0px!important;
            margin-top: 0px!important;
        }
        .kt-separator.kt-separator--lg, .kt-separator.kt-separator--space-lg{
            margin: 5px!important;
        }
    </style>

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-warning"></i></div>
            <div class="alert-text">
                جهت وارد کردن نحوه محاسبه شارژ، موارد مورد نظر جهت محاسبه را تکمیل و برروی گزینه ثبت تنظیمات کلیک نمایید.
            </div>
    </div>


    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    نحوه محاسبه شارژ
                </h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

        <!--begin::Form-->
        <form action="{{ route('dashboard.charge.update', \Auth::user()->complex->id) }}" method="post" class="kt-form kt-form--fit kt-form--label-right">
            @csrf
            <div class="kt-portlet__body">

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label data-toggle="kt-tooltip" title="محاسبه مبلغ باتوجه به مبلغ وارد شده در بخش ساکنین" data-html="true" class="col-1 col-form-label">شارژ واحدی:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->unit == 'on' ? 'checked="checked"' : '' }} type="checkbox" name="unit">
							<span></span>
							</label>
							</span>
                    </div>
                    <label class="col-lg-4 col-form-label">محاسبه مبلغ باتوجه به مبلغ وارد شده در بخش ساکنین</label>


                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label data-toggle="kt-tooltip" title="محاسبه مبلغ ثابت برای کلیه واحدها" data-html="true" class="col-1 col-form-label">شارژ ثابت:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->static == 'on' ? 'checked="checked"' : '' }} type="checkbox" name="static">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('staticAmount', $charge->staticAmount) }}" min="0" name="staticAmount" class="form-control" placeholder=" (ریال)">
                    </div>

                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">متراژ:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->meter == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="meter">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('meterAmount', $charge->meterAmount) }}" name="meterAmount" min="0" class="form-control" placeholder=" (ریال) به ازای هر متر">
                    </div>

                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">طبقه:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->floor == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="floor">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('floorAmount', $charge->floorAmount) }}" name="floorAmount" min="0" class="form-control" placeholder=" (ریال)">
                    </div>

                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">نفرات:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->person == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="person">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('personAmount', $charge->personAmount) }}" name="personAmount" min="0" class="form-control" placeholder=" (ریال) به ازای هر نفر ">
                    </div>

                    {{--<div class="col-2"></div>--}}
                    {{--<div class="col-1">--}}
							{{--<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">--}}
							{{--<label>--}}
							{{--<input {{ $charge->unit == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="vacant">--}}
							{{--<span></span>--}}
							{{--</label>--}}
							{{--</span>--}}
                    {{--</div>--}}

                    {{--<label class="col-lg-2   col-form-label">محاسبه برای بالای:</label>--}}
                    {{--<div class="col-lg-1">--}}
                        {{--<input type="number" value="{{ old('vacantAmount', $charge->vacantAmount) }}" min="0" name="vacantAmount" class="form-control" placeholder="نفر ">--}}
                    {{--</div>--}}


                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>


                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">واحد های خالی:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->vacant == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="vacant">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" min="0" name="vacantAmount" value="{{ old('vacantAmount', $charge->vacantAmount) }}" class="form-control" placeholder="مبلغ (ریال)">
                    </div>

                </div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label data-toggle="kt-tooltip" title="ایجاد صورتحساب در تاریخ مقرر" data-html="true" class="col-1 col-form-label">ایجاد خودکار:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->automaticGenerate == 'on' ? 'checked="checked"' : '' }} type="checkbox" name="automaticGenerate">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">روز ماه:</label>
                    <div class="col-lg-3">
                        <select class="form-control" name="automaticGenerateDay" id="exampleSelectd">
                            <option {{ $charge->automaticGenerateDay == '1' ? 'selected' : '' }} >1</option>
                            <option {{ $charge->automaticGenerateDay == '2' ? 'selected' : '' }} >2</option>
                            <option {{ $charge->automaticGenerateDay == '3' ? 'selected' : '' }} >3</option>
                            <option {{ $charge->automaticGenerateDay == '4' ? 'selected' : '' }} >4</option>
                            <option {{ $charge->automaticGenerateDay == '5' ? 'selected' : '' }} >5</option>
                            <option {{ $charge->automaticGenerateDay == '6' ? 'selected' : '' }} >6</option>
                            <option {{ $charge->automaticGenerateDay == '7' ? 'selected' : '' }} >7</option>
                            <option {{ $charge->automaticGenerateDay == '8' ? 'selected' : '' }} >8</option>
                            <option {{ $charge->automaticGenerateDay == '9' ? 'selected' : '' }} >9</option>
                            <option {{ $charge->automaticGenerateDay == '10' ? 'selected' : '' }} >10</option>
                            <option {{ $charge->automaticGenerateDay == '11' ? 'selected' : '' }} >11</option>
                            <option {{ $charge->automaticGenerateDay == '12' ? 'selected' : '' }} >12</option>
                            <option {{ $charge->automaticGenerateDay == '13' ? 'selected' : '' }} >13</option>
                            <option {{ $charge->automaticGenerateDay == '14' ? 'selected' : '' }} >14</option>
                            <option {{ $charge->automaticGenerateDay == '15' ? 'selected' : '' }} >15</option>
                            <option {{ $charge->automaticGenerateDay == '16' ? 'selected' : '' }} >16</option>
                            <option {{ $charge->automaticGenerateDay == '17' ? 'selected' : '' }} >17</option>
                            <option {{ $charge->automaticGenerateDay == '18' ? 'selected' : '' }} >18</option>
                            <option {{ $charge->automaticGenerateDay == '19' ? 'selected' : '' }} >19</option>
                            <option {{ $charge->automaticGenerateDay == '20' ? 'selected' : '' }} >20</option>
                            <option {{ $charge->automaticGenerateDay == '21' ? 'selected' : '' }} >21</option>
                            <option {{ $charge->automaticGenerateDay == '22' ? 'selected' : '' }} >22</option>
                            <option {{ $charge->automaticGenerateDay == '23' ? 'selected' : '' }} >23</option>
                            <option {{ $charge->automaticGenerateDay == '24' ? 'selected' : '' }} >24</option>
                            <option {{ $charge->automaticGenerateDay == '25' ? 'selected' : '' }} >25</option>
                            <option {{ $charge->automaticGenerateDay == '12' ? 'selected' : '' }} >26</option>
                            <option {{ $charge->automaticGenerateDay == '27' ? 'selected' : '' }} >27</option>
                            <option {{ $charge->automaticGenerateDay == '28' ? 'selected' : '' }} >28</option>
                            <option {{ $charge->automaticGenerateDay == '29' ? 'selected' : '' }} >29</option>
                        </select>
                    </div>

                </div>


                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">پرداخت جزیی:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->partialPayment == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="partialPayment">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">حداقل درصد از کل بدهی:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('partialPaymentPercent', $charge->partialPaymentPercent) }}" min="1" max="100" name="partialPaymentPercent" class="form-control" placeholder="عدد درصد">
                    </div>

                </div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

                <div class="form-group row form-group-marginless kt-margin-t-20">
                    <label class="col-1 col-form-label">مقدار گرد کردن:</label>

                    <div class="col-1">
							<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
							<label>
							<input {{ $charge->rounding == 'on' ? 'checked="checked"' : '' }} type="checkbox"  name="rounding">
							<span></span>
							</label>
							</span>
                    </div>

                    <label class="col-lg-1 col-form-label">مبلغ:</label>
                    <div class="col-lg-3">
                        <input type="number" value="{{ old('roundingAmount', $charge->roundingAmount) }}" min="1" name="roundingAmount" class="form-control" placeholder="مبلغ (ریال)">
                    </div>

                </div>




            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7">
                            <button style="font-size: 15px" type="submit" class="btn btn-success">ثبت تنظیمات</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
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
// end data table m_table_2






            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>
@stop