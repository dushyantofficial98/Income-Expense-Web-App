<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Income Expense App</title>
</head>
<body>

<section class="material-half-bg">
    <div class="cover"></div>
</section>
<style>
    .login-content .login-box {
        min-height: 469px;
    }
    .check_color_name{
        color: red;
    }
    /*.uncheck_color_name{*/
    /*    color: red;*/
    /*}*/
</style>
<section class="login-content">
    @include('Admin.languages')
    <div class="logo">
        <h1>Income Expense App</h1>
    </div>

    <div class="login-box">
        <form class="login-form" action="{{ route('login') }}" method="POST" style="margin-top: -27px;">
            @csrf
            <h3 class="login-head">
                <i class="fa fa-lg fa-fw fa-user"></i>SIGN IN
            </h3>

            <div class="form-group">
                <label class="control-label">Email</label>
                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Enter Your Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fa fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           id="password"
                           placeholder="Enter Your Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="toggle-password"
                                  onclick="togglePasswordVisibility('password')">
    <i class="fa fa-eye-slash" aria-hidden="true"></i>
</span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
{{--                        <input type="checkbox" onclick="myFunction()">Show Password--}}

                        <label>
{{--                            <input type="checkbox" id="remember" onclick="myFunction()" {{ old('remember') ? 'checked' : '' }}><span class="label-text">Stay Signed in</span>--}}
                            <input type="checkbox" id="remember" onclick="myFunction()" {{ old('remember') ? 'checked' : '' }}>
                            <span class="label-text"><b id="hide_show">Show Password</b></span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                <a href="{{route('register')}}" class="btn btn-primary btn-block"><i class="fa fa-registered" aria-hidden="true"></i>SIGN UP</a>
            </div>
        </form>


        @include('Admin.flash-message')
        <form class="forget-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control @error('email') is-invalid @enderror"  name="email" type="text" placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
            </div>
        </form>
    </div>
</section>

<!-- Essential javascripts for application to work-->
<script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('admin/js/plugins/pace.min.js')}}"></script>
<script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });

</script>
<script>
    function togglePasswordVisibility(inputId) {
        var passwordInput = document.getElementById(inputId);
        var toggleIcon = document.querySelector('.toggle-password i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        }
    }
</script>

</body>
</html>




