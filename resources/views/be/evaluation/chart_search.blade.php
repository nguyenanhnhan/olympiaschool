@extends('be/layouts/index')
@section('title')
add new teacher
@endsection
@section('style')
    <style>
        .datepicker table tr td.range, .datepicker table tr td.range:hover, .datepicker table tr td.range.disabled, .datepicker table tr td.range.disabled:hover{
            background: #90c2ff !important;
        }
    </style>
@endsection
@section('content')
<!-- Single pro tab review Start-->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Trungbinhf</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{route('chart_location_result')}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
                                                            <div class="form-group "
                                                                id="data_5">
                                                                <label>Range select (mm/dd/yyyy)</label>
                                                                <div class="input-daterange input-group" id="datepicker" style="width: 100%">
                                                                    <input type="text" class="form-control" name="start"
                                                                        value="{{date('m/d/Y')}}" />
                                                                    <span class="input-group-addon">to</span>
                                                                    <input type="text" class="form-control" name="end"
                                                                        value="{{date('m/d/Y')}}" />
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection