@extends('dashboard.layouts.master', ['title' => 'رسید پرداخت'])


@section('content')

    <link href="/dashboard/assets/js/invoice-1.rtl.css" rel="stylesheet" type="text/css" />

    <style>
        th,td{
            text-align: center!important;
        }
    </style>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">
                                رسید پرداخت صورتحساب کد {{ $invoice->code }}
                            </h3>
                        </div>


                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-invoice-1">
                            <div class="kt-invoice__head" style="background-image: url(/dashboard/assets/img/bg-6.jpg);">
                                <div class="kt-invoice__container">
                                    <div class="kt-invoice__brand">
                                        <h1 class="kt-invoice__title"><i class="fa fa-check text-success mr-3"></i>رسید پرداخت {{ $invoice->for }}</h1>
                                    </div>
                                    <p class="text-white"> سامانه مدیریت {{ \Auth::user()->complex->name }}</p>

                                </div>
                            </div>
                            <div class="kt-invoice__body">
                                <div class="kt-invoice__container">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>عنوان صورتحساب</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>تاریخ پرداخت</th>
                                                <th>نام و نام خانوادگی</th>
                                                <th>کد واحد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $invoice->for }}</td>
                                                <td style="direction: ltr; font-family: BYekan!important;">{{ jdate($invoice->created_at) }}</td>
                                                <td style="direction: ltr; font-family: BYekan!important;">{{ jdate($invoice->updated_at) }}</td>
                                                <td>{{ $invoice->user->fullName }}</td>
                                                <td>{{ $invoice->user->code }}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-invoice__footer">
                                <div class="kt-invoice__container">
                                    <div class="kt-invoice__bank">
                                        <div class="kt-invoice__title">اطلاعات صورتحساب و رسید بانک</div>

                                        <div class="kt-invoice__item">
                                            <span class="kt-invoice__label">کد صورتحساب:</span>
                                            <span class="kt-invoice__value">{{ $invoice->code }}</span>
                                        </div>

                                        <div style="display:none" class="kt-invoice__item">
                                            <span class="kt-invoice__label">کد رهگیری:</span>
                                            <span class="kt-invoice__value"></span>
                                        </div>

                                        <div style="display:none" class="kt-invoice__item">
                                            <span class="kt-invoice__label">شناسه پرداخت:</span>
                                            <span class="kt-invoice__value"></span>
                                        </div>
                                    </div>
                                    <div style=" text-align: right;" class="kt-invoice__total">
                                        <span class="kt-invoice__title">مبلغ:</span>
                                        <span style="font-family: BYekan!important;" class="kt-invoice__price">{{ number_format($invoice->amount) }} ریال</span>
                                        <span class="kt-invoice__notice">پرداخت شده</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-invoice__actions">
                                <div class="kt-invoice__container">
                                    <button type="button" class="btn btn-brand btn-bold" onclick="window.print();">چاپ صورتحساب</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>


@endsection


@section('footerScripts')
@stop