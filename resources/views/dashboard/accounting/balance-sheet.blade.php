@extends('dashboard.layouts.master', ['title' => 'صورت درآمد و هزینه'])


@section('content')

    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />



    <div class="row">
        <div class="col-lg-6">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            درآمد ها
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>عنوان درآمد </th>
                                    <th>مبلغ (ریال)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($incomeHeadings as $incomeHeading)
                                    <tr>
                                        <th>{{ $incomeHeading->name }}</th>
                                        <td>{{ number_format($incomes->where('income_headings_id', $incomeHeading->id)->sum('amount')) }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th>مجموع:‌</th>
                                    <td>{{ number_format($incomes->sum('amount')) }}‌</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
        </div>

        <div class="col-lg-6">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            هزینه ها
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>عنوان هزینه </th>
                                    <th>مبلغ (ریال)</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($costHeadings as $costHeading)
                                        <tr>
                                            <th>{{ $costHeading->name }}</th>
                                            <td>{{ number_format(\App\Cost::where('cost_headings_id', $costHeading->id)->sum('amount')) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th>مجموع:‌</th>
                                        <td>{{ number_format(\App\Cost::all()->sum('amount')) }}‌</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Form-->
            </div>
        </div>


    </div>




@endsection


@section('footerScripts')


@stop
