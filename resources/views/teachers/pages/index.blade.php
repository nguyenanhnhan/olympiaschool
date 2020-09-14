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
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: center">

                        <h2>IEG - School Partner<br>Lesson plan submission</h2>
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
                        <h2>Upload lesson plan</h2>
                    </div>
                    <div class="review-content-section" style="margin-left:30px">
                        <div class="pro-ad">
                            <form action="{{route('store-lp')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" type="text" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Note</label>
                                        <div class="col-sm-10">
                                            <textarea name="note" class="form-control" id="" cols="30"
                                                placeholder="Note" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-form-label">File</label>
                                        <div class="col-sm-10">
                                            {{-- <input class="form-control" name="file" type="file"> --}}
                                            <div class="input-group control-group increment">
                                                <input type="file" name="file[]" class="form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button"><i
                                                            class="glyphicon glyphicon-plus"></i>Add</button>
                                                </div>
                                            </div>
                                            <div class="clone hide">
                                                <div class="control-group input-group" style="margin-top:10px">
                                                    <input type="file" name="file[]" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-danger" type="button"><i
                                                                class="glyphicon glyphicon-remove"></i>
                                                            Remove</button>
                                                    </div>
                                                </div>
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
                            <script type="text/javascript">
                                $(document).ready(function() {
                            $(".btn-success").click(function(){ 
                                var html = $(".clone").html();
                                $(".increment").after(html);
                            });
                            $("body").on("click",".btn-danger",function(){ 
                                $(this).parents(".control-group").remove();
                            });
                        });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Note</th>
                        {{-- <th>Detail</th> --}}
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lps as $lp)
                    <tr>
                        <td>
                            {{$lp->id}}
                        </td>
                        <td>
                            {{$lp->title}}
                        </td>
                        <td>
                            <a class="Warning Warning-color mg-b-10" target="_blank" href="{{route('preview-lp', [$teacher->id, $lp->id])}}">{{$lp->file}}</a>
                        </td>
                        <td>
                            {{$lp->note}}
                        </td>
                        <td>
                            <a href="{{route('destroy-lp', $lp->id)}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Note</th>
                        {{-- <th>Detail</th> --}}
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
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