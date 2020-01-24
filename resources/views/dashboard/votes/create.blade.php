@extends('dashboard.layouts.master', ['title' => 'ایجاد نظرسنجی جدید'])

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title borj-color">فرم ایجاد نظرسنجی جدید</h3>
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

                    <form enctype="multipart/form-data" method="post" action="{{ route('votes.store') }}" class="form form-horizontal form-bordered striped-rows">
                       @csrf
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>عنوان نظرسنجی:</label>
                                <input name="title" type="text" class="form-control" placeholder="مثال: رنگ آسانسور ">
                            </div>
                            <div class="col-lg-6">
                                <label class="">سوال نظرسنجی:</label>
                                <input type="text" name="question" class="form-control" placeholder="مثال: بنظر شما بهتر از رنگ درب آسانسور چه رنگی شود؟ ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>گزینه ها:</label>
                                <div class="kt-input-icon">
                                    <select style="direction: rtl; text-align: right" class="form-control m-select2" id="m_select2_114" multiple name="options[]"></select>
                                    <span class="form-text text-muted">جهت ثبت گزینه، پس از تایپ آن Enter را بفشارید. سپس گزینه جدید را وارد نموده و مجددا Enter را بفشارید</span>
                                </div>
                            </div>
                        </div>
                        <p style="text-align:center"><button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air mt-2" data-toggle="modal" data-target=" #modall">افزودن نظرسنجی</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection


@section('footerScripts')
    <script src="/dashboard/assets/js/select2.js" type="text/javascript"></script>
@stop