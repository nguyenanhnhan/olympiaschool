@extends('be/layouts/index')
@section('title')
add new admin
@endsection
@section('content')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Professor Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div id="dropzone1" class="pro-ad">
                                    <form action="{{route('subject_update', $subject->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <select name="criteria" class="form-control">
                                                        <option value="none" selected="" hidden disabled="">
                                                            Select criteria</option>
                                                        <option @if ($subject->criteria == 1)
                                                            selected
                                                        @endif value="1">1</option>
                                                        <option @if ($subject->criteria == 2)
                                                            selected
                                                        @endif value="2">2</option>
                                                        <option @if ($subject->criteria == 3)
                                                            selected
                                                        @endif value="3">3</option>
                                                        <option @if ($subject->criteria == 4)
                                                            selected
                                                        @endif value="4">4</option>
                                                        <option @if ($subject->criteria == 5)
                                                            selected
                                                        @endif value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="name" type="text" class="form-control"
                                                placeholder="Full Name Subject*" value="{{$subject->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="code_name"
                                                        placeholder="Code name *" value="{{$subject->code_name}}">
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
@endsection
@section('script')


<script>
    $(document).ready(function(){
            $("#changepassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".pwd").removeAttr('disabled');
                }
                else
                {
                    $(".pwd").attr('disabled','');
                }
            })
        })
</script>
<!-- metisMenu JS
		============================================ -->
<script src="be/js/metisMenu/metisMenu.min.js"></script>
<script src="be/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="be/js/sparkline/jquery.sparkline.min.js"></script>
<script src="be/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
		============================================ -->
<script src="be/js/calendar/moment.min.js"></script>
<script src="be/js/calendar/fullcalendar.min.js"></script>
<script src="be/js/calendar/fullcalendar-active.js"></script>
<!-- maskedinput JS
		============================================ -->
<script src="be/js/jquery.maskedinput.min.js"></script>
<script src="be/js/masking-active.js"></script>
<!-- datepicker JS
		============================================ -->
<script src="be/js/datepicker/jquery-ui.min.js"></script>
<script src="be/js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
		============================================ -->
<script src="be/js/form-validation/jquery.form.min.js"></script>
<script src="be/js/form-validation/jquery.validate.min.js"></script>
<script src="be/js/form-validation/form-active.js"></script>
<!-- dropzone JS
		============================================ -->
<script src="be/js/dropzone/dropzone.js"></script>
<!-- tab JS
		============================================ -->
<script src="be/js/tab.js"></script>
<!-- plugins JS
		============================================ -->
<script src="be/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="be/js/main.js"></script>
@endsection