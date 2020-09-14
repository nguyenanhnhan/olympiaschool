<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Kiaalap - Kiaalap Admin Template</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/font-awesome.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="be/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/responsive.css">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <div class="error-pagewrap">
        <div class="error-page-int">

            @if(session('msg'))
            <div class="alert alert-danger alert-dismissible fade in">
                {{ session('msg') }}
            </div>
            @endif
            <div class="text-center m-b-md custom-login">
                <h3>TEACHER LOGIN</h3>
                <p>login to upload lesson plan</p>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('teacher_login')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username"
                                    required="" value="" name="email" id="email" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                                <label class="control-label">mobile</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username"
                                    required="" value="" name="mobile" id="mobile" class="form-control">
                            </div> --}}
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******"
                                    required="" value="" name="pwd" id="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>