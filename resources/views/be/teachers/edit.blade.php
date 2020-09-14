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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="upload/teachers/{{$teacher->image}}" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Name</b><br />{{$teacher->fullname}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Designation</b><br /> Teacher</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Email ID</b><br />{{$teacher->email}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Phone</b><br /> {{$teacher->mobile}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Address</b><br /> address</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <h3>500</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <h3>900</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <h3>600</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Activity</a></li>
                        <li><a href="#reviews"> Biography</a></li>
                        <li><a href="#INFORMATION">Update Details</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                                        tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/2.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Karl Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                            Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/4.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Alice Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i>
                                                            Nudge</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Mark Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/2.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Karl Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                            Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="be/img/contact/4.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Alice Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i
                                                                class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Full Name</b><br /> Fly Zend</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Mobile</b><br /> 01962067309</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Email</b><br /> fly@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Location</b><br /> UK</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                                        justo. Nullam dictum felis eu pede mollis pretium. Integer
                                                        tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                                        eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                                        vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                                        justo. Nullam dictum felis eu pede mollis pretium. Integer
                                                        tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                                        eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                                        vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                                        justo. Nullam dictum felis eu pede mollis pretium. Integer
                                                        tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                                        eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                                                        vitae, eleifend ac, enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Skill Set</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Java</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 90%;" class="progress-bar progress-yellow">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Php</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 80%;" class="progress-bar progress-green">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Apps</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 70%;" class="progress-bar progress-blue">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>C#</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 60%;" class="progress-bar progress-red">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Education</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Experience</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Subjects</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form action="admin/teachers/edit/{{$teacher->id}}" method="post"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="fullname" type="text" class="form-control"
                                                            placeholder="fullname" value="{{$teacher->fullname}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" type="text" class="form-control"
                                                            placeholder="email" value="{{$teacher->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="address"
                                                            placeholder="Address" value="{{$teacher->address}}">
                                                    </div>
                                                    <div class="file-upload-inner ts-forms">
                                                        <div class="input prepend-big-btn">
                                                            <label class="icon-right" for="prepend-big-btn">
                                                                <i class="fa fa-download"></i>
                                                            </label>
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="image"
                                                                    onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                            </div>
                                                            <input type="text" id="prepend-big-btn"
                                                                placeholder="no file selected"
                                                                value="{{$teacher->image}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    {{-- <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                        <input type="text" class="form-control"
                                                            placeholder="Description">
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <input type="text" name="facebook" class="form-control"
                                                            placeholder="Facebook URL" value="{{$teacher->facebook}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="twitter" class="form-control"
                                                            placeholder="twitter URL" value="{{$teacher->twitter}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="dob" class="form-control"
                                                            placeholder="Date of Birth" value="{{$teacher->dob}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="mobile" class="form-control"
                                                            placeholder="Mobile no." value="{{$teacher->mobile}}">
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