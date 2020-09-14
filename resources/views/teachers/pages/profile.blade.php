@extends('teachers/layouts/index')
@section('title')
Index
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="be/css/bootstrap.min.css">
<!-- modals CSS
		============================================ -->
<link rel="stylesheet" href="be/css/modals.css">
<!-- style CSS
		============================================ -->
<link rel="stylesheet" href="be/style.css">
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
                                
                            <a href="{{route('teacher_index')}}"><b>Upload Lesson plan</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: center">

                        <h2>IEG - School Partner<br>PROFILE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="library-book-area mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#"><img src="be/img/product/profile-bg.jpg" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <img src="upload/teachers/{{$teacher->image}}" alt="">
                        <h4>{{$teacher->fullname}}</h4>
                        <h5>{{$teacher->coso->name}}</h5>
                        {{-- <a class="follow-cards" href="#">Follow</a> --}}
                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Email ID</b><br />{{$teacher->email}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Phone</b><br />{{$teacher->mobile}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                                        <p><b>Address</b><br /> {{$teacher->address}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="address-hr">
                                        <a href="{{$teacher->facebook}}" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="address-hr">
                                        <a href="{{$teacher->twitter}}" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="address-hr">
                                        <a href="mailto:{{$teacher->email}}"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                    <div class="single-review-st-hd">
                        <h2>Profile</h2>
                    </div>
                    <div class="review-content-section" style="margin-left:30px">
                        <div class="pro-ad">

                            <form action="{{route('profile_update', $teacher->id)}}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Fullname</label>
                                            <input name="fullname" type="text" class="form-control"
                                                placeholder="fullname" disabled value="{{$teacher->fullname}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Email</label>
                                            <input name="email" type="text" disabled class="form-control"
                                                placeholder="email" value="{{$teacher->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Mobile</label>
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Mobile no." value="{{$teacher->mobile}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Image</label>
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                        <i class="fa fa-download"></i>
                                                    </label>
                                                    <div class="file-button">
                                                        Image
                                                        <input type="file" name="image"
                                                            onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                    </div>
                                                    <input type="text" id="prepend-big-btn"
                                                        placeholder="no file selected">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Facebook link</label>
                                            <input type="text" name="facebook" class="form-control"
                                                placeholder="Facebook URL" value="{{$teacher->facebook}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Twitter</label>
                                            <input type="text" name="twitter" class="form-control"
                                                placeholder="twitter URL" value="{{$teacher->twitter}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Date of birth</label>
                                            <input type="text" name="dob" disabled class="form-control"
                                                placeholder="Date of Birth" value="{{$teacher->dob}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Address"
                                                value="{{$teacher->address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-form-label">Change password</label>
                                        <input type="checkbox" name="changepass" id="changepassword">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Password</label>
                                            <input name="pwd" type="password" class="form-control pwd"
                                                placeholder="PassWord" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Re-Password</label>
                                            <input name="repwd" type="password" class="form-control pwd"
                                                placeholder="Re-PassWord" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress mg-t-15">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script2')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!-- jquery
		============================================ -->
<script src="be/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
        ============================================ -->
<script src="be/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection