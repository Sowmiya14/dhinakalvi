<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Come N Wish - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets\plugins\bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('assets\plugins\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="{{ url('assets\plugins\themify\css\themify.css') }}" rel="stylesheet" type="text/css">

    <!-- Angular Tooltip Css -->
    <link href="{{ url('assets\plugins\angular-tooltip\angular-tooltips.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ url('assets\dist\css\animate.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('assets\dist\css\glovia.css') }}" rel="stylesheet">
    <link href="{{ url('assets\dist\css\glovia-responsive.css') }}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link id="jssDefault" rel="stylesheet" href="{{ url('assets\dist\css\skins\default.css') }}">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs hidden-sm col-lg-6 col-md-6 gredient-bg">
            <div class="clearfix">
                <div class="logo-title-container text-center">
                    <h3 class="cl-white text-upper">Welcome</h3>
                    <h1>ComeNWish - Admin</h1>
                </div> <!-- .logo-title-container -->
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">

            <div class="login-container animated fadeInRightBig">

                <h2 class="text-center text-upper">Login</h2>
                <form class="form-horizontal" method="POST" action="{{ url('/admin/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email or Username" value="{{ old('email') }}" autofocus>
                        <i class="fa fa-user"></i>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group help">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">

                        <i class="fa fa-lock"></i>
                        <a href="#" class="pass-view fa fa-eye"></a>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="flexbox align-items-center">
									<span class="custom-checkbox">
										<input type="checkbox" id="checkbox1" name="remember">
										<label for="checkbox1">Remember me</label>
									</span>
                            <a href="{{ url('/admin/password/reset') }}" data-toggle="tooltip" class="theme-cl" data-original-title="Forgot Password">Forgot Password?</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="flexbox align-items-center">
                            <button type="submit" class="btn gredient-bg">log in</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div>



<!-- Bootstrap core JavaScript-->
<script src="{{ url('assets\plugins\jquery\jquery.min.js') }}"></script>
<script src="{{ url('assets\plugins\bootstrap\js\bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('assets\plugins\jquery-easing\jquery.easing.min.js') }}"></script>

<!-- Slick Slider Js -->
<script src="{{ url('assets\plugins\slick-slider\slick.js') }}"></script>

<!-- Slim Scroll -->
<script src="{{ url('assets\plugins\slim-scroll\jquery.slimscroll.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('assets\dist\js\glovia.js') }}"></script>
<script src="{{ url('assets\dist\js\jQuery.style.switcher.js') }}"></script>
<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#styleOptions').styleSwitcher();
    });
</script>

<script>
    $('.dropdown-toggle').dropdown()
</script>

</body>
</html>
