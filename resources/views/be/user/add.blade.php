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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Add new admin</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="pro-ad">
                                            <form action="{{route('user_add')}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Fullname</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="name" type="text"
                                                                placeholder="Fullname">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="email" type="text"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Mobile</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="mobile" type="number"
                                                                placeholder="Mobile">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input name="pwd" type="password" class="form-control"
                                                                placeholder="PassWord">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Re-Password</label>
                                                        <div class="col-sm-10">
                                                            <input name="repwd" type="password" class="form-control"
                                                                placeholder="Re-PassWord">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Role</label>
                                                        <div class="col-sm-10 form-group">
                                                            <select name="role" id=""  class="form-control">
                                                                @foreach ($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->role}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-form-label">Image</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="image" type="file">
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
@section('script')

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